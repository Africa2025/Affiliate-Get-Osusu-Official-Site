    <!-- Header -->
    <header class="h-[142px] max-[991px]:h-[133px] max-[575px]:h-[173px] bg-[#fff] border-b-[1px] border-solid border-[#e9e9e9]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1600px]:max-w-[1500px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]"> 
                    <div class="top-header py-[20px] flex flex-row gap-[10px] justify-between border-b-[1px] border-solid border-[#e9e9e9] relative z-[4] max-[575px]:py-[15px] max-[575px]:block">
                        <a href="/" class="cr-logo max-[575px]:mb-[15px] max-[575px]:flex max-[575px]:justify-center">
                            <img src="{{ asset('images/getosusu_logo.png') }}" alt="logo" class="logo block h-[35px] w-[115px] max-[575px]:w-[100px]">
                            <img src="{{ asset('images/getosusu_logo.png') }}" alt="logo" class="dark-logo hidden h-[35px] w-[115px] max-[575px]:w-[100px]">
                        </a>
                        <form class="cr-search relative max-[575px]:max-w-[350px] max-[575px]:m-auto">
                            <input class="search-input w-[600px] h-[45px] pl-[15px] pr-[175px] border-[1px] border-solid border-[#8637b9] rounded-[5px] outline-[0] max-[1399px]:w-[400px] max-[991px]:max-w-[350px] max-[575px]:w-full max-[420px]:pr-[45px]" type="text" placeholder="Search For items...">
                            <select class="form-select mr-[10px] w-[120px] h-[calc(100%-2px)] border-[0] tracking-[0] absolute top-[1px] pt-[0.375rem] pb-[0.375rem] pl-[0.5rem] outline-[0] right-[45px] text-[13px] border-l-[1px] border-solid border-[#8637b9] rounded-[0] max-[420px]:hidden" aria-label="Default select example">
                                <option selected>All Categories</option>
                                <option value="1">Breakfast</option>
                                <option value="2">Rice</option>
                                <option value="3">Spices</option>
                            </select>
                            <a href="javascript:void(0)" class="search-btn w-[45px] bg-[#8637b9] absolute right-[0] top-[0] bottom-[0] rounded-r-[5px] flex items-center justify-center">
                                <i class="ri-search-line text-[14px] text-[#fff]"></i>
                            </a>
                        </form>
                        <div class="cr-right-bar flex max-[991px]:hidden">
                            <ul class="navbar-nav m-auto relative z-[3]">
                                <li class="nav-item dropdown relative">
                                    <a class="nav-link dropdown-toggle cr-right-bar-item transition-all duration-[0.3s] ease-in-out flex items-center relative text-[14px] font-medium text-[#000] z-[1] relative py-[11px] pr-[30px] pl-[8px] max-[1199px]:py-[8px]" href="javascript:void(0)">
                                        <i class="ri-user-3-line pr-[5px] text-[21px] leading-[17px]"></i>
                                        <span class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[15px] leading-[15px] text-[15px] font-medium text-[#000] tracking-[0.03rem]">Account</span>
                                    </a>
                                    <ul class="dropdown-menu transition-all duration-[0.3s] ease-in-out py-[8px] min-w-[160px] mt-[35px] absolute text-left opacity-0 invisible left-auto bg-[#fff] rounded-[5px] block z-[9] border-[1px] border-solid border-[#e9e9e9]">
                                        <li class="w-full mr-[0]">
                                            <a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[7px] px-[20px] bg-[#fff] relative capitalize block w-full text-[#777] text-[13px] font-normal" href="register.html">Register</a>
                                        </li>
                                        <li class="w-full mr-[0]">
                                            <a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[7px] px-[20px] bg-[#fff] relative capitalize block w-full text-[#777] text-[13px] font-normal" href="checkout.html">Checkout</a>
                                        </li>
                                        <li class="w-full mr-[0]">
                                            <a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[7px] px-[20px] bg-[#fff] relative capitalize block w-full text-[#777] text-[13px] font-normal" href="login.html">Login</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <a href="wishlist.html" class="cr-right-bar-item pr-[30px] transition-all duration-[0.3s] ease-in-out flex items-center">
                                <i class="ri-heart-3-line pr-[5px] text-[21px] leading-[17px]"></i>
                                <span class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[15px] leading-[15px] font-medium text-[#000]">Wishlist</span>
                            </a>
                            <a href="{{ route('cart') }}" class="cr-right-bar-item Shopping-toggle transition-all duration-[0.3s] ease-in-out flex items-center">
                                <i class="ri-shopping-cart-line pr-[5px] text-[21px] leading-[17px]"></i>
                                <span class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[15px] leading-[15px] font-medium text-[#000]">Cart</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cr-fix" id="cr-main-menu-desk">
            <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1600px]:max-w-[1500px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="cr-menu-list w-full px-[12px] relative flex items-center flex-row justify-between">
                    <div class="cr-category-icon-block py-[10px] max-[991px]:hidden">
                        <div class="cr-category-menu relative">
                            <div class="cr-category-toggle w-[35px] h-[35px] border-[1px] border-solid border-[#e9e9e9] rounded-[5px] cursor-pointer flex items-center justify-center">
                                <i class="ri-menu-2-line text-[22px] text-[#2b2b2d] leading-[14px] block"></i>
                            </div>
                        </div>
                        <div class="cr-cat-dropdown transition-all duration-[0.3s] ease-in-out w-[600px] mt-[15px] p-[15px] absolute bg-[#fff] opacity-0 invisible left-[12px] z-[10] rounded-[5px] border-[1px] border-solid border-[#e9e9e9]">
                            <div class="cr-cat-block">
                                <div class="cr-cat-tab flex">
                                    <ul class="cr-tab-list nav flex-column nav-pills min-w-[180px] mr-[12px] rounded-[5px] flex flex-wrap flex-col justify-center" id="myTab">
                                        <li class="transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] bg-[#fff] border-[1px] border-solid border-[#e9e9e9] rounded-[5px] flex items-center cursor-pointer mb-[5px]">
                                            <a href="#v-pills-home" class="text-[13px] text-[#4b5966] tracking-[0] font-medium text-left capitalize">Dairy &amp; Bakery</a>
                                        </li>
                                        <li class="transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] bg-[#fff] border-[1px] border-solid border-[#e9e9e9] rounded-[5px] flex items-center cursor-pointer mb-[5px]">
                                            <a href="#v-pills-profile" class="text-[13px] text-[#4b5966] tracking-[0] font-medium text-left capitalize">Fruits &amp; Vegetable</a>
                                        </li>
                                        <li class="transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] bg-[#fff] border-[1px] border-solid border-[#e9e9e9] rounded-[5px] flex items-center cursor-pointer mb-[5px]">
                                            <a href="#v-pills-messages" class="text-[13px] text-[#4b5966] tracking-[0] font-medium text-left capitalize">Snack &amp; Spice</a>
                                        </li>
                                        <li class="transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] bg-[#fff] border-[1px] border-solid border-[#e9e9e9] rounded-[5px] flex items-center cursor-pointer mb-[5px]">
                                            <a href="#v-pills-settings" class="text-[13px] text-[#4b5966] tracking-[0] font-medium text-left capitalize">Juice &amp; Drinks</a>
                                        </li>
                                        <li class="transition-all duration-[0.3s] ease-in-out py-[10px] px-[15px] bg-[#fff] border-[1px] border-solid border-[#e9e9e9] rounded-[5px] flex items-center cursor-pointer mb-[5px]">
                                            <a href="#v-pills-profile" class="text-[13px] text-[#4b5966] tracking-[0] font-medium text-left capitalize">Fruits &amp; Vegetable</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content transition-all duration-[0.3s] ease-in-out w-full" id="myTabContent1">
                                        <div class="tab-pane" id="v-pills-home">
                                            <div class="tab-list flex flex-wrap w-full">
                                                <div class="grow-[1] px-[12px]">
                                                    <h6 class="cr-col-title h-auto mb-[10px] pb-[5px] text-[#8637b9] text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#e9e9e9]">Dairy</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Milk</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Ice cream</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Cheese</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Frozen custard</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Frozen yogurt</a></li>
                                                    </ul>
                                                </div>
                                                <div class="grow-[1] pl-[12px]">
                                                    <h6 class="cr-col-title h-auto mb-[10px] pb-[5px] text-[#8637b9] text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#e9e9e9]">Bakery</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Cake and Pastry</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Rusk Toast</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Bread &amp; Buns</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Chocolate Brownie</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Cream Roll</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="v-pills-profile">
                                            <div class="tab-list flex flex-wrap w-full">
                                                <div class="grow-[1]">
                                                    <h6 class="cr-col-title h-auto mb-[10px] pb-[5px] text-[#8637b9] text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#e9e9e9]">Fruits</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Cauliflower</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Bell Peppers</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Broccoli</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Cabbage</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Tomato</a></li>
                                                    </ul>
                                                </div>
                                                <div class="grow-[1]">
                                                    <h6 class="cr-col-title h-auto mb-[10px] pb-[5px] text-[#8637b9] text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#e9e9e9]">Vegetable</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Cauliflower</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Bell Peppers</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Broccoli</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Cabbage</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Tomato</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="v-pills-messages">
                                            <div class="tab-list flex flex-wrap w-full">
                                                <div class="grow-[1]">
                                                    <h6 class="cr-col-title h-auto mb-[10px] pb-[5px] text-[#8637b9] text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#e9e9e9]">Snacks</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Frenchfries</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">potatochips</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Biscuits &amp;Cookies</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Popcorn</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Rice Cakes</a></li>
                                                    </ul>
                                                </div>
                                                <div class="grow-[1]">
                                                    <h6 class="cr-col-title h-auto mb-[10px] pb-[5px] text-[#8637b9] text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#e9e9e9]">Spice</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Cinnamon Powder</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Cumin Powder</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Fenugreek Powder</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Pepper Powder</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Long Pepper</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="v-pills-settings">
                                            <div class="tab-list flex flex-wrap w-full">
                                                <div class="grow-[1]">
                                                    <h6 class="cr-col-title h-auto mb-[10px] pb-[5px] text-[#8637b9] text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#e9e9e9]">Juice</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Mango Juice</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Coconut Water</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Tetra Pack</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Apple Juices</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Lychee Juice</a></li>
                                                    </ul>
                                                </div>
                                                <div class="grow-[1]">
                                                    <h6 class="cr-col-title h-auto mb-[10px] pb-[5px] text-[#8637b9] text-[15px] font-medium leading-[30px] capitalize block border-b-[1px] border-solid border-[#e9e9e9]">soft drink</h6>
                                                    <ul class="cat-list">
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Breizh Cola</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Green Cola</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Jolt Cola</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Mecca Cola</a></li>
                                                        <li><a href="#" class="transition-all duration-[0.3s] ease-in-out bg-[#fff] rounded-[5px] text-left h-auto py-[5px] text-[#777] capitalize leading-[26px] font-normal text-[13px] block border-[0]">Topsia Cola</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="justify-between relative flex flex-wrap items-center max-[991px]:w-full max-[991px]:py-[10px]">
                        <a href="javascript:void(0)" class="navbar-toggler py-[7px] px-[14px] hidden text-[16px] leading-[1] max-[991px]:flex max-[991px]:p-[0] max-[991px]:border-[0]">
                            <i class="ri-menu-3-line max-[991px]:text-[20px]"></i>
                        </a>
                        <div class="cr-header-buttons hidden max-[991px]:flex max-[991px]:items-center">
                            <ul class="navbar-nav relative z-[3] m-auto max-[1199px]:mr-[-5px] max-[991px]:m-[0] flex flex-col">
                                <li class="nav-item dropdown relative">
                                    <a class="nav-link py-[11px] px-[8px] text-[14px] font-medium text-[#000] z-[1] relative max-[1199px]:py-[8px] max-[1199px]:px-[0] max-[991px]:mr-[20px]" href="javascript:void(0)">
                                        <i class="ri-user-3-line text-[20px]"></i>
                                    </a>
                                    <ul class="dropdown-menu transition-all duration-[0.3s] ease-in-out py-[8px] min-w-[160px] mt-[35px] absolute text-left opacity-0 invisible left-auto right-0 bg-[#fff] rounded-[5px] block z-[9] border-[1px] border-solid border-[#e9e9e9]">
                                        <li class="w-full">
                                            <a class="dropdown-item transition-all duration-[0.3s] ease-in-out w-full block py-[7px] px-[20px] bg-[#fff] relative capitalize text-[13px] text-[#777]" href="register.html">Register</a>
                                        </li>
                                        <li class="w-full">
                                            <a class="dropdown-item transition-all duration-[0.3s] ease-in-out w-full block py-[7px] px-[20px] bg-[#fff] relative capitalize text-[13px] text-[#777]" href="checkout.html">Checkout</a>
                                        </li>
                                        <li class="w-full">
                                            <a class="dropdown-item transition-all duration-[0.3s] ease-in-out w-full block py-[7px] px-[20px] bg-[#fff] relative capitalize text-[13px] text-[#777]" href="login.html">Login</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <a href="wishlist.html" class="cr-right-bar-item transition-all duration-[0.3s] ease-in-out mr-[16px] max-[991px]:mr-[20px]">
                                <i class="ri-heart-line text-[20px]"></i>
                            </a>
                            <a href="javascript:void(0)" class="cr-right-bar-item Shopping-toggle transition-all duration-[0.3s] ease-in-out mr-[16px] max-[991px]:m-[0]">
                                <i class="ri-shopping-cart-line text-[20px]"></i>
                            </a>
                        </div>
                        <div class="min-[992px]:flex min-[992px]:basis-auto grow-[1] items-center hidden" id="navbarSupportedContent">
                            <ul class="navbar-nav flex min-[992px]:flex-row items-center m-auto relative z-[3] min-[992px]:flex-row max-[1199px]:mr-[-5px] max-[991px]:m-[0]">
                                <li class="nav-item dropdown relative mr-[25px] max-[1399px]:mr-[20px] max-[1199px]:mr-[30px]">
                                    <a href="https://getosusu.com" class="nav-link  font-Poppins text-[14px] font-medium block text-[#000] z-[1] flex items-center relative py-[11px] px-[8px] max-[1199px]:py-[8px] max-[1199px]:px-[0]" href="javascript:void(0)">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item dropdown relative mr-[25px] max-[1399px]:mr-[20px] max-[1199px]:mr-[30px]">
                                    <a href="#" class="nav-link font-Poppins text-[14px] font-medium block text-[#000] z-[1] flex items-center relative py-[11px] px-[8px] max-[1199px]:py-[8px] max-[1199px]:px-[0]" href="javascript:void(0)">
                                        Category
                                    </a>
                                </li>
                                <li class="nav-item dropdown relative mr-[25px] max-[1399px]:mr-[20px] max-[1199px]:mr-[30px]">
                                    <a href="#" class="nav-link font-Poppins text-[14px] font-medium block text-[#000] z-[1] flex items-center relative py-[11px] px-[8px] max-[1199px]:py-[8px] max-[1199px]:px-[0]" href="javascript:void(0)">
                                        Products
                                    </a>
                                </li>
                                <li class="nav-item dropdown relative mr-[25px] max-[1399px]:mr-[20px] max-[1199px]:mr-[30px]">
                                    <a class="nav-link dropdown-toggle font-Poppins text-[14px] font-medium block text-[#000] z-[1] flex items-center relative py-[11px] px-[8px] max-[1199px]:py-[8px] max-[1199px]:px-[0]" href="javascript:void(0)">
                                        About Us
                                    </a>
                                    <ul class="dropdown-menu transition-all duration-[0.3s] ease-in-out py-[8px] min-w-[160px] mt-[35px] absolute text-left opacity-0 invisible left-auto bg-[#fff] rounded-[5px] block z-[9] border-[1px] border-solid border-[#e9e9e9]">
                                        <li class="w-full mr-[0]">
                                            <a class="dropdown-item transition-all duration-[0.3s] ease-in-out font-Poppins py-[7px] px-[20px] bg-[#fff] relative capitalize text-[13px] text-[#777] hover:text-[#8637b9] whitespace-nowrap tracking-[0.03rem] block w-full" href="#">About Osusu</a>
                                        </li>
                                        <li class="w-full mr-[0]">
                                            <a class="dropdown-item transition-all duration-[0.3s] ease-in-out font-Poppins py-[7px] px-[20px] bg-[#fff] relative capitalize text-[13px] text-[#777] hover:text-[#8637b9] whitespace-nowrap tracking-[0.03rem] block w-full" href="#">Contact Us</a>
                                        </li>
                                        <li class="w-full mr-[0]">
                                            <a class="dropdown-item transition-all duration-[0.3s] ease-in-out font-Poppins py-[7px] px-[20px] bg-[#fff] relative capitalize text-[13px] text-[#777] hover:text-[#8637b9] whitespace-nowrap tracking-[0.03rem] block w-full" href="{{ route('cart') }}">Cart</a>
                                        </li>
                                        <li class="w-full mr-[0]">
                                            <a class="dropdown-item transition-all duration-[0.3s] ease-in-out font-Poppins py-[7px] px-[20px] bg-[#fff] relative capitalize text-[13px] text-[#777] hover:text-[#8637b9] whitespace-nowrap tracking-[0.03rem] block w-full" href="#">Checkout</a>
                                        </li>
                                        <li class="w-full mr-[0]">
                                            <a class="dropdown-item transition-all duration-[0.3s] ease-in-out font-Poppins py-[7px] px-[20px] bg-[#fff] relative capitalize text-[13px] text-[#777] hover:text-[#8637b9] whitespace-nowrap tracking-[0.03rem] block w-full" href="#">Track Order</a>
                                        </li>
                                        <li class="w-full mr-[0]">
                                            <a class="dropdown-item transition-all duration-[0.3s] ease-in-out font-Poppins py-[7px] px-[20px] bg-[#fff] relative capitalize text-[13px] text-[#777] hover:text-[#8637b9] whitespace-nowrap tracking-[0.03rem] block w-full" href="#">Wishlist</a>
                                        </li>
                                        <li class="w-full mr-[0]">
                                            <a class="dropdown-item transition-all duration-[0.3s] ease-in-out font-Poppins py-[7px] px-[20px] bg-[#fff] relative capitalize text-[13px] text-[#777] hover:text-[#8637b9] whitespace-nowrap tracking-[0.03rem] block w-full" href="#">Faq</a>
                                        </li>
                                       
                                        <li class="w-full mr-[0]">
                                            <a class="dropdown-item transition-all duration-[0.3s] ease-in-out font-Poppins py-[7px] px-[20px] bg-[#fff] relative capitalize text-[13px] text-[#777] hover:text-[#8637b9] whitespace-nowrap tracking-[0.03rem] block w-full" href="#">Policy</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown relative mr-[25px] max-[1399px]:mr-[20px] max-[1199px]:mr-[30px]">
                                    <a href="#" class="nav-link font-Poppins text-[14px] font-medium block text-[#000] z-[1] flex items-center relative py-[11px] px-[8px] max-[1199px]:py-[8px] max-[1199px]:px-[0]" href="javascript:void(0)">
                                        Blog
                                    </a>
                                </li>
                                <li class="nav-item dropdown relative">
                                    <a class="nav-link dropdown-toggle font-Poppins text-[14px] font-medium block text-[#000] z-[1] flex items-center relative py-[11px] px-[8px] max-[1199px]:py-[8px] max-[1199px]:px-[0]" href="javascript:void(0)">
                                        Promotions
                                    </a>
                                    <ul class="dropdown-menu transition-all duration-[0.3s] ease-in-out py-[8px] min-w-[160px] mt-[35px] absolute text-left opacity-0 invisible left-auto bg-[#fff] rounded-[5px] block z-[9] border-[1px] border-solid border-[#e9e9e9]">
                                        <li class="w-full mr-[0]">
                                            <a class="dropdown-item transition-all duration-[0.3s] ease-in-out font-Poppins py-[7px] px-[20px] bg-[#fff] relative capitalize text-[13px] text-[#777] hover:text-[#8637b9] whitespace-nowrap tracking-[0.03rem] block w-full" href="elements-products.html">Jolli Beta</a>
                                        </li>
                                        <li class="w-full mr-[0]">
                                            <a class="dropdown-item transition-all duration-[0.3s] ease-in-out font-Poppins py-[7px] px-[20px] bg-[#fff] relative capitalize text-[13px] text-[#777] hover:text-[#8637b9] whitespace-nowrap tracking-[0.03rem] block w-full" href="elements-typography.html">Smart Beta</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="cr-calling flex justify-end items-center max-[1199px]:hidden">
                        <i class="ri-phone-line pr-[5px] text-[20px]"></i>
                        <a href="javascript:void(0)" class="text-[15px] font-medium">+2348182528266</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile menu -->
    <div class="cr-sidebar-overlay w-full h-screen hidden fixed top-[0] left-[0] bg-[#000000b3] z-[21]"></div>
    <div id="cr_mobile_menu" class="cr-side-cart cr-mobile-menu transition-all duration-[0.5s] ease h-full p-[15px] fixed top-[0] bg-[#fff] z-[22] overflow-auto w-[400px] left-[-400px] max-[575px]:w-[300px] max-[575px]:left-[-300px] max-[420px]:w-[250px] max-[420px]:left-[-250px]">
        <div class="cr-menu-title w-full mb-[10px] pb-[10px] flex flex-wrap justify-between border-b-[2px] border-solid border-[#e9e9e9]">
            <span class="menu-title text-[18px] font-semibold text-[#64b496]"><img src="{{ asset('images/getosusu_logo.png') }}" alt="logo" class="logo block h-[35px] w-[115px] max-[575px]:w-[100px]"></span>
            <button type="button" class="cr-close relative border-[0] text-[30px] leading-[1] text-[#999] bg-[#fff]">×</button>
        </div>
        <div class="cr-menu-inner">
            <div class="cr-menu-content">
                <ul>
                    <li class="dropdown drop-list relative leading-[28px]">
                        <span class="menu-toggle h-[48px] absolute top-[0] right-[0] z-[-1] flex justify-center items-center cursor-pointer bg-transparent"></span>
                        <a href="https://getosusu.com" class=" py-[12px] block capitalize text-[15px] font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Home</a>
                        
                    </li>
                    <li class="dropdown drop-list relative leading-[28px]">
                        <span class="h-[48px] absolute top-[0] right-[0] z-[-1] flex justify-center items-center cursor-pointer bg-transparent"></span>
                        <a href="#" class="py-[12px] block capitalize text-[15px] font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Category</a>
                       
                    </li>
                    <li class="dropdown drop-list relative leading-[28px]">
                        <span class=" h-[48px] absolute top-[0] right-[0] z-[-1] flex justify-center items-center cursor-pointer bg-transparent"></span>
                        <a href="javascript:void(0)" class="dropdown-list py-[12px] block capitalize text-[15px] font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Product</a>
                        
                    </li>
                    <li class="dropdown drop-list relative leading-[28px]">
                        <span class="menu-toggle h-[48px] absolute top-[0] right-[0] z-[-1] flex justify-center items-center cursor-pointer bg-transparent"></span>
                        <a href="javascript:void(0)" class="dropdown-list py-[12px] block capitalize text-[15px] font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">About Us</a>
                        <ul class="sub-menu w-full mb-[0] p-[0] hidden min-w-auto opacity-[1]">
                            <li class="relative leading-[28px]">
                                <a href="" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">About Osusu</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Contact Us</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="{{ route('cart') }}" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Cart</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Checkout</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Track Order</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Wishlist</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Faq</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Policy</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown drop-list relative leading-[28px]">
                        <span class=" h-[48px] absolute top-[0] right-[0] z-[-1] flex justify-center items-center cursor-pointer bg-transparent"></span>
                        <a href="" class=" py-[12px] block capitalize text-[15px] font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Blog</a>
                      
                    </li>
                    <li class="dropdown drop-list relative leading-[28px]">
                        <span class="h-[48px] absolute top-[0] right-[0] z-[-1] flex justify-center items-center cursor-pointer bg-transparent"></span>
                        <a href="" class="py-[12px] block capitalize text-[15px] font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Promotion</a>
                      
                    </li>
                </ul>
            </div>
        </div>
    </div>
