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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

</head>

<body>

    @include('layouts.navbar')

    <section class="single-banner dashboard-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content">
                        <h2>My Ads</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">My Ads</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.member_profile_nav')

    <section class="myads-part mt-5 mb-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="header-filter">
                        <div class="filter-short">
                            <label class="filter-label">Short by :</label>
                            <select class="custom-select filter-select">
                                <option selected>all ads</option>
                                <option value="3">Products</option>
                                <option value="2">Services</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>

            <div id="my_ad_list" class="row">

                <div id="ad_list_loading_div" class="col-md-12 mb-3">
                    <div class="card" style="border: 0px">
                        <div class="card-body text-center">
                            <img src="http://elesn.weebly.com/uploads/1/2/7/0/127027138/463670652_orig.gif"
                                style="width: 10%">
                            <br>
                            <small>
                                Loading Ads...
                            </small>
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
                            <div class="cross-vertical-badge product-badge">
                                <i class="fas fa-fire"></i>
                                <span>top niche</span>
                            </div>
                            <div class="product-type">
                                <span class="flat-badge booking">Product</span>
                            </div>
                            <ul class="product-action">
                                <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                            </ul>
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
                                    <a href="/" title="Compare" class="fas fa-compress"></a>
                                    <button type="button" title="Wishlist" class="far fa-heart"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-pagection">
                        <p class="page-info" id="all_ad_count"></p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    @include('layouts.scripts')

    <script>

        $(document).ready(function() {

            $.ajax({
                type: "GET",
                url: "/register-user/ads-list",
                data: {
                    // page: 1,
                    // item_count: 12,
                    sorted_by: 1,
                },
                beforeSend: function() {},
                success: function(response) {
                    $('#ad_list_loading_div').html('');

                    if (response != null) {

                        var card = '';

                        response.forEach(element => {

                            card += '<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">' +
                                '<div class="product-card">' +
                                '<div class="product-media">' +
                                '<div class="image_sized_div">' +
                                '<img class="sized_image"' +
                                'src="../' + element['image'] + '"' +
                                'alt="product">' +
                                '</div>' +
                                '<div class="product-type">' +
                                '<span class="flat-badge booking">' + element['ad_type'] +
                                '</span>' +
                                '</div>' +
                                '<ul class="product-action">' +
                                '<li class="view"><i class="fas fa-eye"></i><span>' + element[
                                    'views'] + '</span></li>' +
                                '<li class="rating"><i class="fas fa-star"></i><span>' +
                                element['ratings'] + '</span></li>' +
                                '</ul>' +
                                '</div>' +
                                '<div class="product-content">' +
                                ' <ol class="breadcrumb product-category">' +
                                '<li>' +
                                '<i class="fas fa-tags"></i>' +
                                '</li>' +
                                ' <li class="breadcrumb-item">' +
                                ' <a href="/ads?category=' + element['sub_category_id'] +
                                '">' + element['sub_category'] + '</a>' +
                                ' </li>' +
                                '</ol>' +
                                '<h5 class="product-title">' +
                                '<a href="/">' + element['name'] + '</a>' +
                                '</h5>' +
                                '<div class="product-meta">' +
                                '<span><i class="fas fa-map-marker-alt"></i>' + element[
                                    'location'] + '</span>' +
                                '<span><i class="fas fa-clock"></i>' + element['created_at'] +
                                '</span>' +
                                '</div>' +
                                '<div class="product-info">' +
                                '<h5 class="product-price">' + element['regular_price'] +
                                '</h5>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>';


                            $('#all_ad_count').html('<i>Listed Total Ad Count</i> : ' + element[
                                'ad_count']);

                        });

                        $('#my_ad_list').html(card);

                    }

                }
            });

        });
    </script>

</body>
