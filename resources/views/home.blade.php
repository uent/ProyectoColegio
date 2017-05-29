
<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Title -->
        <title>Meteor | Login - Forgot Password</title>

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



    </head>
    <body class="page-lock-screen">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="panel panel-white" id="js-alerts">
                                <div class="panel-body">
                            <div class="login-box">
                                <div class="user-box m-t-md row">
                                    <div class="col-md-12 m-b-md">

                                    </div>
                                    <div class="col-md-12">
                                        <p class="lead no-m text-center m-b-xxs">Bienvenido {{Auth::user()->name}}</p>
                                        
                                        <form class="form-inline text-center" action='Mi_menu' method='get'>
                                            <div class="input-group m-b-lg">

                                                <div class="input-group-btn">
                                                    <button type="submit" class="btn btn-success">Entrar</button>
                                                </div><!-- /btn-group -->
                                            </div><!-- /input-group -->
                                        </form>
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->


        <!-- Javascripts -->


    </body>
</html>
