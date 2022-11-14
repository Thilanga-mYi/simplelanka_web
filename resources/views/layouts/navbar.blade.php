    <style>
        .nav_gradient {
            background-image: linear-gradient(#3596c7, #3596c7, #358ac7, #357ce7);
        }

        .add_post_btn {
            background-image: linear-gradient(#ffca28, #ffb300, #ff8f00);
            border: 0px solid white
        }

        .topbar_font {
            font-size: 14px;
            font-weight: 400;
            color: #212121;
        }

        .featured_div {
            width: 60%;
            height: 400px;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px
        }

        .featured_img_banner {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product_view_div {
            width: 100%;
            height: 200px;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px
        }

        .product_view_img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .form-control {
            border: none;
            width: 100%;
            height: 50px;
            padding: 0px 20px;
            border-radius: 5px;
            color: var(--heading);
            background: var(--chalk);
            border-bottom: 2px solid var(--border);
            transition: all linear .3s;
            -webkit-transition: all linear .3s;
            -moz-transition: all linear .3s;
            -ms-transition: all linear .3s;
            -o-transition: all linear .3s;
        }
    </style>

    <header>
        <div class="container">
            <div class="d-flex justify-content-between">
                <a href="/" class="d-none d-md-block">
                    <span class=" topbar_font">TOP ADS</span>
                </a>
                
                <a href="/" class="d-none d-md-block">
                    <span class="topbar_font">TOP SERVICES</span>
                </a>

                <a href="/" class="d-none d-md-block">
                    <span class="topbar_font">TOP SHOPS</span>
                </a>

                <a href="/" class="d-none d-md-block">
                    <span class="topbar_font">TOP PRODUCTS</span>
                </a>

                <a href="/" class="d-none d-md-block">
                    <span class="topbar_font">DOWNLOAD MOBILE APP</span>
                </a>

                @guest
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}">
                            <span class="topbar_font">
                                <i class="bi bi-box-arrow-in-right mr-1"></i>
                                LOGIN
                            </span>
                        </a>
                    @endif

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">
                            <span class="topbar_font">
                                <i class="bi bi-person mr-1"></i>
                                REGISTER
                            </span>
                        </a>
                    @endif
                @else

                    <a href="/register-user/profile">
                        <span class="topbar_font">
                            <i class="bi bi-person mr-1"></i>
                            VIEW PROFILE
                        </span>
                    </a>

                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        <span class="topbar_font">
                            <i class="bi bi-box-arrow-in-right mr-1"></i>
                            LOGOUT
                        </span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" hidden>
                        @csrf
                    </form>
                @endguest

                <a href="/">
                    <span class="topbar_font">
                        <i class="bi bi-heart mr-1"></i>
                        WISHLIST
                    </span>
                </a>
            </div>
        </div>
    </header>

    <header class="header-part nav_gradient">
        <div class="container">
            <div class="header-content">

                <div class="header-left">
                    <button type="button" class="header-widget sidebar-btn">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <a href="/" class="header-logo">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>
                    <button type="button" class="header-widget search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </div>

                <form class="header-form">
                    <div class="header-search">
                        <button class="btn btn-sm nav_gradient text-white"
                            style="padding-top: 10px; padding-bottom: 10px ; border: 2px solid white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
                            </svg>
                        </button>

                        <button type="submit" title="Search Submit ">
                            <i class="fas fa-search"></i>
                        </button>
                        <input type="text" placeholder="Search, Whatever you needs...">
                        <button type="button" title="Search Option" class="option-btn">
                            <i class="fas fa-sliders-h"></i>
                        </button>
                    </div>

                    <div class="header-option">
                        <div class="option-grid">
                            <div class="option-group">
                                <input type="number" placeholder="Min">
                            </div>
                            <div class="option-group">
                                <input type="number" placeholder="Max">
                            </div>
                            <button type="submit">
                                <i class="fas fa-search"></i>
                                <span>Search</span>
                            </button>
                        </div>
                    </div>

                </form>

                @guest
                    <div class="header-right">
                        <a onclick="redirect_to_login()" class="btn btn-inline post-btn add_post_btn text-white">
                            <i class="fas fa-plus-circle"></i>
                            <span>post your ad</span>
                        </a>
                    </div>
                @else
                    <div class="header-right">
                        <a href="/register-user/ad-post" class="btn btn-inline post-btn add_post_btn">
                            <i class="fas fa-plus-circle"></i>
                            <span>post your ad</span>
                        </a>
                    </div>
                @endguest

            </div>
        </div>
    </header>

    <nav class="mobile-nav">
        <div class="container">
            <div class="mobile-group">
                <a href="#" class="mobile-widget"></a>
                <a href="/register-user/ad-post" class="mobile-widget plus-btn">
                    <i class="fas fa-plus"></i>
                    <span>Ad Post</span>
                </a>
                <a href="#" class="mobile-widget"></a>
            </div>
        </div>
    </nav>

    <aside class="sidebar-part">
        <div class="sidebar-body">
            <div class="sidebar-header">
                <a href="/" class="sidebar-logo">
                    <img src="{{ asset('assets/images/logo_color.png') }}" alt="logo">
                </a>
                <button class="sidebar-cross">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="sidebar-content">

                <div class="sidebar-menu">
                    <ul class="nav nav-tabs">
                        <li><a href="#products" class="nav-link active" data-toggle="tab">Products</a></li>
                        <li><a href="#serivices" class="nav-link" data-toggle="tab">Services</a></li>
                    </ul>

                    <div class="tab-pane active" id="products">
                        <ul class="navbar-list">
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">

                                    <img src="{{ asset('assets/images/icons/Artboard 1.png') }}" alt=""
                                        style="width:25px ; height: 25px">

                                    Women's Fashion

                                </a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Men's Fashion</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Electronic Devices</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Electronic Accessories</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">TV & Home Appliances</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Jewelry & Watches</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Health, Beauty & Hair</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Babies & Toys</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Groceries </a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Pets</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Sports & Outdoor</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Home & Indoor</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Automobiles & Motorcycles</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Home Improvement & Tools</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-pane" id="serivices">
                        <ul class="navbar-list">

                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Event organizing services </a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Apparels & clothing</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Arts, painting & handcrafts </a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Pipe services</a>
                            </li>

                            <li class="navbar-item navbar-dropdown">
                                <a class="navbar-link" href="#">
                                    <span>
                                        Vehicle repairing & services
                                    </span>
                                    <i class="fas fa-plus">
                                    </i>
                                </a>
                                <ul class="dropdown-list">
                                    <li>
                                        <a class="dropdown-link" href="/">Service Centers</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-link" href="">Garage</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-link" href="">Winkle Service </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-link" href="">Car Washes</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-link" href="">Tire Centers</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Cab Service</a>
                            </li>

                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Vehicles for rent</a>
                            </li>

                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Wiring service </a>
                            </li>

                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Computer & Laptop repairing </a>
                            </li>

                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Mobile phone repairing</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Electronic repairing</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Electronic & Electrical services</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Solar panel shop</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Bands, DJs, sounds, Lighting & Dancing
                                    service</a>
                            </li>

                            <li class="navbar-item navbar-dropdown">
                                <a class="navbar-link" href="#">
                                    <span>
                                        Event suppliers
                                    </span>
                                    <i class="fas fa-plus">
                                    </i>
                                </a>
                                <ul class="dropdown-list">
                                    <li>
                                        <a class="dropdown-link" href="/">Sounds</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-link" href="/">Lights</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-link" href="/">Others</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Wedding & event planners</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Photographers & videographers</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Electronic & Electrical services</a>
                            </li>

                        </ul>
                    </div>

                    {{-- <div class="tab-pane" id="shops">
                        <ul class="navbar-list">
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Gift houses</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Apparels & clothing shops</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Grocery shops </a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Super Markets </a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Vegetable shops</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Fruit shops </a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Book shops</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Printing shops</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Mobile shops</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Pets</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Communications </a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Hardwares </a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Computer shops</a>
                            </li>
                            <li class="navbar-item">
                                <a class="navbar-link" href="/">Electronic shops </a>
                            </li>
                        </ul>
                    </div> --}}

                </div>
            </div>
        </div>
    </aside>

    <script>
        function redirect_to_login() {

            Notiflix.Confirm.Show('Login Required', 'Please Confirm to Redirect to Login Page?', 'Yes', 'No',
                function() {
                    window.location.href = window.location.origin + "/login";
                },
                function() {});
        }

    </script>
