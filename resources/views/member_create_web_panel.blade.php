<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Mironcoder">
    <meta name="email" content="mironcoder@gmail.com">
    <meta name="profile" content="https://themeforest.net/user/mironcoder">
    <meta name="name" content="Classicads">
    <meta name="type" content="Classified Advertising">
    <meta name="title" content="Classicads - Classified Ads HTML Template">
    <meta name="keywords"
        content="classicads, classified, ads, classified ads, listing, business, directory, jobs, marketing, portal, advertising, local, posting, ad listing, ad posting,">
    <title>Simple Lanka</title>
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom/ad-post.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom/contact.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

</head>

<body>

    <style>
        .image_sized_div {
            width: 100%;
            height: 300px;
        }

        .sized_image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .margin_vertical {
            margin-top: 7.5%;
            margin-bottom: 7.5%;
        }

        .page-item .active {
            color: black;
            background: white;
        }
    </style>

    @include('layouts.navbar')

    <div class="setting-part mt-3">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-3">

                    <div id="navbar_cus_panel" class="account-card alert fade show">
                        <div class="account-title">
                            <h3>NAVBAR Customizations</h3>
                        </div>
                        <form class="setting-form">
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="form-group">

                                        <div class="d-flex">
                                            <div>
                                                <label class="form-label">Nav Logo</label>
                                                <input type="file" class="form-control">
                                            </div>
                                            <div>
                                                <label for="exampleColorInput" class="form-label">Nav Color</label>
                                                <input type="color" class="form-control form-control-color"
                                                    style="width: 100px; padding-left:20px; padding-right: 5px;"
                                                    value="#8c9eff" title="Choose your color">
                                            </div>
                                            <div>
                                                <label for="exampleColorInput" class="form-label">Button Color</label>
                                                <input type="color" class="form-control form-control-color"
                                                    style="width: 100px; padding-left:20px; padding-right: 5px;"
                                                    value="#8c9eff" title="Choose your color">
                                            </div>
                                        </div>

                                        <small>
                                            <i>Recommended file type: PNG, Recommended size < 250 Kb</i>
                                        </small>

                                        <div class="mt-2">
                                            <button class="btn" style="width: 200px;">
                                                <span>Apply Changes</span>
                                            </button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>

                    <div id="aboutus_cus_panel" class="account-card alert fade show">
                        <div class="account-title">
                            <h3>ABOUT US Customizations</h3>
                        </div>
                        <form class="setting-form">
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="form-group">

                                        <div class="mb-3">
                                            <label class="form-label">Select Design Template</label>
                                            <select name="" id="" class="form-control">
                                                <option value="1">Design 01</option>
                                                <option value="2">Design 02</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Image Logo</label>
                                            <input type="file" class="form-control w-100">
                                            {{-- <small>
                                                <i>Recommended file type: PNG, Recommended size < 500 Kb, Recommended
                                                        image width < 600 and height < 300 </i>
                                            </small> --}}
                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <label for="exampleColorInput" class="form-label">background</label>
                                                <input type="color" class="form-control form-control-color"
                                                    style="padding-left:5px; padding-right: 5px;" value="#8c9eff"
                                                    title="Choose your color">
                                            </div>

                                            <div class="col-4">
                                                <label for="exampleColorInput" class="form-label">Title</label>
                                                <input type="color" class="form-control form-control-color"
                                                    style="padding-left:5px; padding-right: 5px;" value="#8c9eff"
                                                    title="Choose your color">
                                            </div>

                                            <div class="col-4">
                                                <label for="exampleColorInput" class="form-label">Text</label>
                                                <input type="color" class="form-control form-control-color"
                                                    style="padding-left:5px; padding-right: 5px;" value="#8c9eff"
                                                    title="Choose your color">
                                            </div>
                                        </div>

                                        <div class="mt-3">
                                            <label class="form-label">Title Text</label>
                                            <input type="Text" class="form-control w-100">
                                        </div>

                                        <div class="mt-3">
                                            <label class="form-label">Paragraph One</label>
                                            <textarea cols="30" rows="10" class="form-control"></textarea>
                                        </div>




                                        <div class="mt-3">
                                            <button class="btn" style="width: 200px;">
                                                <span>Apply Changes</span>
                                            </button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>

                    <div id="product_cus_panel" class="account-card alert fade show">
                        <div class="account-title">
                            <h3>PRODUCTS Customizations</h3>
                        </div>
                        <form class="setting-form">
                            <div class="row">

                                <div class="col-lg-12 mb-3">
                                    <div>
                                        <label class="form-label">Select Design Template</label>
                                        <select name="" id="" class="form-control">
                                            <option value="1">Product Design 1</option>
                                            <option value="2">Product Design 2</option>
                                        </select>
                                    </div>

                                    <div class="mt-3">
                                        <button class="btn" style="width: 200px;">
                                            <span>Apply Changes</span>
                                        </button>
                                    </div>

                                </div>


                            </div>
                        </form>
                    </div>

                    <div id="contactus_cus_panel" class="account-card alert fade show">
                        <div class="account-title">
                            <h3>CONTACT US Customizations</h3>
                        </div>
                        <div class="row">

                            <div class="col-lg-12 mb-3">
                                <div class="mb-3">
                                    <label class="form-label">Select Design Template</label>
                                    <select name="" id="" class="form-control">
                                        <option value="1">Contact us Design 1</option>
                                        <option value="2">Contact us Design 2</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <label class="form-label">Background</label>
                                            <input type="color" class="form-control form-control-color"
                                                style="padding-left:5px; padding-right: 5px;" value="#8c9eff"
                                                title="Choose your color">
                                        </div>

                                        <div class="col-4">
                                            <label class="form-label">Icons</label>
                                            <input type="color" class="form-control form-control-color"
                                                style="padding-left:5px; padding-right: 5px;" value="#8c9eff"
                                                title="Choose your color">
                                        </div>

                                        <div class="col-4">
                                            <label class="form-label">Title</label>
                                            <input type="color" class="form-control form-control-color"
                                                style="padding-left:5px; padding-right: 5px;" value="#8c9eff"
                                                title="Choose your color">
                                        </div>


                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Address Line 1 (Street) Text</label>
                                    <input type="Text" class="form-control w-100">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Address Line 2 (Lane & City) Text</label>
                                    <input type="Text" class="form-control w-100">
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="form-label">Primary No</label>
                                            <input type="Text" class="form-control w-100">
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Secondary No</label>
                                            <input type="Text" class="form-control w-100">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="form-label">Primary Email</label>
                                            <input type="email" class="form-control w-100">
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Secondary Email</label>
                                            <input type="email" class="form-control w-100">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Facebook Profile Link</label>
                                    <input type="Text" class="form-control w-100">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Google Location Link</label>
                                    <input type="Text" placeholder="Add iframe of your location"
                                        class="form-control w-100">
                                    <small><i>Go to the google map and search your location and click share button. Then
                                            select <span class="text-primary">EMBED A MAP</span> and click <span
                                                class="text-primary">COPY HTML</span> and past here.</i></small>
                                </div>

                                <div class="mt-3">
                                    <button class="btn" style="width: 200px;">
                                        <span>Apply Changes</span>
                                    </button>
                                </div>

                            </div>


                        </div>
                    </div>


                </div>

                <div class="col-lg-9">
                    <div class="account-card alert fade show">
                        <div class="account-title">
                            <h3>NAVBAR</h3>
                        </div>

                        <div id="web_panel_navbar" class="margin_vertical">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <a class="navbar-brand" href="#">
                                    <img src="{{ asset('assets/images/web_portal_sample_logo.png') }}">
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">HOME</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">ABOUT US</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">PRODUCTS</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">CONTACT US</a>
                                        </li>
                                    </ul>
                                    <form class="form-inline my-2 my-lg-0">
                                        <input class="form-control mr-sm-2" type="search"
                                            placeholder="Search Products" aria-label="Search">
                                        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">
                                            Search
                                        </button>
                                    </form>
                                </div>
                            </nav>
                        </div>

                        {{-- <div id="web_panel_aboutus_design_1" class="margin_vertical">
                            <section class="about-part">
                                <div class="container">
                                    <h2 class="mb-3">About Us Title Here</h2>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="about-content">
                                                <p>
                                                    <i>(Para 1 : Main Paragraph)</i>
                                                    <br>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit enim
                                                    minima cumque saepe fuga
                                                    itaque consectetur aperiam asperiores placeat at modi voluptates
                                                    atque labore quia, dolore
                                                    neque dolorum necessitatibus rem aliquid praesentium? Soluta libero
                                                    rem sunt, quos omnis
                                                    dolorum reprehenderit.
                                                </p>
                                            </div>
                                            <div class="about-quote">
                                                <p>
                                                    <i>(Para 2 : Secondary Paragraph)</i>
                                                    <br>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
                                                    aliquid
                                                    assumenda tempore
                                                    voluptatem!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row about-image">
                                                <div class="col-12 col-lg-12 text-center">
                                                    <img
                                                        src="https://thumbs.dreamstime.com/z/shop-building-colorful-isolated-white-33822015.jpg" class="w-100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div> --}}

                        <div id="web_panel_aboutus_design_2" class="margin_vertical">
                            <section class="about-part">
                                <div class="container">
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="row about-image">
                                                <div class="col-12 col-lg-12 text-center">
                                                    <img class="mt-5"
                                                        src="{{ asset('assets/images/member_web_panel/aboutus_design_2_img.png') }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <h2 class="mb-3">About Us Title Here</h2>
                                            <div class="about-content">
                                                <p>
                                                    <i>(Para 1 : Main Paragraph)</i>
                                                    <br>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit enim
                                                    minima cumque saepe fuga
                                                    itaque consectetur aperiam asperiores placeat at modi voluptates
                                                    atque labore quia, dolore
                                                    neque dolorum necessitatibus rem aliquid praesentium? Soluta libero
                                                    rem sunt, quos omnis
                                                    dolorum reprehenderit.
                                                </p>
                                            </div>
                                            <div class="about-quote">
                                                <p>
                                                    <i>(Para 2 : Secondary Paragraph)</i>
                                                    <br>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
                                                    aliquid
                                                    assumenda tempore
                                                    voluptatem!
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                        </div>

                        <div id="web_panel_products_design_1" class="margin_vertical">
                            <div class="container">

                                <div class="row">

                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                        <div class="product-card">
                                            <div class="product-media">
                                                <div class="image_sized_div">
                                                    <img class="sized_image"
                                                        src="https://i.ikman-st.com/apple-iphone-xs-256gb-used-for-sale-matara-46/0dcc076b-a3d5-4981-9504-3bad20eea5e5/620/466/fitted.jpg"
                                                        alt="product">
                                                </div>
                                                <div class="product-type">
                                                    <span class="flat-badge booking">Product</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <ol class="breadcrumb product-category">
                                                    <li>
                                                        <i class="fas fa-tags"></i>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Electronic Devices</a>
                                                    </li>
                                                </ol>
                                                <h5 class="product-title">
                                                    <a href="/">Apple iPhone XS 256GB (Used)</a>
                                                </h5>
                                                <div class="product-meta">
                                                    <span><i class="fas fa-map-marker-alt"></i>Homagama, Colombo</span>
                                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                                </div>
                                                <div class="product-info">
                                                    <h5 class="product-price">LKR. 124,500</h5>
                                                    <div class="product-btn">
                                                        <a href="/" title="Compare"
                                                            class="fas fa-compress"></a>
                                                        <button type="button" title="Wishlist"
                                                            class="far fa-heart"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                        <div class="product-card">
                                            <div class="product-media">
                                                <div class="image_sized_div">
                                                    <img class="sized_image"
                                                        src="https://i.ikman-st.com/apple-iphone-12-mini-64gb-used-for-sale-matara-4/d8e28a8f-6274-4c8c-a12f-9283f1590f93/620/466/fitted.jpg"
                                                        alt="product">
                                                </div>
                                                <div class="product-type">
                                                    <span class="flat-badge booking">Product</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <ol class="breadcrumb product-category">
                                                    <li>
                                                        <i class="fas fa-tags"></i>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Electronic Devices</a>
                                                    </li>
                                                </ol>
                                                <h5 class="product-title">
                                                    <a href="/">Apple iPhone 12 mini 64GB (Used)</a>
                                                </h5>
                                                <div class="product-meta">
                                                    <span><i class="fas fa-map-marker-alt"></i>Homagama, Colombo</span>
                                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                                </div>
                                                <div class="product-info">
                                                    <h5 class="product-price">LKR. 188,500</h5>
                                                    <div class="product-btn">
                                                        <a href="/" title="Compare"
                                                            class="fas fa-compress"></a>
                                                        <button type="button" title="Wishlist"
                                                            class="far fa-heart"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                        <div class="product-card">
                                            <div class="product-media">
                                                <div class="image_sized_div">
                                                    <img class="sized_image"
                                                        src="https://i.ikman-st.com/hypergear-20000mah-powerbank-org-for-sale-kandy-1/f0f2c5ed-b846-470c-b9ef-169439caaf59/620/466/fitted.jpg"
                                                        alt="product">
                                                </div>
                                                <div class="product-type">
                                                    <span class="flat-badge booking">Product</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <ol class="breadcrumb product-category">
                                                    <li>
                                                        <i class="fas fa-tags"></i>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Electronic Devices</a>
                                                    </li>
                                                </ol>
                                                <h5 class="product-title">
                                                    <a href="/">HYPERGEAR 20000MAH POWERBANK ORG</a>
                                                </h5>
                                                <div class="product-meta">
                                                    <span><i class="fas fa-map-marker-alt"></i>Homagama, Colombo</span>
                                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                                </div>
                                                <div class="product-info">
                                                    <h5 class="product-price">LKR. 8,500</h5>
                                                    <div class="product-btn">
                                                        <a href="/" title="Compare"
                                                            class="fas fa-compress"></a>
                                                        <button type="button" title="Wishlist"
                                                            class="far fa-heart"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                        <div class="product-card">
                                            <div class="product-media">
                                                <div class="image_sized_div">
                                                    <img class="sized_image"
                                                        src="https://i.ikman-st.com/apple-iphone-7-128gb-used-for-sale-matara-543/8f6e3a02-ac17-4aa0-8fe4-e1f80e1b5556/620/466/fitted.jpg"
                                                        alt="product">
                                                </div>
                                                <div class="product-type">
                                                    <span class="flat-badge booking">Product</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <ol class="breadcrumb product-category">
                                                    <li>
                                                        <i class="fas fa-tags"></i>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Electronic Devices</a>
                                                    </li>
                                                </ol>
                                                <h5 class="product-title">
                                                    <a href="/">Apple iPhone 7 128GB (Used)</a>
                                                </h5>
                                                <div class="product-meta">
                                                    <span><i class="fas fa-map-marker-alt"></i>Homagama, Colombo</span>
                                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                                </div>
                                                <div class="product-info">
                                                    <h5 class="product-price">LKR. 49,900</h5>
                                                    <div class="product-btn">
                                                        <a href="/" title="Compare"
                                                            class="fas fa-compress"></a>
                                                        <button type="button" title="Wishlist"
                                                            class="far fa-heart"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                        <div class="product-card">
                                            <div class="product-media">
                                                <div class="image_sized_div">
                                                    <img class="sized_image"
                                                        src="https://i.ikman-st.com/apple-iphone-xs-256gb-used-for-sale-matara-46/0dcc076b-a3d5-4981-9504-3bad20eea5e5/620/466/fitted.jpg"
                                                        alt="product">
                                                </div>
                                                <div class="product-type">
                                                    <span class="flat-badge booking">Product</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <ol class="breadcrumb product-category">
                                                    <li>
                                                        <i class="fas fa-tags"></i>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Electronic Devices</a>
                                                    </li>
                                                </ol>
                                                <h5 class="product-title">
                                                    <a href="/">Apple iPhone XS 256GB (Used)</a>
                                                </h5>
                                                <div class="product-meta">
                                                    <span><i class="fas fa-map-marker-alt"></i>Homagama, Colombo</span>
                                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                                </div>
                                                <div class="product-info">
                                                    <h5 class="product-price">LKR. 124,500</h5>
                                                    <div class="product-btn">
                                                        <a href="/" title="Compare"
                                                            class="fas fa-compress"></a>
                                                        <button type="button" title="Wishlist"
                                                            class="far fa-heart"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                        <div class="product-card">
                                            <div class="product-media">
                                                <div class="image_sized_div">
                                                    <img class="sized_image"
                                                        src="https://i.ikman-st.com/apple-iphone-12-mini-64gb-used-for-sale-matara-4/d8e28a8f-6274-4c8c-a12f-9283f1590f93/620/466/fitted.jpg"
                                                        alt="product">
                                                </div>
                                                <div class="product-type">
                                                    <span class="flat-badge booking">Product</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <ol class="breadcrumb product-category">
                                                    <li>
                                                        <i class="fas fa-tags"></i>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Electronic Devices</a>
                                                    </li>
                                                </ol>
                                                <h5 class="product-title">
                                                    <a href="/">Apple iPhone 12 mini 64GB (Used)</a>
                                                </h5>
                                                <div class="product-meta">
                                                    <span><i class="fas fa-map-marker-alt"></i>Homagama, Colombo</span>
                                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                                </div>
                                                <div class="product-info">
                                                    <h5 class="product-price">LKR. 188,500</h5>
                                                    <div class="product-btn">
                                                        <a href="/" title="Compare"
                                                            class="fas fa-compress"></a>
                                                        <button type="button" title="Wishlist"
                                                            class="far fa-heart"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                        <div class="product-card">
                                            <div class="product-media">
                                                <div class="image_sized_div">
                                                    <img class="sized_image"
                                                        src="https://i.ikman-st.com/hypergear-20000mah-powerbank-org-for-sale-kandy-1/f0f2c5ed-b846-470c-b9ef-169439caaf59/620/466/fitted.jpg"
                                                        alt="product">
                                                </div>
                                                <div class="product-type">
                                                    <span class="flat-badge booking">Product</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <ol class="breadcrumb product-category">
                                                    <li>
                                                        <i class="fas fa-tags"></i>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Electronic Devices</a>
                                                    </li>
                                                </ol>
                                                <h5 class="product-title">
                                                    <a href="/">HYPERGEAR 20000MAH POWERBANK ORG</a>
                                                </h5>
                                                <div class="product-meta">
                                                    <span><i class="fas fa-map-marker-alt"></i>Homagama, Colombo</span>
                                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                                </div>
                                                <div class="product-info">
                                                    <h5 class="product-price">LKR. 8,500</h5>
                                                    <div class="product-btn">
                                                        <a href="/" title="Compare"
                                                            class="fas fa-compress"></a>
                                                        <button type="button" title="Wishlist"
                                                            class="far fa-heart"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                        <div class="product-card">
                                            <div class="product-media">
                                                <div class="image_sized_div">
                                                    <img class="sized_image"
                                                        src="https://i.ikman-st.com/apple-iphone-7-128gb-used-for-sale-matara-543/8f6e3a02-ac17-4aa0-8fe4-e1f80e1b5556/620/466/fitted.jpg"
                                                        alt="product">
                                                </div>
                                                <div class="product-type">
                                                    <span class="flat-badge booking">Product</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <ol class="breadcrumb product-category">
                                                    <li>
                                                        <i class="fas fa-tags"></i>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Electronic Devices</a>
                                                    </li>
                                                </ol>
                                                <h5 class="product-title">
                                                    <a href="/">Apple iPhone 7 128GB (Used)</a>
                                                </h5>
                                                <div class="product-meta">
                                                    <span><i class="fas fa-map-marker-alt"></i>Homagama, Colombo</span>
                                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                                </div>
                                                <div class="product-info">
                                                    <h5 class="product-price">LKR. 49,900</h5>
                                                    <div class="product-btn">
                                                        <a href="/" title="Compare"
                                                            class="fas fa-compress"></a>
                                                        <button type="button" title="Wishlist"
                                                            class="far fa-heart"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="footer-pagection">
                                            <p class="page-info">Showing 12 of 60 Results</p>
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="#">
                                                        <i class="fas fa-long-arrow-alt-left"></i>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link active"
                                                        href="#">1</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">...</li>
                                                <li class="page-item"><a class="page-link" href="#">67</a></li>
                                                <li class="page-item"><a class="page-link" href="#">
                                                        <i class="fas fa-long-arrow-alt-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div id="web_panel_products_design_2" class="margin_vertical">
                            <div class="container">

                                <div class="row">

                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="product-card">
                                            <div class="product-media">
                                                <div class="image_sized_div">
                                                    <img class="sized_image"
                                                        src="https://i.ikman-st.com/apple-iphone-xs-256gb-used-for-sale-matara-46/0dcc076b-a3d5-4981-9504-3bad20eea5e5/620/466/fitted.jpg"
                                                        alt="product">
                                                </div>
                                                <div class="product-type">
                                                    <span class="flat-badge booking">Product</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <ol class="breadcrumb product-category">
                                                    <li>
                                                        <i class="fas fa-tags"></i>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Electronic Devices</a>
                                                    </li>
                                                </ol>
                                                <h5 class="product-title">
                                                    <a href="/">Apple iPhone XS 256GB (Used)</a>
                                                </h5>
                                                <div class="product-meta">
                                                    <span><i class="fas fa-map-marker-alt"></i>Homagama, Colombo</span>
                                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                                </div>
                                                <div class="product-info">
                                                    <h5 class="product-price">LKR. 124,500</h5>
                                                    <div class="product-btn">
                                                        <a href="/" title="Compare"
                                                            class="fas fa-compress"></a>
                                                        <button type="button" title="Wishlist"
                                                            class="far fa-heart"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="product-card">
                                            <div class="product-media">
                                                <div class="image_sized_div">
                                                    <img class="sized_image"
                                                        src="https://i.ikman-st.com/apple-iphone-12-mini-64gb-used-for-sale-matara-4/d8e28a8f-6274-4c8c-a12f-9283f1590f93/620/466/fitted.jpg"
                                                        alt="product">
                                                </div>
                                                <div class="product-type">
                                                    <span class="flat-badge booking">Product</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <ol class="breadcrumb product-category">
                                                    <li>
                                                        <i class="fas fa-tags"></i>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Electronic Devices</a>
                                                    </li>
                                                </ol>
                                                <h5 class="product-title">
                                                    <a href="/">Apple iPhone 12 mini 64GB (Used)</a>
                                                </h5>
                                                <div class="product-meta">
                                                    <span><i class="fas fa-map-marker-alt"></i>Homagama, Colombo</span>
                                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                                </div>
                                                <div class="product-info">
                                                    <h5 class="product-price">LKR. 188,500</h5>
                                                    <div class="product-btn">
                                                        <a href="/" title="Compare"
                                                            class="fas fa-compress"></a>
                                                        <button type="button" title="Wishlist"
                                                            class="far fa-heart"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="product-card">
                                            <div class="product-media">
                                                <div class="image_sized_div">
                                                    <img class="sized_image"
                                                        src="https://i.ikman-st.com/hypergear-20000mah-powerbank-org-for-sale-kandy-1/f0f2c5ed-b846-470c-b9ef-169439caaf59/620/466/fitted.jpg"
                                                        alt="product">
                                                </div>
                                                <div class="product-type">
                                                    <span class="flat-badge booking">Product</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <ol class="breadcrumb product-category">
                                                    <li>
                                                        <i class="fas fa-tags"></i>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="#">Electronic Devices</a>
                                                    </li>
                                                </ol>
                                                <h5 class="product-title">
                                                    <a href="/">HYPERGEAR 20000MAH POWERBANK</a>
                                                </h5>
                                                <div class="product-meta">
                                                    <span><i class="fas fa-map-marker-alt"></i>Homagama, Colombo</span>
                                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                                </div>
                                                <div class="product-info">
                                                    <h5 class="product-price">LKR. 8,500</h5>
                                                    <div class="product-btn">
                                                        <a href="/" title="Compare"
                                                            class="fas fa-compress"></a>
                                                        <button type="button" title="Wishlist"
                                                            class="far fa-heart"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="footer-pagection">
                                            <p class="page-info">Showing 12 of 60 Results</p>
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="#">
                                                        <i class="fas fa-long-arrow-alt-left"></i>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link active"
                                                        href="#">1</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">...</li>
                                                <li class="page-item"><a class="page-link" href="#">10</a></li>
                                                <li class="page-item"><a class="page-link" href="#">
                                                        <i class="fas fa-long-arrow-alt-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> --}}

                        <div id="web_panel_contactus_design_1" class="margin_vertical">
                            <section class="contact-part">
                                <div class="container">
                                    <div class="row">

                                        <div class="col-lg-6">

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="contact-info"><i class="fas fa-map-marker-alt"></i>
                                                        <h3>Find us</h3>
                                                        <p>Stree No <span>Lane & City</span></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="contact-info"><i class="fas fa-phone-alt"></i>
                                                        <h3>Make a Call</h3>
                                                        <p>Telephone No (Primary) <span>Mobile No</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="contact-info">
                                                        <i class="fas fa-envelope"></i>
                                                        <h3>Send Mail</h3>
                                                        <p>Primary Email<span>Secondary Email</span></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="contact-info"><i class="fas fa-globe"></i>
                                                        <h3>Connect on Facebook</h3>
                                                        <p>Facebook Username</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-lg-6">
                                            <div class="contact-map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6929895171206!2d79.84288541539566!3d6.92725302025814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bcfdee7764d%3A0xdf97fbb66912b0c5!2sOne%20Galle%20Face%20Mall!5e0!3m2!1sen!2slk!4v1659680064987!5m2!1sen!2slk"
                                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </section>
                        </div>

                        {{-- <div id="web_panel_contactus_design_2" class="margin_vertical">
                            <section class="contact-part">
                                <div class="container">

                                    <h2 class="mb-5 text-center">Contact us on</h2>

                                    <div class="row">

                                        <div class="col-lg-12">

                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="contact-info"><i class="fas fa-map-marker-alt"></i>
                                                        <h3>Find us</h3>
                                                        <p>Stree No <span>Lane & City</span></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="contact-info"><i class="fas fa-phone-alt"></i>
                                                        <h3>Make a Call</h3>
                                                        <p>Telephone No (Primary) <span>Mobile No</span></p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="contact-info">
                                                        <i class="fas fa-envelope"></i>
                                                        <h3>Send Mail</h3>
                                                        <p>Primary Email<span>Secondary Email</span></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="contact-info"><i class="fas fa-globe"></i>
                                                        <h3>Connect on Facebook</h3>
                                                        <p>Profile Link</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-lg-12">
                                            <div class="contact-map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6929895171206!2d79.84288541539566!3d6.92725302025814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bcfdee7764d%3A0xdf97fbb66912b0c5!2sOne%20Galle%20Face%20Mall!5e0!3m2!1sen!2slk!4v1659680064987!5m2!1sen!2slk"
                                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </section>
                        </div> --}}

                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('layouts.scripts')

</body>
