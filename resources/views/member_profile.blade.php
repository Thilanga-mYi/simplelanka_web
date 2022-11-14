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
                        <h2 class="text-dark">Profile Details</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/" class="text-dark">Home</a>
                            </li>
                            <li class="breadcrumb-item active text-dark" aria-current="page">Profile Details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.member_profile_nav')

    <section class="profile-part mt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="account-card">
                        <div class="account-title">
                            <h3>Membership</h3>
                        </div>
                        <ul class="account-card-list">
                            <li>
                                <h5>Status</h5>
                                <p>Premium</p>
                            </li>
                            <li>
                                <h5>Joined</h5>
                                <p>{{ Carbon\Carbon::parse(auth()->user()->created_at)->format('d M Y') }}</p>
                            </li>
                            <li>
                                <h5>District:</h5>
                                <p>{{ auth()->user()->district_id['name'] }}</p>
                            </li>
                            <li>
                                <h5>City:</h5>
                                <p>{{ auth()->user()->city }}</p>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="account-card">
                        <div class="account-title">
                            <h3>Contact Info</h3>
                            <a onclick="enrollProfileDetails()">Edit</a>
                        </div>
                        <ul class="account-card-list">
                            <li>
                                <h5>Website:</h5>
                                <p>{{ auth()->user()->website == null ? '-NOT INSERTED-' : auth()->user()->website }}
                                </p>
                            </li>
                            <li>
                                <h5>Email:</h5>
                                <p>{{ auth()->user()->email }}</p>
                            </li>
                            <li>
                                <h5>Phone:</h5>
                                <p>{{ auth()->user()->mobile_number == null ? '- NOT INSERTED -' : auth()->user()->mobile_number }}
                                </p>
                            </li>
                            <li>
                                <h5>WhatsApp:</h5>
                                <p>{{ auth()->user()->whatsapp == null ? '- NOT INSERTED -' : auth()->user()->whatsapp }}
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>
    <br>
    <br>
    <br>
    <br>

    <div id="enrollProfileDetails_modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Profile Detials</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <form action="/register-user/update" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- PROFILE IMAGE --}}
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <label for="user_image" class="mb-2">Profile Image</label>
                                        <input class="form-control" id="user_image" name="user_image" type="file">
                                    </div>

                                    <div class="col-md-6 mt-2">
                                        <div class="form-group">
                                            <label for="user_gender" class="mb-2">Gender</label>
                                            <select name="user_gender" id="user_gender" class="form-control">
                                                {{-- MALE --}}
                                                @if (auth()->user()->gender == 1)
                                                    <option value="1" selected>Male</option>
                                                @else
                                                    <option value="1">Male</option>
                                                @endif

                                                {{-- FEMALE --}}
                                                @if (auth()->user()->gender == 2)
                                                    <option value="2" selected>Female</option>
                                                @else
                                                    <option value="2">Female</option>
                                                @endif

                                                {{-- OTHER --}}
                                                @if (auth()->user()->gender == 3)
                                                    <option value="3" selected>Other</option>
                                                @else
                                                    <option value="3">Other</option>
                                                @endif

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- PRIMARY DETAILS --}}
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <label for="user_first_name" class="mb-2">First Name</label>
                                        <input type="text" id="user_first_name" name="user_first_name"
                                            class="form-control" placeholder="First Name"
                                            value="{{ auth()->user()->name }}">
                                    </div>

                                    <div class="col-md-6 mt-2">
                                        <label for="user_last_name" class="mb-2">Last Name</label>
                                        <input type="text" id="user_last_name" name="user_last_name"
                                            class="form-control" placeholder="Last Name"
                                            value="{{ auth()->user()->last_name }}">
                                    </div>

                                    <div class="col-md-12 mt-2">
                                        <label for="user_email" class="mb-2">Email</label>
                                        <input type="text" id="user_email" name="user_email" class="form-control"
                                            placeholder="Email" value="{{ auth()->user()->email }}" disabled>
                                    </div>

                                    <div class="col-md-6 mt-2">
                                        <label for="user_mobile_number" class="mb-2">Mobile Number</label>
                                        <input type="text" id="user_mobile_number" name="user_mobile_number"
                                            class="form-control" placeholder="Mobile Number"
                                            value="{{ auth()->user()->mobile_number }}">
                                    </div>

                                    <div class="col-md-6 mt-2">
                                        <label for="user_whatsapp" class="mb-2">Whatsapp Number</label>
                                        <input type="text" id="user_whatsapp" name="user_whatsapp"
                                            class="form-control" placeholder="Whatsapp Number"
                                            value={{ auth()->user()->whatsapp }}>
                                    </div>

                                </div>
                            </div>

                            {{-- LOCATION DETAILS --}}
                            <div class="col-md-12 mt-5">
                                <div class="row">
                                    <div class="col-md-4 mt-2">
                                        <label for="user_district_id" class="mb-2">District</label>
                                        <select name="user_district_id" id="user_district_id" class="form-control">
                                            @foreach ($district_list as $district)
                                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="col-md-4 mt-2">
                                        <label for="user_address" class="mb-2">Address</label>
                                        <input type="text" id="user_address" name="user_address"
                                            class="form-control" placeholder="Address"
                                            value="{{ auth()->user()->address }}">
                                    </div>

                                    <div class="col-md-4 mt-2">
                                        <label for="user_city" class="mb-2">City</label>
                                        <input type="text" id="user_city" name="user_city" class="form-control"
                                            placeholder="City" value="{{ auth()->user()->city }}">
                                    </div>

                                </div>
                            </div>

                            {{-- WEBSITE DETAILS --}}
                            <div class="col-md-12 mt-5">
                                <div class="row">
                                    <div class="col-md-12 mt-2">
                                        <label for="user_website" class="mb-1">Website Link</label>
                                        <br>
                                        <small>Please enter website address if you're wish to sell something on Simple
                                            Lanka</small>
                                        <input type="text" id="user_website" name="user_website"
                                            class="form-control" placeholder="Website Link"
                                            value="{{ auth()->user()->website }}">
                                    </div>
                                </div>
                            </div>

                            {{-- SUBMIT --}}
                            <div class="col-md-12 mt-3">
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="submit" value="Save & Edit" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.scripts')
    <script>
        function enrollProfileDetails() {
            $('#enrollProfileDetails_modal').modal('toggle');
        }
    </script>

</body>
