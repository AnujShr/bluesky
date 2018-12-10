<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8"/>
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
<script src="{{asset('/js/material/app.js')}}"></script>

</body>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>--}}

</html>

