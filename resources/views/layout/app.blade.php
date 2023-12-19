<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | PHP Laravel batch-2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="{{asset('asset')}}/images/favicon.ico" />
    <link href="{{asset('asset')}}/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset')}}/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
    <script src="{{asset('asset')}}/js/layout.js"></script>
    <link href="{{asset('asset')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset')}}/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset')}}/css/custom.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    @include("components.header")
    @include("components.navbar")
    <div>
        @yield('name')
    </div>













    {{-- @include("components.footer") --}}


    <script src="{{asset('asset')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('asset')}}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{asset('asset')}}/libs/node-waves/waves.min.js"></script>
    <script src="{{asset('asset')}}/libs/feather-icons/feather.min.js"></script>
    <script src="{{asset('asset')}}/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{asset('asset')}}/js/plugins.js"></script>
    <script src="{{asset('asset')}}/libs/swiper/swiper-bundle.min.js"></script>
    <script src="{{asset('asset')}}/js/pages/dashboard-ecommerce.init.js"></script>
    <script src="{{asset('asset')}}/js/app.js"></script>

</body>

</html>