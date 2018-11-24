<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BlueSky Login</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style type="text/css">
        .class {
            width: 100%;
            height: 100%;
            position: absolute;
            z-index: -5;
            filter: brightness(85%);
        }

        body {
            color: #999;
            background: #f5f5f5;
            font-family: 'Montserrat', sans-serif;
        }

        .form-control {
            box-shadow: none;
            border-color: #ddd;
        }

        .form-control:focus {
            border-color: #4aba70;
        }

        .login-form {
            width: 350px;
            margin: 0 auto;
            padding: 30px 0;
        }

        .login-form form {
            color: #434343;
            border-radius: 1px;
            margin-bottom: 15px;
            background: #FFFFE0;
            border: 1px solid #f3f3f3;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .login-form h4 {
            text-align: center;
            font-size: 22px;
            margin-bottom: 20px;
        }

        .login-form .avatar {
            color: #fff;
            margin: 0 auto 30px;
            text-align: center;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            z-index: 9;
            background: #007bff;
            padding: 15px;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
        }

        .login-form .avatar i {
            font-size: 62px;
        }

        .login-form .form-group {
            margin-bottom: 20px;
        }

        .login-form .form-control, .login-form .btn {
            min-height: 40px;
            border-radius: 2px;
            transition: all 0.5s;
        }

        .login-form .close {
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .login-form .btn {
            background: #007bff;
            border: none;
            line-height: normal;
            color: #ffffff;
        }

        .login-form .btn:hover, .login-form .btn:focus {
            background: #42ae68;
        }

        .login-form .checkbox-inline {
            float: left;
        }

        .login-form input[type="checkbox"] {
            margin-top: 2px;
        }

        .login-form .forgot-link {
            float: right;
        }

        .login-form .small {
            font-size: 13px;
        }

        .login-form a {
            font-style: oblique;
            font-weight: 600;
            color: #007bff;
        }
    </style>
</head>
<body>
<img class="class" src="{{asset('images/login4.jpg')}}">
<div class="login-form">
    <form action="{{route('login')}}" method="post">
        {!! csrf_field() !!}

        <div class="avatar"><i class="fa fa-user"></i></div>
        <h4 class="modal-title">Login to Your Account</h4>
        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <input name="password" type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group small clearfix">
            <label class="checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="forgot-link">Forgot Password?</a>
        </div>
        <input type="submit" class="btn btn-block btn-lg" value="Login">
        <div class="text-center small">Don't have an account? <a href="#">Sign up</a></div>

    </form>
</div>
</body>
</html>