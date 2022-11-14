<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <title>Simple Lanka</title>
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom/notification.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom/ad-post.css') }}">
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

</head>

<body style="background-color: #f5f5f5">

    @include('layouts.navbar')

    <section class="single-banner dashboard-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content">
                        <h2>Notifications</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Notifications</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.member_profile_nav')

    <section class="notify-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">

                    <div class="notify-body">
                        <div class="notify-filter">
                            <span>Unread 6 Notifications</span>
                            <div class="notify-action">
                                <a href="#" title="Delete All" class="fas fa-trash-alt"></a>
                                <a href="#" title="Mark All As Read" class="fas fa-envelope-open"></a>
                                <a href="#" title="Notification Setting" class="fas fa-cog"></a>
                            </div>
                        </div>

                        <ul class="notify-list notify-scroll">

                            <li class="notify-item">
                                <a href="#" class="notify-link">
                                    <div class="notify-img">
                                        <img src="{{ asset('assets/images/avatar/01.jpg') }}" alt="avatar">
                                    </div>
                                    <div class="notify-content">
                                        <p class="notify-text">
                                            <span>Malinda Sandaruwan</span>
                                            has added
                                            <span>Iphone 12 250GB (User)</span> to his wishlist.
                                        </p>
                                        <span class="notify-time">just now</span>
                                    </div>
                                </a>
                            </li>

                            <li class="notify-item active">
                                <a href="#" class="notify-link">
                                    <div class="notify-img">
                                        <img src="{{ asset('assets/images/avatar/02.jpg') }}" alt="avatar">
                                    </div>
                                    <div class="notify-content">
                                        <p class="notify-text">
                                            <span>Shashi Nadeeka</span>
                                            gave a review on <span>Iphone 12 250GB (Used)</span>
                                        </p><span class="notify-time">2 hours ago</span>
                                    </div>
                                </a>
                            </li>

                            <li class="notify-item">
                                <a href="#" class="notify-link">
                                    <div class="notify-img">
                                        <img src="{{ asset('assets/images/avatar/02.jpg') }}" alt="avatar">
                                    </div>
                                    <div class="notify-content">
                                        <p class="notify-text">
                                            <span>Shashi Nadeeka</span>
                                            add 5 star rating on <span>Iphone 12 250GB (Used)</span>
                                        </p><span class="notify-time">2 hours ago</span>
                                    </div>
                                </a>
                            </li>

                            <li class="notify-item">
                                <a href="#" class="notify-link">
                                    <div class="notify-img">
                                        <img src="{{ asset('assets/images/avatar/03.jpg') }}" alt="avatar">
                                    </div>
                                    <div class="notify-content">
                                        <p class="notify-text">
                                            <span>Anjula</span> have seen your contact number
                                        </p>
                                        <span class="notify-time">3 minutes ago</span>
                                    </div>
                                </a>
                            </li>

                            <li class="notify-item">
                                <a href="#" class="notify-link">
                                    <div class="notify-img">
                                        <img src="{{ asset('assets/images/avatar/04.jpg') }}" alt="avatar">
                                    </div>
                                    <div class="notify-content">
                                        <p class="notify-text">
                                            <span>Sachintha </span> have browse your website
                                        </p>
                                        <span class="notify-time">4 months ago</span>
                                    </div>
                                </a>
                            </li>

                            <li class="notify-item">
                                <a href="#" class="notify-link">
                                    <div class="notify-img">
                                        <img src="{{ asset('assets/images/avatar/01.jpg') }}" alt="avatar">
                                    </div>
                                    <div class="notify-content">
                                        <p class="notify-text">
                                            <span>azam khan</span>and <span>4 other</span>
                                            have seen your contact number
                                        </p>
                                        <span class="notify-time">1 years ago</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.scripts')
    <script src="{{ asset('assets/js/vendor/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/nicescroll.min.js') }}"></script>

</body>
