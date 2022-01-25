<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="ws_url" content="{{ env('WS_URL') }}">
    <meta name="user_id" content="{{ Auth::user()->id }}">

    <title>Mini Chat</title>

    <!-- Styles -->
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/AdminLTE.min.css') }}" rel="stylesheet">
    <style type="text/css">
        
        .navbar-default {
        background-color: #3c8dbc;
    border-color: #d3e0e9;
}
    </style>
    @yield('page-style')
</head>
<body class="hold-transition skin-blue layout-top-nav" style=" background-image: url('{{asset('assets/images/back.jpg')}}'); background-repeat: no-repeat;
  background-size: cover;">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a style="color:#000"  class="navbar-brand" href="{{ url('/') }}">
                        {{env('APP_NAME')}}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('login') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" style="color:#000" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit()">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="GET" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
    <script src="{{ asset('assets/js/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vue.js') }}"></script>
    <script src="{{ asset('assets/js/socket.io.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    @yield('page-script')
</body>
</html>
