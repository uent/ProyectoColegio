<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Meteor | Forms - Form Wizard</title>
        
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
        <link href="{{asset('plugins/slidepushmenus/css/component.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('plugins/bootstrap-datepicker/css/datepicker3.css')}}" rel="stylesheet" type="text/css"/>
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
        <script src="{{asset('plugins/3d-bold-navigation/js/main.js')}}"></script>
        <script src="{{asset('plugins/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>
        <script src="{{asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
        <script src="{{asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
        <script src="{{asset('js/meteor.min.js')}}"></script>
        <script src="{{asset('js/pages/form-wizard.js')}}"></script>
        
        <!-- Theme Styles -->
        <link href="{{asset('css/meteor.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/layers/light-layer.css')}}" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css"/>
        
        <script src="{{asset('plugins/3d-bold-navigation/js/modernizr.js')}}"></script>
        <script src="{{asset('plugins/offcanvasmenueffects/js/snap.svg-min.js')}}"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="compact-menu">
        <div class="overlay"></div>
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
            <h3><span class="pull-left">Chat</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i class="icon-close"></i></a></h3>
            <div class="slimscroll">
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Michael Lewis<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>John Doe<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Emma Green<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Michael Lewis<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>John Doe<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Emma Green<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Nice to meet you</small></span></a>
            </div>
		</nav>
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
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
            </div>
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
                    <div class="logo-box">
                        <a href="index.html" class="logo-text"><span>METEOR</span></a>
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
                                <li>
                                    <a href="#cd-nav" class="cd-nav-trigger"><i class="icon-support"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-settings"></i>
                                    </a>
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
                                <li>	
                                    <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-envelope-open"></i><span class="badge badge-danger pull-right">4</span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        <li><p class="drop-title">You have 4 new  messages!</p></li>
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
                                                        <span class="badge badge-roundless badge-default pull-right">1h</span>
                                                        <p class="task-details">2 Missed calls</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="user-name">Nick<i class="fa fa-angle-down"></i></span>
                                        <img class="img-circle avatar" src="assets/images/avatar1.png" width="40" height="40" alt="">
                                    </a>
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                        <li role="presentation"><a href="profile.html"><i class="icon-user"></i>Profile</a></li>
                                        <li role="presentation"><a href="calendar.html"><i class="icon-calendar"></i>Calendar</a></li>
                                        <li role="presentation"><a href="inbox.html"><i class="icon-envelope-open"></i>Inbox<span class="badge badge-success pull-right">4</span></a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation"><a href="lock-screen.html"><i class="icon-lock"></i>Lock screen</a></li>
                                        <li role="presentation"><a href="login.html"><i class="icon-key m-r-xs"></i>Log out</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" id="showRight">
                                        <i class="icon-bubbles"></i>
                                    </a>
                                </li>
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
            <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <ul class="menu accordion-menu">
                        <li><a href="index.html" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Dashboard</p></a></li>
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
                        <li class="droplink active open"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-pencil"></span><p>Forms</p><span class="arrow"></span><span class="active-page"></span></a>
                            <ul class="sub-menu">
                                <li><a href="form-elements.html">Form Elements</a></li>
                                <li class="active"><a href="form-wizard.html">Form Wizard</a></li>
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
                        </li>
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->
            <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Form Wizard</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb breadcrumb-with-header">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Form Wizard</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <div id="rootwizard">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-user m-r-xs"></i>Personal Info</a></li>
                                            <li role="presentation"><a href="#tab2" data-toggle="tab"><i class="fa fa-truck m-r-xs"></i>Product Info</a></li>
                                            <li role="presentation"><a href="#tab3" data-toggle="tab"><i class="fa fa-truck m-r-xs"></i>Payment</a></li>
                                            <li role="presentation"><a href="#tab4" data-toggle="tab"><i class="fa fa-check m-r-xs"></i>Finish</a></li>
                                        </ul>
                                        <div class="progress progress-sm m-t-sm">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                            </div>
                                        </div>
                                        <form id="wizardForm">
                                            <div class="tab-content">
                                                <div class="tab-pane active fade in" id="tab1">
                                                    <div class="row m-b-lg">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="exampleInputName">First Name</label>
                                                                    <input type="text" class="form-control" name="exampleInputName" id="exampleInputName" placeholder="First Name">
                                                                </div>
                                                                <div class="form-group  col-md-6">
                                                                    <label for="exampleInputName2">Last Name</label>
                                                                    <input type="text" class="form-control col-md-6" name="exampleInputName2" id="exampleInputName2" placeholder="Last Name" >
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputEmail">Email address</label>
                                                                    <input type="email" class="form-control" name="exampleInputEmail" id="exampleInputEmail" placeholder="Enter email" >
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword1">Password</label>
                                                                    <input type="password" class="form-control" name="exampleInputPassword1" id="exampleInputPassword1" placeholder="Password" >
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="exampleInputPassword2">Confirm Password</label>
                                                                    <input type="password" class="form-control" name="exampleInputPassword2" id="exampleInputPassword2" placeholder="Confirm Password">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h3>Personal Info</h3>
                                                            <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.</p>
                                                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab2">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="assets/images/envato-logo.png" width="250" alt="">
                                                            <div class="m-t-md">
                                                                <address>
                                                                    <strong>Twitter, Inc.</strong><br>
                                                                    795 Folsom Ave, Suite 600<br>
                                                                    San Francisco, CA 94107<br>
                                                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                                                </address>
                                                                <address>
                                                                    <strong>Full Name</strong><br>
                                                                    <a href="mailto:#">first.last@example.com</a>
                                                                </address>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="form-group col-md-12">
                                                                <label for="exampleInputProductName">Product Name</label>
                                                                <input type="text" class="form-control" name="exampleInputProductName" id="exampleInputProductName" placeholder="Product Name" >
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label for="exampleInputProductId">Product ID</label>
                                                                <input type="text" class="form-control" name="exampleInputProductId" id="exampleInputProductId" placeholder="Product ID">
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label for="exampleInputQuantity">Quantity</label>
                                                                <input type="number" min="1" max="5" class="form-control" name="exampleInputQuantity" id="exampleInputQuantity" placeholder="Quantity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab3">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group col-md-12">
                                                                <label for="exampleInputCard">Card Number</label>
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <input type="text" class="form-control" name="exampleInputCard" id="exampleInputCard" placeholder="Card Number">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control col-md-4" name="exampleInputSecurity" id="exampleInputSecurity" placeholder="Security Code">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label for="exampleInputHolder">Card Holders Name</label>
                                                                <input type="text" class="form-control" name="exampleInputHolder" id="exampleInputHolder" placeholder="Card Holders Name">
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label for="exampleInputExpiration">Expiration</label>
                                                                <input type="text" class="form-control date-picker" name="exampleInputExpiration" id="exampleInputExpiration" placeholder="Expiration">
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label for="exampleInputCsv">CSV</label>
                                                                <input type="text" class="form-control" name="exampleInputCsv" id="exampleInputCsv" placeholder="CSV">
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label class="f-s-12">By pressing Next You will Agree to the Payment <a href="#">Terms & Conditions</a></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab4">
                                                    <h3 class="no-s">Thank You !</h3>
                                                    <div class="alert alert-info m-t-sm m-b-lg" role="alert">
                                                        Congratulations! You got the last step.
                                                    </div>
                                                </div>
                                                <ul class="pager wizard">
                                                    <li class="previous"><a href="#" class="btn btn-default">Previous</a></li>
                                                    <li class="next"><a href="#" class="btn btn-default">Next</a></li>
                                                </ul>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
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
	

        <!-- Javascripts -->

        
    </body>
</html>


