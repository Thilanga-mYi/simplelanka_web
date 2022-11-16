
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>

    @include('admin.layouts.header')

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('assets/images/logo_color.png') }}" alt="{{ env('APP_NAME') }}" height="60"
                width="200">
        </div>

        @include('admin.layouts.navbar')

        @include('admin.layouts.sidebar')

        @yield('content')

        @include('admin.layouts.footer')

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    @include('admin.layouts.scripts')

</body>

</html>
