<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>WebAdmin - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="css/wizard.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>
<body class="fixed-left"><div id="wrapper"><div class="topbar">
        <div class="topbar-left"><div class="text-center">
                <a href="index.html" class="logo">
                    <span>Web</span>Admin</a>
                <a href="index.html" class="logo-sm"><span>W</span></a>
            </div></div>
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="">
                    <div class="pull-left">
                        <button type="button" class="button-menu-mobile open-left waves-effect waves-light">
                            <i class="ion-navicon"></i>
                        </button> <span class="clearfix"></span>
                    </div>
                    <form class="navbar-form pull-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control search-bar" placeholder="Search...">
                        </div> <button type="submit" class="btn btn-search"><i class="fa fa-search"></i>
                        </button>
                    </form><ul class="nav navbar-nav navbar-right pull-right">
                        <li class="dropdown hidden-xs"> <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light notification-icon-box" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-bell"></i> <span class="badge badge-xs badge-danger"></span> </a>
                            <ul class="dropdown-menu dropdown-menu-lg">
                                <li class="text-center notifi-title">Notification <span class="badge badge-xs badge-success">3</span>
                                </li><li class="list-group">
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="media-heading">Your order is placed</div><p class="m-0">
                                                <small>Dummy text of the printing and typesetting industry.</small>
                                            </p>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media"><div class="media-body clearfix">
                                                <div class="media-heading">New Message received</div>
                                                <p class="m-0"> <small>You have 87 unread messages</small></p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media"><div class="media-body clearfix"><div class="media-heading">Your item is shipped.</div>
                                                <p class="m-0"> <small>It is a long established fact that a reader will</small>
                                                </p></div></div> </a> <a href="javascript:void(0);" class="list-group-item">
                                        <small class="text-primary">See all notifications</small>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="hidden-xs"> <a href="#" id="btn-fullscreen" class="waves-effect waves-light notification-icon-box">
                                <i class="mdi mdi-fullscreen"></i>
                            </a>
                        </li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle">
                                <span class="profile-username"> Kenny Rigdon <br/> <small>Developer</small> </span>
                            </a><ul class="dropdown-menu"><li><a href="javascript:void(0)"> Profile</a></li><li>
                                    <a href="javascript:void(0)"><span class="badge badge-success pull-right">5</span> Settings </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"> Lock screen</a>
                                </li>
                                <li class="divider"></li><li> <a class="dropdown-item "href="{{ route('logout') }}"
                                                                 onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
            <div class="user-details">
                <div class="text-center">
                    <img src="assets/images/users/avatar-1.jpg" alt="" class="img-circle">
                </div>
                <div class="user-info">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Kenny Rigdon</a>
                        <ul class="dropdown-menu"><li><a href="javascript:void(0)"> Profile</a>
                            </li>
                            <li>
                                <a > Settings</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"> Lock screen</a>
                            </li>
                            <li class="divider">
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <p class="text-muted m-0">
                        <i class="fa fa-dot-circle-o text-success">

                        </i> Online</p></div></div><div id="sidebar-menu">
                     <ul>
                    <li>
                        <a href="index.html" class="waves-effect">
                            <i class="mdi mdi-home"></i>
                            <span> Dashboard <span class="badge badge-primary pull-right">1</span></span>
                        </a>
                    </li>
                         <li class="has_sub">
                             <a href="javascript:void(0);" class="waves-effect">
                                 <i class="mdi mdi-album"></i>
                                 <span>Administracion</span>
                                 <span class="pull-right">
                                     <i class="mdi mdi-plus"></i></span>
                             </a>
                             <ul class="list-unstyled">
                                 <li><a href="{{url('Usuarios')}}">Usuarios</a>
                                 </li>
                                 <li>
                                     <a href="ui-panels.html">Panels</a>
                                 </li>
                                 <li>
                                     <a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a>
                                 </li><li><a href="ui-modals.html">Modals</a>
                                 </li><li><a href="ui-components.html">Components</a>
                                 </li><li><a href="ui-progressbars.html">Progress Bars</a>
                                 </li><li><a href="ui-alerts.html">Alerts</a>
                                 </li><li><a href="ui-sweet-alert.html">Sweet-Alert</a>
                                 </li><li><a href="ui-grid.html">Grid</a>
                                 </li>
                             </ul>
                         </li>
                         <li class="has_sub">
                             <a href="javascript:void(0);" class="waves-effect">
                                 <i class="mdi mdi-opacity"></i>
                                 <span> Encuestas </span> <span class="pull-right">
                                     <i class="mdi mdi-plus"></i>
                                 </span>
                             </a>
                             <ul class="list-unstyled"><li>
                                     <a href="{{url('Encuestas')}}">Encuestas</a>
                                 </li><li><a href="icons-ion.html">Ion Icons</a>
                                 </li><li><a href="icons-fontawesome.html">Font awesome</a>
                                 </li><li><a href="icons-themify.html">Themify Icons</a>
                                 </li></ul></li><li class="has_sub"> <a href="javascript:void(0);" class="waves-effect">
                                 <i class="mdi mdi-layers"></i><span> Forms </span>
                                 <span class="pull-right"><i class="mdi mdi-plus"></i>
                                 </span>
                             </a>
                             <ul class="list-unstyled">
                                 <li>
                                     <a href="form-elements.html">General Elements</a>
                                 </li>
                                 <li>
                                     <a href="form-validation.html">Form Validation</a>
                                 </li>
                                 <li>
                                     <a href="form-advanced.html">Advanced Form</a>
                                 </li>
                                 <li><a href="form-wysiwyg.html">WYSIWYG Editor</a>
                                 </li><li><a href="form-uploads.html">Multiple File Upload</a>
                                 </li>
                             </ul>
                         </li>
                         <li>
                             <a href="typography.html" class="waves-effect"><i class="mdi mdi-diamond">

                                 </i><span> Typography <span class="badge badge-primary pull-right">4</span></span></a>
                         </li>
                         <li class="has_sub">
                             <a href="javascript:void(0);" class="waves-effect">
                                 <i class="mdi mdi-table"></i>
                                 <span> Tables </span><span class="pull-right">
                                     <i class="mdi mdi-plus"></i></span></a>
                             <ul class="list-unstyled">
                                 <li>
                                     <a href="tables-basic.html">Basic Tables</a>
                                 </li>
                                 <li>
                                     <a href="tables-datatable.html">Data Table</a>
                                 </li>
                             </ul>
                         </li>
                         <li class="has_sub">
                             <a href="javascript:void(0);" class="waves-effect">
                                 <i class="mdi mdi-chart-pie"></i><span> Charts </span><span class="pull-right">
                                     <i class="mdi mdi-plus"></i></span></a>
                             <ul class="list-unstyled"><li>
                                     <a href="charts-morris.html">Morris Chart</a>
                                 </li>
                                 <li>
                                     <a href="charts-chartjs.html">Chartjs</a>
                                 </li>
                                 <li><a href="charts-flot.html">Flot Chart</a>
                                 </li>
                                 <li>
                                     <a href="charts-other.html">Other Chart</a>
                                 </li>
                             </ul>
                         </li>
                         <li class="has_sub">
                             <a href="javascript:void(0);" class="waves-effect">
                                 <i class="mdi mdi-map"></i><span> Maps </span>
                                 <span class="pull-right"><i class="mdi mdi-plus"></i>
                                 </span></a><ul class="list-unstyled"><li>
                                     <a href="maps-google.html"> Google Map</a>
                                 </li>
                                 <li>
                                     <a href="maps-vector.html"> Vector Map</a>
                                 </li>
                             </ul>
                         </li>
                         <li>
                             <a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar"></i>
                                 <span> Calendar <span class="badge badge-primary pull-right">NEW</span></span></a>
                         </li>
                         <li class="has_sub"> <a href="javascript:void(0);" class="waves-effect">
                                 <i class="mdi mdi-assistant"></i><span> Layouts </span><span class="pull-right">
                                     <i class="mdi mdi-plus"></i></span></a><ul class="list-unstyled">
                                 <li>
                                     <a href="layouts-collapse.html">Menu Collapse</a>
                                 </li>
                                 <li>
                                     <a href="layouts-smallmenu.html">Menu Small</a>
                                 </li>
                                 <li>
                                     <a href="layouts-menu2.html">Menu Style 2</a>
                                 </li>
                             </ul>
                         </li>
                         <li class="has_sub"> <a href="javascript:void(0);" class="waves-effect">
                                 <i class="mdi mdi-google-pages"></i><span> Pages </span>
                                 <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                             <ul class="list-unstyled">
                                 <li>
                                     <a href="pages-timeline.html">Timeline</a>
                                 </li>
                                 <li>
                                     <a href="pages-invoice.html">Invoice</a>
                                 </li>
                                 <li>
                                     <a href="pages-directory.html">Directory</a>
                                 </li><li><a href="pages-login.html">Login</a>
                                 </li><li><a href="pages-register.html">Register</a>
                                 </li><li><a href="pages-recoverpw.html">Recover Password</a>
                                 </li><li><a href="pages-lock-screen.html">Lock Screen</a>
                                 </li><li><a href="pages-blank.html">Blank Page</a>
                                 </li><li><a href="pages-404.html">Error 404</a>
                                 </li><li><a href="pages-500.html">Error 500</a>
                                 </li>
                             </ul>
                         </li>
                     </ul>
            </div>
            <div class="clearfix">

            </div>
        </div>
    </div>
    <div class="content-page">
        <div class="content">
            <div class="">
                <div class="page-header-title">
                    <h4 class="page-title">Escritorio</h4>
                 </div>
            </div>
            <div class="page-content-wrapper ">
                <div class="container">
                    @yield('contenido')
                </div>
            </div>
        </div>
        <footer class="footer"> © 2016 WebAdmin - All Rights Reserved. </footer>
    </div>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael-min.js"></script>
<script src="assets/pages/dashborad.js"></script>
<script src="assets/js/app.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>


@yield('script')
<script>
    function get_fhoy() {
        // FORMATO DE HTML5 input[date] >> 'aaaa-mm-dd'
        var texto = '';
        var fecha = new Date();
        var anho = fecha.getFullYear().toString();
        var mes = ("0" + (fecha.getMonth() + 1)).slice(-2);
        var dia = ("0" + fecha.getDate()).slice(-2);
        texto = anho+'-'+mes+'-'+dia;
        return texto;
    }

</script>
</body>
<!-- Mirrored from themesdesign.in/webadmin_1.1/layouts/blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Mar 2019 05:50:04 GMT -->
</html>