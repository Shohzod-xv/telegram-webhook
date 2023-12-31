<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Webhook</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
<div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="background-color: #0f1531">
            <a class="navbar-brand brand-logo" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.svg') }}" alt="logo"></a>
            <a class="navbar-brand brand-logo-mini" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo"></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="icon-menu"></span>
                <span class="text-info">
                    <a href="https://t.me/shohzod_xv">
                        Telegram
                    </a>
                </span>
            </button>
        </div>
    </nav>
    @yield('content')
</div>

<script src="{{ asset('assets/js/template.js') }}"></script>
<script src="{{ asset('assets/js/dashboard.js') }}"></script>
</body>

</html>

