<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>blueSky</title>
    <link href="{{ asset(mix('css/admin/app.css')) }}" rel="stylesheet">
    <script>
        var activeRoute = '{{Route::currentRouteName()}}'
    </script>
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        @include('layouts.admin.sidebar')
        @include('layouts.admin.top-navigation')
        @yield('content')
        @include('layouts.admin.footer')
    </div>
</div>
</body>
<script>
</script>
<script src="{{asset('js/admin/app.js')}}"></script>

@yield('js')
</html>