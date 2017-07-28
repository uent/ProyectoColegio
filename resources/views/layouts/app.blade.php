<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>

        <!-- Title -->
        <title>Altavida | Login</title>

        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="stacks" />

        <!-- Styles -->
        <link href="{{asset('plugins/pace-master/themes/blue/pace-theme-flash.css')}}" rel="stylesheet"/>
        <link href="{{asset('plugins/uniform/css/default.css')}}" rel="stylesheet"/>
        <link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('plugins/fontawesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('plugins/line-icons/simple-line-icons.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('plugins/offcanvasmenueffects/css/menu_cornerbox.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('plugins/waves/waves.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('plugins/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('plugins/3d-bold-navigation/css/style.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="{{asset('css/meteor.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/layers/light-layer.css')}}" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css"/>

        <script src="{{asset('plugins/3d-bold-navigation/js/modernizr.js')}}"></script>
        <script src="{{asset('plugins/offcanvasmenueffects/js/snap.svg-min.js')}}"></script>



    </head>
    <body class="page-login">
 <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">

                <div class="collapse navbar-collapse" id="app-navbar-collapse">



                    <ul class="nav navbar-nav navbar-right">

                        @if (Auth::guest())

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


        <!-- Javascripts -->
        <script src="{{asset('plugins/jquery/jquery-3.1.0.min.js')}}"></script>
        <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
        <script src="{{asset('plugins/pace-master/pace.min.js')}}"></script>
        <script src="{{asset('plugins/jquery-blockui/jquery.blockui.js')}}"></script>
        <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('plugins/switchery/switchery.min.js')}}"></script>
        <script src="{{asset('plugins/uniform/js/jquery.uniform.standalone.js')}}"></script>
        <script src="{{asset('plugins/offcanvasmenueffects/js/classie.js')}}"></script>
        <script src="{{asset('plugins/waves/waves.min.js')}}"></script>
        <script src="{{asset('js/meteor.min.js')}}"></script>

    </body>
</html>
