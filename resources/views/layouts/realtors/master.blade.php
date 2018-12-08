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
    <link rel="stylesheet" href="{{asset('css/realtors.css')}}">
</head>

<body>

<div class="super_container">
    <div class="wrapper">
        @include('realtors.partials.sidebar')
        <div id="content">
            @include('layouts.front.header')
            @yield('content')
        </div>
    </div>


    <!-- Header -->

    <!-- content -->


</div>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/realtors/realtors.js')}}"></script>
</body>
</html>