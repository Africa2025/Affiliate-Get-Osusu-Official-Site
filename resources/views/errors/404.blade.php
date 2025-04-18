<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Error - Marketplace</title>
    
        
    
    <script>
        window.location.replace("{{ url('/login') }}");
    </script>
    
    
    
    
    @include('components.marketplace_head')
    <style>
        .error-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
            color: #333;
        }
        .error-code {
            font-size: 6rem;
            font-weight: bold;
            color: #ff4a4a;
        }
        .error-message {
            font-size: 1.8rem;
            margin-top: 10px;
        }
        .error-description {
            font-size: 1.2rem;
            margin-top: 10px;
            color: #666;
        }
        .home-btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #64b496;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1.2rem;
        }
        .home-btn:hover {
            background-color: #509d82;
        }
    </style>
</head>
<body class="body-bg-6">
    @include('components.header')
<script>
    setTimeout(function() {
        window.location.href = "{{ url('/login') }}";
    }); // Redirects after 3 seconds (adjust as needed)
    <div class="error-container">
        <div class="error-code">404</div>
        <div class="error-message">Oops! Page Not Found</div>
        <div class="error-description">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</div>
        <a href="{{ url('/login') }}" class="home-btn">Go Back Home</a>
    </div>

    <!-- Vendor Custom -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/range-slider.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/aos.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>

    <!-- Main Custom -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</html>
