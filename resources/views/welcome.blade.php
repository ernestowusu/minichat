<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mini Chat</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/AdminLTE.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/styles.css')}}">
    </head>
    <body class="hold-transition skin-blue layout-top-nav" style=" background-image: url('{{asset('assets/images/back.jpg')}}'); background-repeat: no-repeat;
  background-size: cover;">
<div class="container-fluid">
  <div class="login-box">
  <div class="login-logo">
   
  </div>
  <div class="login-box-body">
      <h3 style="text-align:center">Real Chat App</h3>
    <p class="login-box-msg">Sign in to start your session</p>
    <a href="{{ url('/login') }}" class="btn btn-success btn-block btn-lg">Login</a>
    <a href="{{ url('/login') }}" class="btn btn-primary btn-block btn-lg">Register</a>
    <br>

  </div>
  <!-- /.login-box-body -->
</div>
</div>
    </body>
</html>
