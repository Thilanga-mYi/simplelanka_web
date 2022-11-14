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
                        <h2>Settings</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">
                                    Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">ad-post</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.member_profile_nav')

    <div class="setting-part mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="account-card alert fade show">
                        <div class="account-title">
                            <h3>Edit Profile</h3><button data-dismiss="alert">close</button>
                        </div>
                        <form class="setting-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" value="Malinda">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" value="Sandaruwan">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control"
                                            value="115, Main Street, Homagama, Colombo">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control" value="Homagama">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">District</label>
                                        <input type="text" class="form-control" value="Colombo">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Post Code</label>
                                        <input type="text" class="form-control" value="12114">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Website</label>
                                        <input type="text" class="form-control"
                                            placeholder="https://phoneshopsl.simplelanka.lk/">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone</label>
                                        <input type="text" class="form-control" value="0771 456 258">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Profile Image</label>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="btn btn-inline">
                                        <i class="fas fa-user-check"></i>
                                        <span>update profile</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.scripts')

</body>
