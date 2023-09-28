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
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="background-color: #030303">
            <a class="navbar-brand brand-logo" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.svg') }}" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo"/></a>
        </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
        @yield('content')
    </div>
</div>

<script src="{{ asset('assets/js/template.js') }}"></script>
<script src="{{ asset('assets/js/dashboard.js') }}"></script>
</body>

</html>

