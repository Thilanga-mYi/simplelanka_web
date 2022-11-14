<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

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

    <link href="{{ asset('assets/css/notiflix.css') }}" rel="stylesheet" />

</head>

<body>

    @include('layouts.navbar')

    <section class="single-banner dashboard-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content">
                        <h2 class="text-white">ad post</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/" class="text-white">Home</a>
                            </li>
                            <li class="breadcrumb-item text-white active" aria-current="page">ad-post</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.member_profile_nav')

    <section class="mt-3">
        <div class="container">

            <form action="/register-user/enroll-adpost" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-lg-8">

                        <div class="adpost-card">

                            <div class="adpost-title">
                                <h3>Ad Information</h3>
                            </div>

                            <div class="row">

                                {{-- PRODUCT TTILE --}}
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Product
                                            Title <span class="text-danger">*</span>
                                        </label>
                                        <input id="post_title" name="post_title" type="text" class="form-control"
                                            placeholder="Type your product title here" value="{{ old('name') }}">
                                    </div>
                                </div>

                                {{-- PRODUCT MAIN CATEGORY --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Product Category <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-control custom-select" onchange="loadSubCategory()"
                                            id="post_main_category" name="post_main_category">

                                            <option value="0">Select a Category</option>
                                            @foreach ($main_categories as $category)
                                                <option value={{ $category->id }}>{{ $category->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                {{-- PRODUCT SUB CATEGORY --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Product Sub Category <span
                                                class="text-danger">*</span>
                                        </label>
                                        <select class="form-control custom-select" id="post_sub_category"
                                            name="post_sub_category"></select>
                                    </div>
                                </div>

                                {{-- REGULAR PRICES --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Regular Price <span class="text-danger">*</span>
                                        </label>
                                        <input id="post_regular_price" name="post_regular_price" type="number"
                                            class="form-control" placeholder="Enter your regular pricing amount">
                                    </div>
                                </div>

                                {{-- SALE PRICES --}}
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Sale Price <span class="text-danger">*</span>
                                        </label>
                                        <input id="post_sale_price" name="post_sale_price" type="number"
                                            class="form-control" placeholder="Enter your sale pricing amount">
                                    </div>
                                </div>

                                {{-- PRICE CONDITION --}}
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <ul class="form-check-list">

                                            <li>
                                                <label class="form-label">Price Condition <span
                                                        class="text-danger">*</span>
                                                </label>
                                            </li>
                                            <li>
                                                <input id="post_price_condition_fixed"
                                                    name="post_price_condition_group" type="radio"
                                                    class="form-check" value="1">
                                                <label for="post_price_condition_fixed" class="form-check-text">
                                                    fixed
                                                </label>
                                            </li>
                                            <li>
                                                <input id="post_price_condition_negotiable"
                                                    name="post_price_condition_group" type="radio"
                                                    class="form-check" value="2">
                                                <label for="post_price_condition_negotiable" class="form-check-text">
                                                    negotiable
                                                </label>
                                            </li>
                                            <li>
                                                <input id="post_price_condition_daily"
                                                    name="post_price_condition_group" type="radio"
                                                    class="form-check" value="3">
                                                <label for="post_price_condition_daily" class="form-check-text">daily
                                                </label>
                                            </li>
                                            <li>
                                                <input id="post_price_condition_weekly"
                                                    name="post_price_condition_group" type="radio"
                                                    class="form-check" value="3">
                                                <label for="post_price_condition_weekly"
                                                    class="form-check-text">weekly</label>
                                            </li>
                                            <li>
                                                <input id="post_price_condition_monthly"
                                                    name="post_price_condition_group" type="radio"
                                                    class="form-check" value="4">
                                                <label for="post_price_condition_monthly"
                                                    class="form-check-text">monthly</label>
                                            </li>
                                            <li>
                                                <input id="post_price_condition_yearly"
                                                    name="post_price_condition_group" type="radio"
                                                    class="form-check" value="5">
                                                <label for="post_price_condition_yearly"
                                                    class="form-check-text">yearly</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                {{-- AD TYPE --}}
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <ul class="form-check-list">

                                            <li>
                                                <label class="form-label">ad category <span
                                                        class="text-danger">*</span>
                                                </label>
                                            </li>
                                            <li>
                                                <input id="post_category_product" name="post_category_group"
                                                    type="radio" class="form-check" value="1">
                                                <label for="post_category_product"
                                                    class="flat-badge sale">Product</label>
                                            </li>
                                            <li>
                                                <input id="post_category_service" name="post_category_group"
                                                    type="radio" class="form-check" value="2">
                                                <label for="post_category_service"
                                                    class="flat-badge rent">Service</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                {{-- PRODUCT CONDITION --}}
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">

                                        <ul class="form-check-list">
                                            <li>
                                                <label class="form-label">product condition
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </li>
                                            <li>
                                                <input id="post_product_condition_used"
                                                    name="post_product_condition_group" type="radio"
                                                    class="form-check" value="1">
                                                <label for="post_product_condition_used"
                                                    class="form-check-text">used</label>
                                            </li>
                                            <li>
                                                <input id="post_product_condition_new"
                                                    name="post_product_condition_group" type="radio"
                                                    class="form-check" value="2">
                                                <label for="post_product_condition_new"
                                                    class="form-check-text">new</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                {{-- AD DESCRIPTION --}}
                                <div class="col-lg-12">
                                    <div class="form-group"><label class="form-label">ad description</label>
                                        <textarea id="post_description" name="post_description" class="form-control" placeholder="Describe your message"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <button type="submit" class="btn btn-primary">
                                        Submit Ad Post
                                    </button>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4">
                        <div class="account-card alert fade show pt-4">

                            <div class="adpost-title">
                                <h3>Media Information</h3>
                            </div>

                            <div class="row">

                                {{-- MAIN IMAGE --}}
                                <div class="col-lg-12">

                                    <div class="card" style="border: 3px solid #333333; border-style: dashed">
                                        <div class="card-body text-center">
                                            <small>
                                                Ad Main Image
                                            </small>
                                            <input type="file" name="post_main_image" id="post_main_image"
                                                class="form-control">
                                            <i id="post_main_image_txt">
                                                <small>
                                                    Please Selected Product Images
                                                </small>
                                            </i>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="row" id="post_main_image_preview">

                                        </div>
                                    </div>

                                </div>

                                {{-- OPTIONAL IMAGES --}}
                                <div class="col-lg-12 mt-3">

                                    <div class="card" style="border: 3px solid #333333; border-style: dashed">
                                        <div class="card-body text-center">
                                            <small>
                                                Ad Featured Images
                                            </small>
                                            <input type="file" name="post_images[]" id="post_images"
                                                class="form-control" multiple>
                                            <i id="post_images_txt"><small>Please Selected Product Images</small></i>

                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="row" id="post_images_preview">

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

            </form>

        </div>
    </section>

    @include('layouts.scripts')

    <script>
        
        function loadSubCategory() {
            $.ajax({
                type: "GET",
                url: "/register-user/list-sub-categories",
                data: {
                    id: $('#post_main_category').val()
                },
                beforeSend: function() {
                    Notiflix.Loading.Pulse();
                },
                success: function(response) {
                    Notiflix.Loading.Remove();

                    $('#post_sub_category').html('');

                    if (response['type'] == 'success') {
                        response['data'].forEach(element => {
                            console.log(element);
                            $('#post_sub_category').append('<option value=' + element['id'] + '>' +
                                element['name'] + '</option>');
                        });
                    }

                }
            });
        }

        function enrollPost() {
            $.when(mainImageUpload(), optionalImage1Upload()).done(function(a1, a2, ) {
                if (a1 == true && a2 == true) {
                    submitPost();
                }
            });
        }

        function submitPost() {

            var price_condition = $('input[name="post_price_condition_group"]:checked').map(function(_, el) {
                return $(el).val();
            }).get();

            var ad_type = $('input[name="post_category_group"]:checked').map(function(_, el) {
                return $(el).val();
            }).get();

            var product_condition = $('input[name="post_product_condition_group"]:checked').map(function(_, el) {
                return $(el).val();
            }).get();

            $.ajax({
                type: "GET",
                url: "/register-user/enroll-adpost",
                data: {
                    title: $('#post_title').val(),
                    main_category: $('#post_main_category').val(),
                    sub_category: $('#post_sub_category').val(),
                    regular_price: $('#post_regular_price').val(),
                    sale_price: $('#post_sale_price').val(),
                    price_condition: price_condition,
                    ad_type: ad_type,
                    product_condition: product_condition,
                    description: $('#post_description').val()
                },
                success: function(response) {

                    console.log(response);

                    // if (response['type'] == 'error') {
                    //     Notiflix.Notify.Failure(response['des']);
                    // } else if (response['type'] == 'success') {
                    //     customer_table.ajax.reload(null, false);
                    // }
                }
            });
        }

        // IMAGES CHANGE
        $('#post_images').change(function(e) {
            e.preventDefault();

            var fileList = e.target.files;

            $('#post_images_preview').html('');
            $('#post_images_txt').html('');

            for (let index = 0; index < fileList.length; index++) {
                console.log(fileList[index]);

                var x = URL.createObjectURL(fileList[index]);
                $('#post_images_preview').append(
                    '<div class="col-md-6 p-2"><div style="height:100%; width:100%" >' +
                    '<img style="object-fit: cover; height:100%; width:100% " src="' + x +
                    '"alt="product">' +
                    '</div></div>');
            }

            // var x = URL.createObjectURL(e.target.files[0]);
            // $('#post_main_image_prview').attr("src", x);
        });

        // IMAGES CHANGE
        $('#post_main_image').change(function(e) {
            e.preventDefault();

            $('#post_main_image_preview').html('');
            $('#post_main_image_txt').html('');

            var x = URL.createObjectURL(e.target.files[0]);
            $('#post_main_image_preview').append(
                '<div class="col-md-6 p-2"><div style="height:100%; width:100%" >' +
                '<img style="object-fit: cover; height:100%; width:100% " src="' + x +
                '"alt="product">' +
                '</div></div>');

            // var x = URL.createObjectURL(e.target.files[0]);
            // $('#post_main_image_prview').attr("src", x);
        });

    </script>

</body>
