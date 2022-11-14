{{-- <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('assets/js/notiflix.js') }}"></script>
<script src="{{ asset('assets/js/custom/main.js') }}"></script>

<script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>


<script>
    function member_profile_nav_active_remove() {
        $('#member_profile_dashbaord').removeClass('active');
        $('#member_profile_profile').removeClass('active');
        $('#member_profile_create_shop').removeClass('active');
        $('#member_profile_add_ad').removeClass('active');
        $('#member_profile_my_ads').removeClass('active');
        $('#member_profile_settings').removeClass('active');
        $('#member_profile_notifications').removeClass('active');
    }

    $(document).ready(function() {
        var url = window.location.pathname;

        if (url == '/member-profile/dashboard') {
            member_profile_nav_active_remove();
            $('#member_profile_dashbaord').addClass('active');
        }

        if (url == '/member-profile/profile') {
            member_profile_nav_active_remove();
            $('#member_profile_profile').addClass('active');
        }

        if (url == '/member-profile/create-shop') {
            member_profile_nav_active_remove();
            $('#member_profile_create_shop').addClass('active');
        }

        if (url == '/member-profile/add-ad') {
            member_profile_nav_active_remove();
            $('#member_profile_add_ad').addClass('active');
        }

        if (url == '/member-profile/my-ads') {
            member_profile_nav_active_remove();
            $('#member_profile_my_ads').addClass('active');
        }

        if (url == '/member-profile/settings') {
            member_profile_nav_active_remove();
            $('#member_profile_settings').addClass('active');
        }

        if (url == '/member-profile/notifications') {
            member_profile_nav_active_remove();
            $('#member_profile_notifications').addClass('active');
        }

    });

    $(document).ready(function() {

        $('.owl-carousel').owlCarousel({
            margin: 10,
            loop: true,
            autoWidth: false,
            items: 1
        })

    });
</script>
