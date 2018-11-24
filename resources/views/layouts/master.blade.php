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
        let activeRoute = '{{ Route::currentRouteName()}}';
    </script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css"/>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/'.$routeName.'.css')}}">
{{--    <link rel="stylesheet" href="{{asset('css/leaflet.css')}}">--}}
    {{--<script src="{{asset('js/leaflet.js')}}"></script>--}}
    {{--<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
          integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
          crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
            integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
            crossorigin=""></script>--}}
    {{--<script>var _nearplace=_nearplace||{};_nearplace.organization='136c2386-dd13-44a1-8a68-2ba7d0735e81';_nearplace.widget='dc168f51-2fac-4777-bc81-ee82c5de69f7';window.nearplace||function(){var s=document.createElement('script');s.type='text/javascript';s.async=!0;s.src='https://widget.nearplace.com/loader.js';document.addEventListener("DOMContentLoaded",function(){(document.scripts[0]||document.head).appendChild(s)})}();</script>--}}
</head>
<body>

<div class="super_container">

    <!-- Header -->
@include('layouts.front.header')

<!-- Home -->

@yield('home')
<!-- Home -->

    <!-- Home Search -->
    @include('layouts.front.search');

    <!-- content -->
    @yield('content')

<!-- Newsletter -->

    @include('layouts.front.newsletter')
<!-- Footer -->
    @include('layouts.front.footer')

</div>
<script src="{{asset('js/app.js')}}"></script>
@yield('js')
<script src="{{asset('js/'.$routeName.'.js')}}"></script>
</body>
</html>