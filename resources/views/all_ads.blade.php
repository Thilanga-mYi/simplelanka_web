@extends('layouts.body')

@section('content')
    @include('layouts.navbar')

    <section class="inner-section ad-list-part" style="background-color: #eeeeee">
        <div class="container bg-white pt-5">
            <div class="row content-reverse">

                <div class="col-lg-4 col-xl-3">
                    <div class="row">
                        <div class="col-md-6 col-lg-12">
                            <div class="product-widget">
                                <h6 class="product-widget-title">Filter by Price</h6>
                                <form class="product-widget-form">
                                    <div class="product-widget-group"><input type="text" placeholder="min - 00"><input
                                            type="text" placeholder="max - 1B"></div><button type="submit"
                                        class="product-widget-btn"><i
                                            class="fas fa-search"></i><span>search</span></button>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-12">
                            <div class="product-widget">
                                <h6 class="product-widget-title">Filter by type</h6>
                                <form class="product-widget-form">
                                    <ul class="product-widget-list">
                                        <li class="product-widget-item">
                                            <div class="product-widget-checkbox"><input type="checkbox" id="chcek1">
                                            </div><label class="product-widget-label" for="chcek1"><span
                                                    class="product-widget-type sale">Products</span><span
                                                    class="product-widget-number">(5,250)</span></label>
                                        </li>
                                        <li class="product-widget-item">
                                            <div class="product-widget-checkbox"><input type="checkbox" id="chcek2">
                                            </div><label class="product-widget-label" for="chcek2"><span
                                                    class="product-widget-type rent">Services</span><span
                                                    class="product-widget-number">(4,525)</span></label>
                                        </li>
                                        <li class="product-widget-item">
                                            <div class="product-widget-checkbox"><input type="checkbox" id="chcek3">
                                            </div><label class="product-widget-label" for="chcek3"><span
                                                    class="product-widget-type booking">Shops</span><span
                                                    class="product-widget-number">(3,512)</span></label>
                                        </li>
                                    </ul><button type="submit" class="product-widget-btn"><i
                                            class="fas fa-broom"></i><span>Clear Filter</span></button>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-12">
                            <div class="product-widget">
                                <h6 class="product-widget-title">Filter by rating</h6>
                                <form class="product-widget-form">
                                    <ul class="product-widget-list">
                                        <li class="product-widget-item">
                                            <div class="product-widget-checkbox"><input type="checkbox" id="chcek4">
                                            </div><label class="product-widget-label" for="chcek4"><span
                                                    class="product-widget-star"><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i
                                                        class="fas fa-star"></i></span><span
                                                    class="product-widget-number">(450)</span></label>
                                        </li>
                                        <li class="product-widget-item">
                                            <div class="product-widget-checkbox"><input type="checkbox" id="chcek5">
                                            </div><label class="product-widget-label" for="chcek5"><span
                                                    class="product-widget-star"><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i
                                                        class="far fa-star"></i></span><span
                                                    class="product-widget-number">(550)</span></label>
                                        </li>
                                        <li class="product-widget-item">
                                            <div class="product-widget-checkbox"><input type="checkbox" id="chcek6">
                                            </div><label class="product-widget-label" for="chcek6"><span
                                                    class="product-widget-star"><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="far fa-star"></i><i
                                                        class="far fa-star"></i></span><span
                                                    class="product-widget-number">(650)</span></label>
                                        </li>
                                        <li class="product-widget-item">
                                            <div class="product-widget-checkbox"><input type="checkbox" id="chcek7">
                                            </div><label class="product-widget-label" for="chcek7"><span
                                                    class="product-widget-star"><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="far fa-star"></i><i
                                                        class="far fa-star"></i><i
                                                        class="far fa-star"></i></span><span
                                                    class="product-widget-number">(750)</span></label>
                                        </li>
                                        <li class="product-widget-item">
                                            <div class="product-widget-checkbox"><input type="checkbox" id="chcek8">
                                            </div><label class="product-widget-label" for="chcek8"><span
                                                    class="product-widget-star"><i class="fas fa-star"></i><i
                                                        class="far fa-star"></i><i class="far fa-star"></i><i
                                                        class="far fa-star"></i><i
                                                        class="far fa-star"></i></span><span
                                                    class="product-widget-number">(85)</span></label>
                                        </li>
                                    </ul><button type="submit" class="product-widget-btn"><i
                                            class="fas fa-broom"></i><span>Clear Filter</span></button>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-12">
                            <div class="product-widget">
                                <h6 class="product-widget-title">Filter by Distric</h6>
                                <form class="product-widget-form">
                                    <div class="product-widget-search"><input type="text" placeholder="Search"></div>
                                    <ul class="product-widget-list product-widget-scroll">
                                        <li class="product-widget-item">
                                            <div class="product-widget-checkbox"><input type="checkbox" id="chcek9">
                                            </div><label class="product-widget-label" for="chcek9"><span
                                                    class="product-widget-text">Colombo</span><span
                                                    class="product-widget-number">(95)</span></label>
                                        </li>
                                        <li class="product-widget-item">
                                            <div class="product-widget-checkbox"><input type="checkbox" id="chcek10">
                                            </div><label class="product-widget-label" for="chcek10"><span
                                                    class="product-widget-text">Gampaha</span><span
                                                    class="product-widget-number">(82)</span></label>
                                        </li>
                                        <li class="product-widget-item">
                                            <div class="product-widget-checkbox"><input type="checkbox" id="chcek11">
                                            </div><label class="product-widget-label" for="chcek11"><span
                                                    class="product-widget-text">Kalutara</span><span
                                                    class="product-widget-number">(19)</span></label>
                                        </li>
                                        <li class="product-widget-item">
                                            <div class="product-widget-checkbox"><input type="checkbox" id="chcek12">
                                            </div><label class="product-widget-label" for="chcek12"><span
                                                    class="product-widget-text">Kandy</span><span
                                                    class="product-widget-number">(46)</span></label>
                                        </li>
                                        <li class="product-widget-item">
                                            <div class="product-widget-checkbox"><input type="checkbox" id="chcek13">
                                            </div><label class="product-widget-label" for="chcek13"><span
                                                    class="product-widget-text">Matale</span><span
                                                    class="product-widget-number">(24)</span></label>
                                        </li>
                                        <li class="product-widget-item">
                                            <div class="product-widget-checkbox"><input type="checkbox" id="chcek14">
                                            </div><label class="product-widget-label" for="chcek14"><span
                                                    class="product-widget-text">Nuwara Eliya</span><span
                                                    class="product-widget-number">(34)</span></label>
                                        </li>
                                        <li class="product-widget-item">
                                            <div class="product-widget-checkbox"><input type="checkbox" id="chcek15">
                                            </div><label class="product-widget-label" for="chcek15"><span
                                                    class="product-widget-text">Galle</span><span
                                                    class="product-widget-number">(82)</span></label>
                                        </li>
                                        <li class="product-widget-item">
                                            <div class="product-widget-checkbox"><input type="checkbox" id="chcek16">
                                            </div><label class="product-widget-label" for="chcek16"><span
                                                    class="product-widget-text">Matara</span><span
                                                    class="product-widget-number">(45)</span></label>
                                        </li>
                                        <li class="product-widget-item">
                                            <div class="product-widget-checkbox"><input type="checkbox" id="chcek17">
                                            </div><label class="product-widget-label" for="chcek17"><span
                                                    class="product-widget-text">Hambantota</span><span
                                                    class="product-widget-number">(19)</span></label>
                                        </li>
                                    </ul><button type="submit" class="product-widget-btn"><i
                                            class="fas fa-broom"></i><span>Clear Filter</span></button>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-12">
                            <div class="product-widget">
                                <h6 class="product-widget-title">filter by category</h6>
                                <form class="product-widget-form">
                                    <div class="product-widget-search"><input type="text" placeholder="search"></div>
                                    <ul class="product-widget-list product-widget-scroll">
                                        <li class="product-widget-dropitem"><button type="button"
                                                class="product-widget-link"><i class="fas fa-tags"></i>electronics
                                                (234)
                                            </button>
                                            <ul class="product-widget-dropdown">
                                                <li><a href="#">mixer (56)</a></li>
                                                <li><a href="#">freez (78)</a></li>
                                                <li><a href="#">LED tv (78)</a></li>
                                            </ul>
                                        </li>
                                        <li class="product-widget-dropitem"><button type="button"
                                                class="product-widget-link"><i class="fas fa-tags"></i>automobiles
                                                (767)
                                            </button>
                                            <ul class="product-widget-dropdown">
                                                <li><a href="#">private car (56)</a></li>
                                                <li><a href="#">motorbike (78)</a></li>
                                                <li><a href="#">truck (78)</a></li>
                                            </ul>
                                        </li>
                                        <li class="product-widget-dropitem"><button type="button"
                                                class="product-widget-link"><i class="fas fa-tags"></i>properties (456)
                                            </button>
                                            <ul class="product-widget-dropdown">
                                                <li><a href="#">free land (56)</a></li>
                                                <li><a href="#">apartment (78)</a></li>
                                                <li><a href="#">shop (78)</a></li>
                                            </ul>
                                        </li>
                                        <li class="product-widget-dropitem"><button type="button"
                                                class="product-widget-link"><i class="fas fa-tags"></i>fashion (356)
                                            </button>
                                            <ul class="product-widget-dropdown">
                                                <li><a href="#">jeans (56)</a></li>
                                                <li><a href="#">t-shirt (78)</a></li>
                                                <li><a href="#">jacket (78)</a></li>
                                            </ul>
                                        </li>
                                        <li class="product-widget-dropitem"><button type="button"
                                                class="product-widget-link"><i class="fas fa-tags"></i>gadgets (768)
                                            </button>
                                            <ul class="product-widget-dropdown">
                                                <li><a href="#">computer (56)</a></li>
                                                <li><a href="#">mobile (78)</a></li>
                                                <li><a href="#">drone (78)</a></li>
                                            </ul>
                                        </li>
                                        <li class="product-widget-dropitem"><button type="button"
                                                class="product-widget-link"><i class="fas fa-tags"></i>furnitures (977)
                                            </button>
                                            <ul class="product-widget-dropdown">
                                                <li><a href="#">chair (56)</a></li>
                                                <li><a href="#">sofa (78)</a></li>
                                                <li><a href="#">table (78)</a></li>
                                            </ul>
                                        </li>
                                        <li class="product-widget-dropitem"><button type="button"
                                                class="product-widget-link"><i class="fas fa-tags"></i>hospitality
                                                (124)
                                            </button>
                                            <ul class="product-widget-dropdown">
                                                <li><a href="#">jeans (56)</a></li>
                                                <li><a href="#">t-shirt (78)</a></li>
                                                <li><a href="#">jacket (78)</a></li>
                                            </ul>
                                        </li>
                                        <li class="product-widget-dropitem"><button type="button"
                                                class="product-widget-link"><i class="fas fa-tags"></i>agriculture
                                                (565)
                                            </button>
                                            <ul class="product-widget-dropdown">
                                                <li><a href="#">jeans (56)</a></li>
                                                <li><a href="#">t-shirt (78)</a></li>
                                                <li><a href="#">jacket (78)</a></li>
                                            </ul>
                                        </li>
                                    </ul><button type="submit" class="product-widget-btn"><i
                                            class="fas fa-broom"></i><span>Clear Filter</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-xl-9">

                    <div class="row">
                        <div class="col-lg-12">

                            <div class="ad-feature-slider slider-arrow">

                                <div class="featured_div  feature-card ">
                                    <a href="#" class="feature-img">
                                        <img class="featured_img_banner"
                                            src="https://icdn.digitaltrends.com/image/digitaltrends/iphone-13-pro-review-dan-baker-35.jpg"
                                            alt="feature">
                                    </a>
                                    <div class="cross-inline-badge feature-badge">
                                        <span>featured</span>
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                    <button type="button" class="feature-wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <div class="feature-content">
                                        <ol class="breadcrumb feature-category">
                                            <li><span class="flat-badge sale">Products</span></li>
                                            <li class="breadcrumb-item">
                                                <a href="/">Electronic Devices</a>
                                            </li>
                                        </ol>
                                        <h3 class="feature-title">
                                            <a href="/ad/asus-gforce-gt-1030-2GB-graphic-card">
                                                Apple iPhone 13 Pro 256GB
                                            </a>
                                        </h3>
                                        <div class="feature-meta">
                                            <span class="feature-price">LKR. 422,500.00</span>
                                            <span class="feature-time">
                                                <i class="fas fa-clock"></i>56 minute ago
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="featured_div feature-card">
                                    <a href="#" class="feature-img">
                                        <img class="featured_img_banner"
                                            src="https://i.ikman-st.com/brand-new-luxury-two-story-house-for-sale-in-athurugiriya-for-sale-colombo/b2ffaa8a-9e9d-43f3-87ef-96cfe997fd2c/620/466/fitted.jpg"
                                            alt="feature">
                                    </a>
                                    <div class="cross-inline-badge feature-badge">
                                        <span>featured</span>
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                    <button type="button" class="feature-wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <div class="feature-content">
                                        <ol class="breadcrumb feature-category">
                                            <li><span class="flat-badge rent">Services</span></li>
                                            <li class="breadcrumb-item">
                                                <a href="/">Renting Houses and Boarding Places</a>
                                            </li>
                                        </ol>
                                        <h3 class="feature-title">
                                            <a href="/">Brand New Luxury House For Rent Kandy, Peradeniya</a>
                                        </h3>
                                        <div class="feature-meta">
                                            <span class="feature-price">LKR. 47,500.00
                                                <small>/Monthly</small>
                                            </span>
                                            <span class="feature-time">
                                                <i class="fas fa-clock"></i>56 minute ago
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="featured_div  feature-card ">
                                    <a href="#" class="feature-img">
                                        <img class="featured_img_banner"
                                            src="https://i.ikman-st.com/brand-new-luxury-two-story-house-for-sale-in-athurugiriya-for-sale-colombo/dd2246d7-f6d7-422c-86d0-4fa83a4bfe3c/620/466/fitted.jpg"
                                            alt="feature">
                                    </a>
                                    <div class="cross-inline-badge feature-badge">
                                        <span>featured</span>
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                    <button type="button" class="feature-wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <div class="feature-content">
                                        <ol class="breadcrumb feature-category">
                                            <li><span class="flat-badge rent">Services</span></li>
                                            <li class="breadcrumb-item">
                                                <a href="/">Renting Houses and Boarding Places</a>
                                            </li>
                                        </ol>
                                        <h3 class="feature-title">
                                            <a href="/">
                                                Brand New Luxury Two Story House For Rent In Athurugiriya
                                            </a>
                                        </h3>
                                        <div class="feature-meta">
                                            <span class="feature-price">LKR. 12,500.00
                                                <small>/perday</small>
                                            </span>
                                            <span class="feature-time">
                                                <i class="fas fa-clock"></i>56 minute ago
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="row">


                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <a href="/ad/asus-gforce-gt-1030-2GB-graphic-card">
                                <div class="product-card standard m-0">
                                    <div class="product-media">
                                        <div class="image_sized_div">
                                            <img class="sized_image" src="https://i.ikman-st.com/vibration-exercise-machine-japan-for-sale-gampaha/33922205-fc01-454b-8ba5-b46555738dc3/620/466/fitted.jpg"
                                                alt="product">
                                        </div>
                                        <div class="cross-vertical-badge product-badge">
                                            <i class="fas fa-clipboard-check"></i>
                                            <span>recommend</span>
                                        </div>
                                        <div class="product-type">
                                            <span class="flat-badge booking">Products</span>
                                        </div>
                                        <ul class="product-action">
                                            <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                            <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                            <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <ol class="breadcrumb product-category">
                                            <li><i class="fas fa-tags"></i></li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Health, Beauty & Hair</a>
                                            </li>
                                        </ol>
                                        <h5 class="product-title">
                                            <a href="/ad/asus-gforce-gt-1030-2GB-graphic-card">
                                                Vibration Exercise Machine - Japan
                                            </a>
                                        </h5>
                                        <div class="product-meta">
                                            <span>
                                                <i class="fas fa-map-marker-alt"></i>Kiribathgoda, Gampaha
                                            </span>
                                            <span>
                                                <i class="fas fa-clock"></i>30 min ago
                                            </span>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-price">LKR. 25,000</h5>
                                            <div class="product-btn">
                                                <a href="#" title="Compare" class="fas fa-compress"></a>
                                                <button type="button" title="Wishlist" class="far fa-heart"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <a href="/ad/asus-gforce-gt-1030-2GB-graphic-card">
                                <div class="product-card standard m-0">
                                    <div class="product-media">
                                        <div class="image_sized_div">
                                            <img class="sized_image" src="https://i.ikman-st.com/honda-grace-ex-2016-for-sale-colombo-802/15aeba1d-1482-4568-a0ac-45dcdf77862a/620/466/fitted.jpg"
                                                alt="product">
                                        </div>
                                        <div class="cross-vertical-badge product-badge">
                                            <i class="fas fa-clipboard-check"></i>
                                            <span>recommend</span>
                                        </div>
                                        <div class="product-type">
                                            <span class="flat-badge booking">Products</span>
                                        </div>
                                        <ul class="product-action">
                                            <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                            <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                            <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <ol class="breadcrumb product-category">
                                            <li><i class="fas fa-tags"></i></li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Automobile & Motorcycles</a>
                                            </li>
                                        </ol>
                                        <h5 class="product-title">
                                            <a href="/ad/asus-gforce-gt-1030-2GB-graphic-card">
                                                Honda Grace EX 2016
                                            </a>
                                        </h5>
                                        <div class="product-meta">
                                            <span>
                                                <i class="fas fa-map-marker-alt"></i>Kiribathgoda, Gampaha
                                            </span>
                                            <span>
                                                <i class="fas fa-clock"></i>30 min ago
                                            </span>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-price">LKR. 9,490,000</h5>
                                            <div class="product-btn">
                                                <a href="#" title="Compare" class="fas fa-compress"></a>
                                                <button type="button" title="Wishlist" class="far fa-heart"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <a href="/ad/asus-gforce-gt-1030-2GB-graphic-card">
                                <div class="product-card standard m-0">
                                    <div class="product-media">
                                        <div class="image_sized_div">
                                            <img class="sized_image" src="https://i.ikman-st.com/toyota-kdh-high-roof-221japan-2009-for-sale-anuradhapura-1/8351b080-e52a-4887-be58-32b07bbefcd3/620/466/fitted.jpg"
                                                alt="product">
                                        </div>
                                        <div class="cross-vertical-badge product-badge">
                                            <i class="fas fa-clipboard-check"></i>
                                            <span>recommend</span>
                                        </div>
                                        <div class="product-type">
                                            <span class="flat-badge booking">Products</span>
                                        </div>
                                        <ul class="product-action">
                                            <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                            <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                            <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <ol class="breadcrumb product-category">
                                            <li><i class="fas fa-tags"></i></li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Automobile & Motorcycles</a>
                                            </li>
                                        </ol>
                                        <h5 class="product-title">
                                            <a href="/ad/asus-gforce-gt-1030-2GB-graphic-card">
                                                Toyota KDH HIGH ROOF 221JAPAN 2009
                                            </a>
                                        </h5>
                                        <div class="product-meta">
                                            <span>
                                                <i class="fas fa-map-marker-alt"></i>Kiribathgoda, Gampaha
                                            </span>
                                            <span>
                                                <i class="fas fa-clock"></i>30 min ago
                                            </span>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-price">LKR. 12,650,000</h5>
                                            <div class="product-btn">
                                                <a href="#" title="Compare" class="fas fa-compress"></a>
                                                <button type="button" title="Wishlist" class="far fa-heart"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <a href="/ad/asus-gforce-gt-1030-2GB-graphic-card">
                                <div class="product-card standard m-0">
                                    <div class="product-media">
                                        <div class="image_sized_div">
                                            <img class="sized_image" src="https://i.ikman-st.com/vibration-exercise-machine-japan-for-sale-gampaha/33922205-fc01-454b-8ba5-b46555738dc3/620/466/fitted.jpg"
                                                alt="product">
                                        </div>
                                        <div class="cross-vertical-badge product-badge">
                                            <i class="fas fa-clipboard-check"></i>
                                            <span>recommend</span>
                                        </div>
                                        <div class="product-type">
                                            <span class="flat-badge booking">Products</span>
                                        </div>
                                        <ul class="product-action">
                                            <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                            <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                            <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <ol class="breadcrumb product-category">
                                            <li><i class="fas fa-tags"></i></li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Health, Beauty & Hair</a>
                                            </li>
                                        </ol>
                                        <h5 class="product-title">
                                            <a href="/ad/asus-gforce-gt-1030-2GB-graphic-card">
                                                Vibration Exercise Machine - Japan
                                            </a>
                                        </h5>
                                        <div class="product-meta">
                                            <span>
                                                <i class="fas fa-map-marker-alt"></i>Kiribathgoda, Gampaha
                                            </span>
                                            <span>
                                                <i class="fas fa-clock"></i>30 min ago
                                            </span>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-price">LKR. 25,000</h5>
                                            <div class="product-btn">
                                                <a href="#" title="Compare" class="fas fa-compress"></a>
                                                <button type="button" title="Wishlist" class="far fa-heart"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <a href="/ad/asus-gforce-gt-1030-2GB-graphic-card">
                                <div class="product-card standard m-0">
                                    <div class="product-media">
                                        <div class="image_sized_div">
                                            <img class="sized_image" src="https://i.ikman-st.com/honda-grace-ex-2016-for-sale-colombo-802/15aeba1d-1482-4568-a0ac-45dcdf77862a/620/466/fitted.jpg"
                                                alt="product">
                                        </div>
                                        <div class="cross-vertical-badge product-badge">
                                            <i class="fas fa-clipboard-check"></i>
                                            <span>recommend</span>
                                        </div>
                                        <div class="product-type">
                                            <span class="flat-badge booking">Products</span>
                                        </div>
                                        <ul class="product-action">
                                            <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                            <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                            <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <ol class="breadcrumb product-category">
                                            <li><i class="fas fa-tags"></i></li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Automobile & Motorcycles</a>
                                            </li>
                                        </ol>
                                        <h5 class="product-title">
                                            <a href="/ad/asus-gforce-gt-1030-2GB-graphic-card">
                                                Honda Grace EX 2016
                                            </a>
                                        </h5>
                                        <div class="product-meta">
                                            <span>
                                                <i class="fas fa-map-marker-alt"></i>Kiribathgoda, Gampaha
                                            </span>
                                            <span>
                                                <i class="fas fa-clock"></i>30 min ago
                                            </span>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-price">LKR. 9,490,000</h5>
                                            <div class="product-btn">
                                                <a href="#" title="Compare" class="fas fa-compress"></a>
                                                <button type="button" title="Wishlist" class="far fa-heart"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <a href="/ad/asus-gforce-gt-1030-2GB-graphic-card">
                                <div class="product-card standard m-0">
                                    <div class="product-media">
                                        <div class="image_sized_div">
                                            <img class="sized_image" src="https://i.ikman-st.com/toyota-kdh-high-roof-221japan-2009-for-sale-anuradhapura-1/8351b080-e52a-4887-be58-32b07bbefcd3/620/466/fitted.jpg"
                                                alt="product">
                                        </div>
                                        <div class="cross-vertical-badge product-badge">
                                            <i class="fas fa-clipboard-check"></i>
                                            <span>recommend</span>
                                        </div>
                                        <div class="product-type">
                                            <span class="flat-badge booking">Products</span>
                                        </div>
                                        <ul class="product-action">
                                            <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                            <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                            <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <ol class="breadcrumb product-category">
                                            <li><i class="fas fa-tags"></i></li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Automobile & Motorcycles</a>
                                            </li>
                                        </ol>
                                        <h5 class="product-title">
                                            <a href="/ad/asus-gforce-gt-1030-2GB-graphic-card">
                                                Toyota KDH HIGH ROOF 221JAPAN 2009
                                            </a>
                                        </h5>
                                        <div class="product-meta">
                                            <span>
                                                <i class="fas fa-map-marker-alt"></i>Kiribathgoda, Gampaha
                                            </span>
                                            <span>
                                                <i class="fas fa-clock"></i>30 min ago
                                            </span>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-price">LKR. 12,650,000</h5>
                                            <div class="product-btn">
                                                <a href="#" title="Compare" class="fas fa-compress"></a>
                                                <button type="button" title="Wishlist" class="far fa-heart"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-pagection">
                                <p class="page-info">Showing 12 of 60 Results</p>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="fas fa-long-arrow-alt-left"></i></a></li>
                                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">...</li>
                                    <li class="page-item"><a class="page-link" href="#">67</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="fas fa-long-arrow-alt-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    @include('layouts.scripts')
@endsection
