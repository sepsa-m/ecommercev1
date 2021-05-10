<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>E-Commerce Admin Dashboard</title>
    <link rel="stylesheet"
          href="{{ asset('backend/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('backend/fonts/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/fonts/fontawesome5-overrides.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/bootstrap/css/sidebar.css') }}">
    <link rel="stylesheet"
          href="{{ asset('backend/bootstrap/css/styles.css') }}">
</head>

<body id="page-top">

<div id="wrapper">

    @include('admin.layouts.sidebar')

    <div class="cd-flex flex-column" id="content-wrapper">
            @include('admin.layouts.header')

            @yield('admin_content')

            @include('admin.layouts.footer')
    </div>
    <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
<script src="{{ asset('backend/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('backend/bootstrap/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('backend/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/bootstrap/js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('backend/js/bs-init.js') }}"></script>
<script src="{{ asset('backend/bootstrap/js/jquery.easing.js') }}"></script>
<script src="{{ asset('backend/js/theme.js') }}"></script>
<script src="{{ asset('backend/bootstrap/js/scripts.js') }}"></script>
</body>

</html>
