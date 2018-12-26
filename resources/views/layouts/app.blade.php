<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--<link href="{{ asset('css/about.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/base.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/index.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/info.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/infopic.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/m.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/share.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/time.css') }}" rel="stylesheet">--}}
    
</head>
<body>
<script type="text/javascript" src="{{ asset('cms/lib/jquery/1.9.1/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('cms/lib/layer/2.4/layer.js')}}"></script>
<script type="text/javascript" src="{{ asset('cms/static/h-ui/js/H-ui.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('cms/static/h-ui.admin/js/H-ui.admin.js')}}"></script>

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

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
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
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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

    <!-- Scripts -->

</body>
</html>
