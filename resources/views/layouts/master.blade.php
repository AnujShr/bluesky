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
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/'.$routeName.'.css')}}">
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