@extends('layouts.body')
@section('content')
    @include('layouts.navbar')

    <style>
        .card-footer {
            padding: 0.75rem 1.25rem;
            background-color: rgba(0, 0, 0, .03);
            border-top: 0px solid rgba(0, 0, 0, .125);
        }

        .category-header {
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            font-size: 12px
        }

        .category-slogan {
            font-size: 12px;
            line-height: 20px;
        }

        .category-card-shadow {
            box-shadow: 2px 2px 5px 2px #f0f0f0;
            border-width: 0px;
        }

        .footer-widget li {
            font-size: 14px;
            margin-bottom: 12px;
        }
    </style>

    <section class="banner-part">
        <div class="container">
            <div class="banner-content">
                <h1 style="text-shadow: 1px 5px rgb(255 255 255 / 20%);">You can #Buy, #Rent, #Booking anything from here.
                </h1>
                <p>Buy and sell everything from used cars to mobile phones and computers, or search for property, jobs
                    and more in the world.
                </p>
            </div>
        </div>
    </section>

    <section class="section recomend-part mb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <h4 class="mb-3 text-dark">
                            Explore by
                            <span>
                                Popular Category
                            </span>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/icon_1.png') }}" class="mb-3 w-50">
                            <h6 class="category-header">ELECTRONICS</h6>
                        </div>
                        <div class="card-footer bg-white pt-0 mb-3">
                            <p class="text-center category-slogan">
                                Explore New Electronics Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/icon_2.png') }}" class="mb-3 w-50">
                            <h6 class="category-header">HOME APPLIANCES</h6>
                        </div>
                        <div class="card-footer bg-white pt-0 mb-3">
                            <p class="text-center category-slogan">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/icon_3.png') }}" class="mb-3 w-50">
                            <h6 class="category-header">
                                FASHION & BEAUTY
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/icon_4.png') }}" class="mb-3 w-50">
                            <h6 class="category-header">
                                ESSENTIALS
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_1.png') }}" class="mb-3 w-50">
                            <h6 class="category-header">
                                TRANSPORTATION
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/icon_5.png') }}" class="mb-3 w-50">
                            <h6 class="category-header">
                                MARKETPLACE
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Available Products Deals & Offers

                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="mt-3">
        <div class="container">
            <div class="owl-carousel owl-theme">
                <div class="item" style="width:100%;">
                    <img src="{{ asset('assets/images/sample_images/banner_image_1.png') }}" class="mb-3">
                </div>
                <div class="item" style="width:100%;">
                    <img src="{{ asset('assets/images/sample_images/banner_image_1.png') }}" class="mb-3">
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5 recomend-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <h4 class="mb-3 text-dark">Explore by
                            <span>
                                Popular Products
                            </span>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row">
            </div>
            <div class="row">

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_1.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">ELECTRONICS</h6>
                        </div>
                        <div class="card-footer bg-white pt-0 mb-3">
                            <p class="text-center category-slogan">
                                Explore New Electronics Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_2.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">HOME APPLIANCES</h6>
                        </div>
                        <div class="card-footer bg-white pt-0 mb-3">
                            <p class="text-center category-slogan">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_3.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                FASHION & BEAUTY
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_4.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                ESSENTIALS
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_5.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                TRANSPORTATION
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_1.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                MARKETPLACE
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Available Products Deals & Offers

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_2.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">HOME APPLIANCES</h6>
                        </div>
                        <div class="card-footer bg-white pt-0 mb-3">
                            <p class="text-center category-slogan">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_3.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                FASHION & BEAUTY
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_4.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                ESSENTIALS
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_5.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                TRANSPORTATION
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_1.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                MARKETPLACE
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Available Products Deals & Offers

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card bg-primary category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/search_logo.png') }}" class="mb-3 w-75">
                            <h6 class="category-header text-white">
                                MORE
                            </h6>
                        </div>
                        <div class="card-footer bg-primary pt-0">
                            <p class="text-center category-slogan mb-3 text-white">
                                Explore More Available Product Categories
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="mt-5 recomend-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <h4 class="mb-3 text-dark">Explore by
                            <span>
                                Popular Services
                            </span>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row">
            </div>
            <div class="row">

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_1.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">ELECTRONICS</h6>
                        </div>
                        <div class="card-footer bg-white pt-0 mb-3">
                            <p class="text-center category-slogan">
                                Explore New Electronics Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_2.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">HOME APPLIANCES</h6>
                        </div>
                        <div class="card-footer bg-white pt-0 mb-3">
                            <p class="text-center category-slogan">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_3.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                FASHION & BEAUTY
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_4.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                ESSENTIALS
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_5.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                TRANSPORTATION
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_1.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                MARKETPLACE
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Available Products Deals & Offers

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_2.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">HOME APPLIANCES</h6>
                        </div>
                        <div class="card-footer bg-white pt-0 mb-3">
                            <p class="text-center category-slogan">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_3.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                FASHION & BEAUTY
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_4.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                ESSENTIALS
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_5.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                TRANSPORTATION
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_1.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                MARKETPLACE
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Available Products Deals & Offers

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card bg-primary category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/search_logo.png') }}" class="mb-3 w-75">
                            <h6 class="category-header text-white">
                                MORE
                            </h6>
                        </div>
                        <div class="card-footer bg-primary pt-0">
                            <p class="text-center category-slogan mb-3 text-white">
                                Explore More Available Services Categories
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="mt-5 recomend-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <h4 class="mb-3 text-dark">Explore by
                            <span>
                                Popular Shops
                            </span>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row">
            </div>
            <div class="row">

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_6.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">CAR SALES</h6>
                        </div>
                        <div class="card-footer bg-white pt-0 mb-3">
                            <p class="text-center category-slogan">
                                Explore New or Used Vehicles Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_7.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">HOME APPLIANCES</h6>
                        </div>
                        <div class="card-footer bg-white pt-0 mb-3">
                            <p class="text-center category-slogan">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_8.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                GROCERIES
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_9.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                MADE IN SRI LANKA
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_10.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                HEALTH & BEAUTY
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_11.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                HOUSES & RENTS
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Available Products Deals & Offers

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_13.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">ELECTRONICS</h6>
                        </div>
                        <div class="card-footer bg-white pt-0 mb-3">
                            <p class="text-center category-slogan">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_1.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                FASHION & BEAUTY
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_4.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                ESSENTIALS
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_5.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                TRANSPORTATION
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Best Promotions Deals & Offers
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/image_1.png') }}" class="mb-3 w-75">
                            <h6 class="category-header">
                                MARKETPLACE
                            </h6>
                        </div>
                        <div class="card-footer bg-white pt-0">
                            <p class="text-center category-slogan mb-3">
                                Explore Available Products Deals & Offers

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-6">
                    <div class="card bg-primary category-card-shadow mb-3">
                        <div class="card-body text-center">
                            <img src="{{ asset('assets/images/sample_images/search_logo.png') }}" class="mb-3 w-75">
                            <h6 class="category-header text-white">
                                MORE
                            </h6>
                        </div>
                        <div class="card-footer bg-primary pt-0">
                            <p class="text-center category-slogan mb-3 text-white">
                                Explore More Available Shop Categories
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="mt-5 recomend-part">
        <div class="container">

            <div class="row">

                <div class="col-md-4 col-12">
                    <div class="card category-card-shadow">
                        <img src="{{ asset('assets/images/sample_images/promo_1.png') }}" class="w-100">
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="card category-card-shadow">
                        <img src="{{ asset('assets/images/sample_images/promo_2.png') }}" class="w-100">
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="card category-card-shadow">
                        <img src="{{ asset('assets/images/sample_images/promo_3.png') }}" class="w-100">
                    </div>
                </div>

                <div class="col-md-12 col-12 text-center">
                    <button class="btn btn-primary mt-3">View More Promotions</button>
                </div>

            </div>
        </div>
    </section>


    <footer class="footer-part mt-5">
        <div class="container">
            <div class="row newsletter">
                <div class="col-lg-6">
                    <div class="news-content">
                        <h2>Subscribe for Latest Offers</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="news-form">
                        <input type="text" placeholder="Enter Your Email Address">
                        <button class="btn btn-inline">
                            <i class="fas fa-envelope"></i>
                            <span>Subscribe</span>
                        </button>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-content">
                        <h3>Contact Us</h3>
                        <ul class="footer-address">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <p style="font-size: 14px">Abc, <span>Western Province, Sri Lanka</span></p>
                            </li>
                            <li><i class="fas fa-envelope"></i>
                                <p style="font-size: 14px">info@simplelanka.com <span>inquery@simplelanka.com</span></p>
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <p style="font-size: 14px">077 145 526<span>0777 123 456</span></p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-content">
                        <h3>Overview</h3>
                        <ul class="footer-widget">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy & Policy</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Ad Service</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-content">
                        <h3>Popular Categories</h3>
                        <ul class="footer-widget">
                            <li><a href="#">Electronics</a></li>
                            <li><a href="#">Home Appliances</a></li>
                            <li><a href="#">Fashion & Beauty</a></li>
                            <li><a href="#">Essentials</a></li>
                            <li><a href="#">Transportation</a></li>
                            <li><a href="#">Marketplace</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-info">
                        <a href="#">
                            <img src="http://127.0.0.1:8000/assets/images/logo.png" alt="logo">
                        </a>
                        <ul class="footer-count">
                            <li>
                                <h5>9,238</h5>
                                <p>Registered Users</p>
                            </li>
                            <li>
                                <h5>42,789</h5>
                                <p>Community Ads</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-end mt-3">
            <div class="container">
                <div class="footer-end-content">
                    <p>All Copyrights Reserved © 2022 - Developed by <b>Simple Lanka Digital</b></p>
                </div>
            </div>
        </div>

    </footer>

    @include('layouts.scripts')
@endsection
