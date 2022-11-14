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
                        <h2 class="text-dark">Create Shop</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/" class="text-dark">
                                    Home</a>
                            </li>
                            <li class="breadcrumb-item active text-dark" aria-current="page">Create Shop</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.member_profile_nav')

    <div class="setting-part mt-3">
        <div class="container">

            <form action="/register-user/enroll-shop" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-lg-8">
                        <div class="account-card alert fade show">
                            <div class="account-title">
                                <h3>Shop Information</h3>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Shop Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="shop_name" name="shop_name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">City <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="shop_city" name="shop_city">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">District <span class="text-danger">*</span></label>
                                        <select name="shop_district_id" id="shop_district_id" class="form-control">
                                            @foreach ($district_list as $district)
                                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Shop Address <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="shop_address"
                                            name="shop_address" />
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Shop Description <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control"
                                            placeholder="Describe about your shop in minimum 50 words (ඔබගේ ව්‍යාපාරය පිළිබඳව අවම වචන 50කින් යුත් කෙටි හැඳින්වීමක් කරන්න)"
                                            id="shop_description" name="shop_description"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone (Tel)
                                            <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="shop_tel1" name="shop_tel1">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone (Mobile)
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="shop_tel2" name="shop_tel2">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Shop Logo</label>
                                        <input type="file" class="form-control" id="shop_logo" name="shop_logo">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Website</label>
                                        <input type="text" class="form-control" id="shop_website"
                                            name="shop_website">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">

                        <div class="account-card alert fade show">

                            <div class="account-title">
                                <h3>Shop Registration Information</h3>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">

                                        <label class="form-label">Shop Register Type</label>
                                        <select name="shop_register_type" id="shop_register_type"
                                            class="form-control">
                                            <option value="1">Non-Registered</option>
                                            <option value="2">Sole Property</option>
                                            <option value="3">Partnership</option>
                                            <option value="4">Private Limited</option>
                                            <option value="5">PLC</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Shop Registration No</label>
                                        <input type="text" id="shop_register_no" name="shop_register_no"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Registration Document Image</label>
                                        <input type="file" class="form-control"
                                            id="shop_registration_document_image"
                                            name="shop_registration_document_image">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            {{-- <input type="submit" class="btn btn-primary w-100" value="Create Shop"> --}}
                            <button type="submit" class="btn btn-primary w-100">
                                {{-- <span wire:loading>Loading</span> --}}
                                Create Shop
                            </button>
                        </div>

                    </div>

                </div>

            </form>

        </div>
    </div>

    @include('layouts.scripts')

</body>
