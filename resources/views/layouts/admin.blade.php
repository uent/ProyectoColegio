<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Title -->
        <title>Altavida</title>

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
        <link href="{{url('')}}/plugins/summernote-master/summernote.css" rel="stylesheet" type="text/css"/>
        <link href="{{url('')}}/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>
        <link href="{{url('')}}/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css"/>
        <link href="{{url('')}}/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
        <link href="{{url('')}}/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css"/>

        <link href="{{url('')}}/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{url('')}}/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css"/>
        <link href="{{url('')}}/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>

        <link href="{{asset('plugins/waves/waves.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('plugins/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('plugins/3d-bold-navigation/css/style.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('plugins/slidepushmenus/css/component.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('plugins/weather-icons-master/css/weather-icons.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('plugins/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('')}}/plugins/toastr/toastr.min.css" rel="stylesheet"/>
        <link href="{{url('')}}/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
        <link href="{{url('')}}/plugins/ion.rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css"/>
        <link href="{{url('')}}/plugins/ion.rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css"/>
        <link href="{{url('')}}/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{url('')}}/plugins/morris/morris.css" rel="stylesheet" type="text/css"/>

        <!----Themes ---->
        <link href="{{asset('css/meteor.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/layers/light-layer.css')}}" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css"/>
        <script src="{{asset('plugins/3d-bold-navigation/js/modernizr.js')}}"></script>
        <script src="{{asset('plugins/offcanvasmenueffects/js/snap.svg-min.js')}}"></script>


        <!-----------Archivos JS ------------>
        <!-- Javascripts -->
        <script src="{{asset('plugins/jquery/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
        <script src="{{asset('plugins/pace-master/pace.min.js')}}"></script>
        <script src="{{asset('plugins/jquery-blockui/jquery.blockui.js')}}"></script>
        <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('plugins/switchery/switchery.min.js')}}"></script>
        <script src="{{asset('plugins/uniform/js/jquery.uniform.standalone.js')}}"></script>
        <script src="{{asset('plugins/offcanvasmenueffects/js/classie.js')}}"></script>
        <script src="{{asset('plugins/waves/waves.min.js')}}"></script>
        <script src="{{asset('plugins/3d-bold-navigation/js/main.js')}}"></script>
        <script src="{{asset('plugins/waypoints/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
        <script src="{{asset('plugins/flot/jquery.flot.min.js')}}"></script>
        <script src="{{asset('plugins/flot/jquery.flot.time.min.js')}}"></script>
        <script src="{{asset('plugins/flot/jquery.flot.symbol.min.js')}}"></script>
        <script src="{{asset('plugins/flot/jquery.flot.resize.min.js')}}"></script>
        <script src="{{asset('plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('plugins/curvedlines/curvedLines.js')}}"></script>
        <script src="{{url('')}}/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="{{asset('plugins/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>
        <script src="{{asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
        <!--<script src="{{asset('plugins/chartjs/Chart.bundle.min.js')}}"></script>-->
        <script src="{{url('')}}/plugins/ion.rangeslider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
        <script src="{{url('')}}/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script src="{{asset('js/meteor.min.js')}}"></script>
        <script src="{{url('')}}/plugins/summernote-master/summernote.min.js"></script>
        <script src="{{url('')}}/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="{{url('')}}/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
        <script src="{{url('')}}/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="{{url('')}}/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
        <script src="{{url('')}}/js/pages/form-elements.js"></script>
        <script src="{{url('')}}/plugins/toastr/toastr.min.js"></script>
        <script src="{{url('')}}/js/pages/notifications.js"></script>
        <script src="{{url('')}}/js/custom.js"></script>
        <!----<script src="{{url('')}}/js/Pub-Sub.js"></script>---->
        <script src="{{url('')}}/js/pages/ui-sliders.js"></script>
        <script src="{{url('')}}/plugins/select2/js/select2.min.js"></script>
        <script src="{{url('')}}/js/pages/form-select2.js"></script>
        <script src="{{url('')}}/js/pages/table-data.js"></script>

        <!----Calendario ---->

        <!--<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

        <link href='../fullcalendar.min.css' rel='stylesheet' />
        <link href='../fullcalendar.print.min.css' rel='stylesheet' media='print' />
        <script src='../lib/moment.min.js'></script>
        <script src='../lib/jquery.min.js'></script>
        <script src='../fullcalendar.min.js'></script>-->


        <link href="{{url('')}}/plugins\fullcalendar/fullcalendar.min.css" rel="stylesheet"></link>
        <link href="{{url('')}}/plugins\fullcalendar/fullcalendar.print.min.css"  rel="stylesheet" media="print"></link>
        <script src="{{url('')}}/plugins\fullcalendar/lib/moment.min.js"></script>
        <script src="{{url('')}}/plugins\fullcalendar/fullcalendar.min.js"></script>


        <!--<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>-->
        <!--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>-->



        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body id = "idBody" class="compact-menu">

        <div class="overlay"></div>
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
            <h3><span class="pull-left">Messages</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i class="icon-close"></i></a></h3>
            <div class="slimscroll">
               <!-- <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Michael Lewis<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>John Doe<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Emma Green<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Michael Lewis<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>John Doe<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Emma Green<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Nice to meet you</small></span></a>-->
            </div>
		</nav>
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2"><!--
            <h3><span class="pull-left">Michael Lewis</span> <a href="javascript:void(0);" class="pull-right" id="closeRight2"><i class="fa fa-angle-right"></i></a></h3>
            <div class="slimscroll chat">
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="assets/images/avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Duis aute irure dolor?
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        Lorem ipsum dolor sit amet, dapibus quis, laoreet et.
                    </div>
                </div>
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="assets/images/avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Ut ullamcorper, ligula.
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        In hac habitasse platea dict umst. ligula eu tempor eu id tincidunt.
                    </div>
                </div>
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="assets/images/avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Curabitur pretium?
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        Etiam tempor. Ut tempor! ull amcorper.
                    </div>
                </div>
            </div>
            <div class="chat-write">
                <form class="form-horizontal" action="javascript:void(0);">
                    <input type="text" class="form-control" placeholder="Say something">
                </form>
            </div>-->
		</nav>
        <form class="search-form" action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search" type="button"><i class="icon-close"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form -->
        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button push-sidebar">
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                    <div class="logo-box" align="center">
                        <img src="{{asset('images/altavida-logo.png')}}" style="width:65px;" >

                    </div><!-- Logo Box -->
                    <div class="search-button">
                        <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                    </div>
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left">
                                <li>
                                    <a href="javascript:void(0);" class="sidebar-toggle"><i class="icon-arrow-left"></i></a>
                                </li>
                                <!--<li>
                                    <a href="#cd-nav" class="cd-nav-trigger"><i class="icon-support"></i></a>
                                </li>-->
                                <li class="dropdown">
                                  <!--  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-settings"></i>
                                    </a>-->
                                    <ul class="dropdown-menu dropdown-md dropdown-list theme-settings" role="menu">
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Fixed Header
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right fixed-header-check">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Fixed Sidebar
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right fixed-sidebar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Horizontal bar
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right horizontal-bar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Toggle Sidebar
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right toggle-sidebar-check">
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Compact Menu
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right compact-menu-check" checked>
                                                    </div>
                                                </li>
                                                <li class="no-link" role="presentation">
                                                    Hover Menu
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right hover-menu-check">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="li-group">
                                            <ul class="list-unstyled">
                                                <li class="no-link" role="presentation">
                                                    Boxed Layout
                                                    <div class="ios-switch pull-right switch-md">
                                                        <input type="checkbox" class="js-switch pull-right boxed-layout-check">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="no-link"><button class="btn btn-default reset-options">Reset Options</button></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <!--<li>
                                    <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                                </li>-->
                                <!--<li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-envelope-open"></i><span class="badge badge-danger pull-right">6</span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        <li><p class="drop-title">You have 6 new  messages!</p></li>
                                        <li class="dropdown-menu-list slimscroll messages">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar2.png" alt=""></div>
                                                        <p class="msg-name">Michael Lewis</p>
                                                        <p class="msg-text">Yeah science!</p>
                                                        <p class="msg-time">3 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar4.png" alt=""></div>
                                                        <p class="msg-name">John Doe</p>
                                                        <p class="msg-text">Hi Nick</p>
                                                        <p class="msg-time">8 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar3.png" alt=""></div>
                                                        <p class="msg-name">Emma Green</p>
                                                        <p class="msg-text">Let's meet!</p>
                                                        <p class="msg-time">56 minutes ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar5.png" alt=""></div>
                                                        <p class="msg-name">Nick Doe</p>
                                                        <p class="msg-text">Nice to meet you</p>
                                                        <p class="msg-time">2 hours ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="assets/images/avatar2.png" alt=""></div>
                                                        <p class="msg-name">Michael Lewis</p>
                                                        <p class="msg-text">Yeah science!</p>
                                                        <p class="msg-time">5 hours ago</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="msg-img"><div class="online off"></div><img class="img-circle" src="assets/images/avatar4.png" alt=""></div>
                                                        <p class="msg-name">John Doe</p>
                                                        <p class="msg-text">Hi Nick</p>
                                                        <p class="msg-time">9 hours ago</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="#" class="text-center">All Messages</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-bell"></i><span class="badge badge-danger pull-right">3</span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        <li><p class="drop-title">You have 3 pending tasks!</p></li>
                                        <li class="dropdown-menu-list slimscroll tasks">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-success"><i class="fa fa-user"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">1m</span>
                                                        <p class="task-details">New user registered</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-primary"><i class="fa fa-refresh"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">24m</span>
                                                        <p class="task-details">3 Charts refreshed</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-danger"><i class="fa fa-phone"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">24m</span>
                                                        <p class="task-details">2 Missed calls</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
                                    </ul>
                                </li>-->
                                <li class="dropdown">
                                  <?php
                                      if(Auth::check())
                                      {
                                        echo

                                          "
                                        <a href='#' class='dropdown-toggle' data-toggle='dropdown'>
                                            <form name=logout action='logout' method='post'>";?>{{ csrf_field() }}

                                            <?php echo
                                            "</form>
                                            <a class='waves-effect waves-button' onclick='document.logout.submit();return false'>
                                            <span class='user-name'>Logout</span>
                                           <!-- <img class='img-circle avatar' src='assets/images/avatar1.png' width='40' height='40' alt=''>-->
                                        </a>

                                        ";
                                      }else
                                      echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>
                                          <form name=login action='login' method='get'>";?>{{ csrf_field() }}

                                          <?php echo
                                          "</form>
                                          <a class='waves-effect waves-button' onclick='document.login.submit();return false'>
                                          <span class='user-name'></span>
                                         <!-- <img class='img-circle avatar' src='assets/images/avatar1.png' width='40' height='40' alt=''>-->
                                      </a>";

                                    echo
                                "</li>"; ?>
                                <li>
                                    <!--<a href="javascript:void(0);" id="showRight">
                                        <i class="icon-bubbles"></i>
                                    </a>-->
                                </li>
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
            <div class="page-sidebar sidebar ">
                <div class="page-sidebar-inner slimscroll">
                    <ul class="menu accordion-menu">

                    <!--@yield('menu')--!>


                    <?php
                    use App\Http\Controllers\PermisosController;

                    if(Auth::check())
                    {
                    	$id = Auth::user()->id;

                    	$permisos = PermisosController::VistasDisponiblesPorIdUsuario($id);


                    	if($permisos['NinoController@pagCrear'])
                    	{
                    		echo
                    		"<li class='droplink'>
                    			<form name=formIngresaNino action='ingresar_nino' method='get'></form>
                    		    <a class='waves-effect waves-button' onclick='document.formIngresaNino.submit();return false'>
                    		    <span class='menu-icon icon-user-follow'></span><p>Ingresar Niño/a</p></a>
                    		</li>";
                    	}

                    	if($permisos['NinoController@MostrarNinosParaLlamar'])
                    	{
                    		echo
                    		"<li class='droplink'>
                    			<form name=formContactosPendientes action='contactos_pendientes' method='get'></form>
                    			<a class='waves-effect waves-button' onclick='document.formContactosPendientes.submit();return false'>
                    				<span class='menu-icon icon-call-out'></span><p>Contactos Pendientes</p></a>
                    		</li>";
                    	}

                    	if($permisos['OrdenDiagnosticoController@MostrarCitasPendientes'])
                    	{
                    		echo
                    		"<li>
                    			<form name=formAsignarCitas action='pantalla_asignar_Citas' method='get'></form>
                    			<a class='waves-effect waves-button' onclick='document.formAsignarCitas.submit();return false'>
                    			<span class='menu-icon icon-notebook'></span><p>Asignar Citas</p><span class='active-page'></span></a>
                    		</li>";
                    	}

                    	if($permisos['CitaController@CitasPendientesPorUsuarioActual'])
                    	{
                    		echo
                    		"	<li class='droplink'>
                    				<form name=CitasPendientesProfesional action='citas_pendientes_profesional' method='get'></form>
                    				<a class='waves-effect waves-button' onclick='document.CitasPendientesProfesional.submit();return false'>
                    			    <span class='menu-icon icon-pin'></span><p>Evaluar Citas</p></a>
                    			</li>";
                    		}

                    		if($permisos['AnamnesisController@OrdenesPendientesDeAnamnesis'])
                    		{
                    			echo
                    			"<li class='droplink'>
                    				<form name=formGenerarAnamnesis action='pantalla_generar_anamnesis' method='get'></form>
                    				<a class='waves-effect waves-button' onclick='document.formGenerarAnamnesis.submit();return false'>
                    			    <span class='menu-icon icon-login'></span><p>Generar Informe Final</p></a>
                    			</li>";
                    		}

                    		if($permisos['UsuarioController@IngresoProfesional'])
                    		{
                    			echo
                    			"<li class='droplink'>
                    				<form name=formIngresoProfesional action='ingreso_profesional' method='get'></form>
                    				<a class='waves-effect waves-button' onclick='document.formIngresoProfesional.submit();return false'>
                    			    <span class='menu-icon icon-login'></span><p>Ingresar Profesional</p></a>
                    			</li>";
                    		}

                    		if($permisos['EncuestaController@MostrarEncuesta'])
                    		{
                    			echo
                    			"<li class='droplink'>
                    				<form name=formEncuestaCoevaluacionFamiliar action='encuesta_coevaluacion_familiar' method='get'></form>
                    				<a class='waves-effect waves-button' onclick='document.formEncuestaCoevaluacionFamiliar.submit();return false'>
                    			    <span class='menu-icon icon-login'></span><p>Encuesta coevaluacion</p></a>
                    			</li>";
                    		}

                    		if($permisos['NinoController@VerListadoFichas'])
                    		{
                    			echo
                    			"<li class='droplink'>
                    				<form name=formListadoNinos action='ver_listado_ninos' method='get'></form>
                    				<a class='waves-effect waves-button' onclick='document.formListadoNinos.submit();return false'>
                    			    <span class='menu-icon icon-login'></span><p>Listado niños/tutores</p></a>
                    			</li>";
                    		}

                    		if($permisos['UsuarioController@VerListadoProfesionales'])
                    		{
                    			echo
                    			"<li class='droplink'>
                    				<form name=formListadoProfesionales action='ver_listado_profesionales' method='get'></form>
                    				<a class='waves-effect waves-button' onclick='document.formListadoProfesionales.submit();return false'>
                    					<span class='menu-icon icon-login'></span><p>Listado profesionales</p></a>
                    			</li>";
                    		}

                    		if($permisos['AnamnesisController@GenerarInformeFinal'])
                    		{
                    			echo
                    			"<li class='droplink'>
                    				<form name=formGenerarInformes action='pantalla_mostrar_listado_informes' method='get'>
                    				<input type='hidden' name='idTutor' value= ";echo $id; echo"'/>
                    				</form>
                    				<a class='waves-effect waves-button' onclick='document.formGenerarInformes.submit();return false'>
                    			    <span class='menu-icon icon-login'></span><p>Generar Informes</p></a>
                    			</li>";
                    		}

                    		if($permisos['CalendarioController@MostrarCalendarioProfesional'])
                    		{
                    			echo
                    			"<li class='droplink'>
                    				<form name=formVerCalendarioProfesional action='verCalendarioProfesional' method='get'>
                    				</form>
                    				<a class='waves-effect waves-button' onclick='document.formVerCalendarioProfesional.submit();return false'>
                    					<span class='menu-icon icon-login'></span><p>calendario</p></a>
                    			</li>";
                    		}


                    }else
                    {
                    	echo "	<li class='droplink'>
                    	<form name=logout action='login' method='get'>";?>{{ csrf_field() }}
                    <?php echo
                    "</form>
                    		<a class='waves-effect waves-button' onclick='document.login.submit();return false'>
                    			<span class='menu-icon icon-pin'></span><p>Iniciar sesion</p></a>
                    	</li>";
                    	}

                    ?>


                    <!--
                        <li class="active"><a href="index.html" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Dashboard</p><span class="active-page"></span></a></li>
                        <li><a href="profile.html" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>Profile</p></a></li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-envelope-open"></span><p>Mailbox</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="inbox.html">Inbox</a></li>
                                <li><a href="message-view.html">View Message</a></li>
                                <li><a href="compose.html">Compose</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-puzzle"></span><p>UI Kits</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="ui-alerts.html">Alerts</a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-icons.html">Icons</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-notifications.html">Notifications</a></li>
                                <li><a href="ui-grid.html">Grid</a></li>
                                <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-panels.html">Panels</a></li>
                                <li><a href="ui-progress.html">Progress Bars</a></li>
                                <li><a href="ui-sliders.html">Sliders</a></li>
                                <li><a href="ui-nestable.html">Nestable</a></li>
                                <li><a href="ui-tree-view.html">Tree View</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-layers"></span><p>Layouts</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="layout-blank.html">Blank Page</a></li>
                                <li><a href="layout-boxed.html">Boxed Page</a></li>
                                <li><a href="layout-horizontal-menu.html">Horizontal Menu</a></li>
                                <li><a href="layout-horizontal-menu-boxed.html">Boxed &amp; Horizontal Menu</a></li>
                                <li><a href="layout-horizontal-menu-minimal.html">Horizontal Menu Minimal</a></li>
                                <li><a href="layout-fixed-sidebar.html">Fixed Sidebar</a></li>
                                <li><a href="layout-fixed-header.html">Fixed Header</a></li>
                                <li><a href="layout-collapsed-sidebar.html">Collapsed Sidebar</a></li>
                                <li><a href="layout-menu-alt.html">Menu Alt</a></li>
                                <li><a href="layout-hover-menu.html">Hover Menu</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-grid"></span><p>Tables</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="table-static.html">Static Tables</a></li>
                                <li><a href="table-responsive.html">Responsive Tables</a></li>
                                <li><a href="table-data.html">Data Tables</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-pencil"></span><p>Forms</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="form-elements.html">Form Elements</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="form-upload.html">File Upload</a></li>
                                <li><a href="form-image-crop.html">Image Crop</a></li>
                                <li><a href="form-image-zoom.html">Image Zoom</a></li>
                                <li><a href="form-select2.html">Select2</a></li>
                                <li><a href="form-x-editable.html">X-editable</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-pie-chart"></span><p>Charts</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="charts-rickshaw.html">Rickshaw</a></li>
                                <li><a href="charts-morris.html">Morris</a></li>
                                <li><a href="charts-flotchart.html">Flotchart</a></li>
                                <li><a href="charts-chartjs.html">Chart.js</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-power"></span><p>Login</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="login.html">Login Form</a></li>
                                <li><a href="login-alt.html">Login Alt</a></li>
                                <li><a href="register.html">Register Form</a></li>
                                <li><a href="register-alt.html">Register Alt</a></li>
                                <li><a href="forgot.html">Forgot Password</a></li>
                                <li><a href="lock-screen.html">Lock Screen</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-pointer"></span><p>Maps</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="maps-google.html">Google Maps</a></li>
                                <li><a href="maps-vector.html">Vector Maps</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-present"></span><p>Extra</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="500.html">500 Page</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="calendar.html">Calendar</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="todo.html">Todo</a></li>
                                <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="search.html">Search Results</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-energy"></span><p>Levels</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li class="droplink"><a href="#"><p>Level 1.1</p><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="droplink"><a href="#"><p>Level 2.1</p><span class="arrow"></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Level 3.1</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Level 2.2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Level 1.2</a></li>
                            </ul>
                        </li>-->
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->
            <div class="page-inner">
                <div class="page-title">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/Mi_menu') }}">Home</a></li>
                            <li class="active">@yield('nombrePagina')</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    @yield('contenido')
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s">Altavida <i class="fa fa-heart"></i> Centro de Educación</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        <nav class="cd-nav-container" id="cd-nav">
            <header>
                <h3>DEMOS</h3>
            </header>
            <div class="col-md-6 demo-block">
                <a href="../admin1/index.html"><p>Dark<br>Design</p></a>
            </div>
            <div class="col-md-6 demo-block demo-active">
                <p>Light<br>Design</p>
            </div>
            <div class="col-md-6 demo-block">
                <a href="../admin3/index.html"><p>Material<br>Design</p></a>
            </div>
            <div class="col-md-6 demo-block demo-coming-soon">
                <p>Horizontal<br>(Coming)</p>
            </div>
            <div class="col-md-6 demo-block demo-coming-soon">
                <p>Coming<br>Soon</p>
            </div>
            <div class="col-md-6 demo-block demo-coming-soon">
                <p>Coming<br>Soon</p>
            </div>
        </nav>
        <div class="cd-overlay"></div>




    </body>
</html>
