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
</style>

<section class="dash-header-part">
    <div class="container">
        <div class="dash-header-card">

            @if (session('status'))
                @if (session('code') == '400')
                    @foreach (session('errors') as $error)
                        <div class="alert alert-warning p-3 mb-3" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                @else
                    <div class="alert alert-success p-3 mb-3" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

            @endif


            <div class="row">
                <div class="col-lg-5">
                    <div class="dash-header-left">
                        <div class="dash-avatar">
                            <a>
                                @if (auth()->user()->image != null)
                                    <img src="{{ auth()->user()->image }}" alt="avatar"
                                        style="width:100px ; height:100px">
                                @else
                                    <img src="{{ asset('assets/images/default/user_image.jpeg') }}" alt="avatar"
                                        style="width:100px ; height:100px">
                                @endif
                            </a>
                        </div>
                        <div class="dash-intro">
                            <h4>
                                {{ auth()->user()->name }}
                            </h4>
                            <h5>New User</h5>
                            <ul class="dash-meta">
                                <li><i class="fas fa-phone-alt"></i>
                                    <span>{{ auth()->user()->mobile_number == null ? 'NOT INSERTED' : auth()->user()->mobile_number }}</span>
                                </li>
                                <li><i class="fas fa-envelope"></i><span>{{ auth()->user()->email }}</span></li>
                                <li><i
                                        class="fas fa-map-marker-alt"></i><span>{{ auth()->user()->address == null ? 'NOT INSERTED' : auth()->user()->address . ', ' . auth()->user()->address }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                @if (auth()->user()->usertype == 2)
                    <div class="col-lg-7">
                        <div class="dash-header-right">
                            <div class="dash-focus dash-list">
                                <h2>0</h2>
                                <p>listing ads</p>
                            </div>
                            <div class="dash-focus dash-book">
                                <h2>0</h2>
                                <p>total follower</p>
                            </div>
                            <div class="dash-focus dash-rev">
                                <h2>0</h2>
                                <p>total review</p>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="dash-header-alert alert fade show">
                        <p>From your account dashboard. you can easily check & view your recent orders, manage your
                            shipping and billing addresses and Edit your password and account details.</p><button
                            data-dismiss="alert"><i class="fas fa-times"></i></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="dash-menu-list">
                        <ul>
                            <li><a id="member_profile_dashbaord" href="/register-user/dashboard">dashboard</a></li>
                            <li><a id="member_profile_profile" href="/register-user/profile">Profile</a></li>
                            <li><a id="member_profile_add_ad" href="/register-user/ad-post">ad post</a></li>
                            <li><a id="member_profile_my_ads" href="/register-user/ad-list">my ads</a></li>
                            <li><a id="member_profile_create_shop" href="/register-user/create-shop">Create Shop</a>
                            </li>
                            <li><a id="member_profile_settings" href="/register-user/settings">settings</a></li>
                            <li><a id="member_profile_notifications"
                                    href="/register-user/notifications">notification</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
