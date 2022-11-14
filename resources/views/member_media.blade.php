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
                        <h2 class="text-dark">Add Media</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/" class="text-dark">Home</a>
                            </li>
                            <li class="breadcrumb-item text-dark active" aria-current="page">Add-Media</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.member_profile_nav')

    <section class="mt-3">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <form class="adpost-form">
                        <div class="adpost-card">
                            <div class="adpost-title">
                                <h3>Ad Information</h3>
                            </div>

                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Product
                                            Title</label>
                                        <input type="text" class="form-control"
                                            placeholder="Type your product title here">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Product Category</label>
                                        <select class="form-control custom-select" onchange="loadSubCategory()"
                                            id="main_category">

                                            @foreach ($main_categories as $category)
                                                <option value={{ $category->id }}>{{ $category->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group"><label class="form-label">Price</label><input type="number"
                                            class="form-control" placeholder="Enter your pricing amount"></div>
                                </div>

                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <ul class="form-check-list">
                                            <li><label class="form-label">price condition</label></li>
                                            <li><input type="checkbox" class="form-check" id="fix-check"><label
                                                    for="fix-check" class="form-check-text">fixed</label></li>
                                            <li><input type="checkbox" class="form-check" id="nego-check"><label
                                                    for="nego-check" class="form-check-text">negotiable</label></li>
                                            <li><input type="checkbox" class="form-check" id="day-check"><label
                                                    for="day-check" class="form-check-text">daily</label></li>
                                            <li><input type="checkbox" class="form-check" id="week-check"><label
                                                    for="week-check" class="form-check-text">weekly</label></li>
                                            <li><input type="checkbox" class="form-check" id="month-check"><label
                                                    for="month-check" class="form-check-text">monthly</label></li>
                                            <li><input type="checkbox" class="form-check" id="year-check"><label
                                                    for="year-check" class="form-check-text">yearly</label></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <ul class="form-check-list">
                                            <li><label class="form-label">ad category</label></li>
                                            <li><input type="checkbox" class="form-check" id="sale-check"><label
                                                    for="sale-check" class="flat-badge sale">Product</label></li>
                                            <li><input type="checkbox" class="form-check" id="rent-check"><label
                                                    for="rent-check" class="flat-badge rent">Service</label></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <ul class="form-check-list">
                                            <li><label class="form-label">product condition</label></li>
                                            <li><input type="checkbox" class="form-check" id="use-check"><label
                                                    for="use-check" class="form-check-text">used</label></li>
                                            <li><input type="checkbox" class="form-check" id="new-check"><label
                                                    for="new-check" class="form-check-text">new</label></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group"><label class="form-label">ad description</label>
                                        <textarea class="form-control" placeholder="Describe your message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group"><label class="form-label">ad tag</label>
                                        <textarea class="form-control" placeholder="Maximum of 15 keywords"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>

                <div class="col-lg-4">
                    <div class="account-card alert fade show pt-4">

                        <div class="adpost-title">
                            <h3>Media Information</h3>
                        </div>

                        <div class="row">

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">
                                        Main Image</label>
                                    <input type="file" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">
                                        Left Side Image</label>
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">
                                        Right Side Image</label>
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">
                                        Back View</label>
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">
                                        Other</label>
                                    <input type="file" class="form-control">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="account-card alert fade show pt-4">

                        <div class="adpost-title">
                            <h3>Author Information</h3>
                        </div>

                        <div class="row">

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="Your Name" disabled
                                        value="{{ auth()->user()->name }}">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Your Email" disabled
                                        value="{{ auth()->user()->email }}">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Number</label>
                                    <input type="number" class="form-control" placeholder="Your Number" disabled
                                        value="{{ auth()->user()->mobile_number }}">
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    @include('layouts.scripts')

</body>
