<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bluesky</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Bluesky template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $routeName = Route::currentRouteName();
    @endphp
    <script>
        let activeRoute = {{ Route::currentRouteName()}}
    </script>
    {{--<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">--}}
    {{--<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">--}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/'.$routeName.'.css')}}">
    @yield('style')

    {{--main page styles--}}
{{--    <link rel="stylesheet" type="text/css" href="styles/{{$routeName}}.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="styles/{{$routeName}}_responsive.css">--}}
</head>
<body>

<div class="super_container">

    <!-- Header -->
@include('layouts.front.header')

<!-- Home Search -->
    @include('layouts.front.search');

    <!-- content -->
    @yield('content')

<!-- Newsletter -->

    @include('layouts.front.newsletter')
<!-- Footer -->
    @include('layouts.front.footer')

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>