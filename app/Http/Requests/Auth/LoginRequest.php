<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'login' => ['required', 'string'], // 'login' can be either email or phone_number
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
public function authenticate(): void
{
    $this->ensureIsNotRateLimited();

    $loginType = filter_var($this->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'phone_number';
    $this->merge([$loginType => $this->input('login')]);

    // Log the credentials being used
    \Log::debug('Attempting login with:', [
        $loginType => $this->input($loginType),
        'password' => $this->input('password'),
    ]);

    if (! Auth::attempt($this->only($loginType, 'password'), $this->boolean('remember'))) {
        RateLimiter::hit($this->throttleKey());

        // Log authentication failure
        \Log::debug('Authentication failed for:', [
            $loginType => $this->input($loginType),
            'password' => $this->input('password'),
        ]);

        throw ValidationException::withMessages([
            'login' => trans('auth.failed'),
        ]);
    }

    RateLimiter::clear($this->throttleKey());
}

    /**
     * Ensure the login request is not rate limited.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'login' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     */
    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->input('login')).'|'.$this->ip());
    }
}