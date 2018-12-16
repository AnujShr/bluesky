<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Compiled and minified JavaScript -->

    <title>
        BlueSky Realtors
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">


    <link href="{{asset('css/material/app.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/material/material-cards.css')}}" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css"/>
    <style>

    </style>
</head>

<body class="">
<div class="wrapper ">
    @include('layouts.material.partials.sidebar')
    <div class="main-panel">
        <!-- Navbar -->
    @include('layouts.material.partials.navbar')

    <!-- End Navbar -->
        @yield('content')
    </div>
</div>
<script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js"></script>
<script src="https://www.mapquestapi.com/sdk/leaflet/v2.2/mq-map.js?key=VEmkGxQ03GpPqxAa4wOJePszcKvlXmgK"></script>
<script src="https://www.mapquestapi.com/sdk/leaflet/v2.2/mq-geocoding.js?key=VEmkGxQ03GpPqxAa4wOJePszcKvlXmgK"></script>
<script src="{{asset('/js/material/app.js')}}"></script>

</body>

</html>

