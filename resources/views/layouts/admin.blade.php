<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/velonic/admin_1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Sep 2018 21:58:20 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Velonic - Responsive Bootstrap 4 Admin Dashboard Template</title>
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{asset('plugins/morris/morris.css')}}">

        <!-- sweet alerts -->
        <link href="{{asset('plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet">

        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.css')}}" rel="stylesheet" type="text/css" />
        <!-- your custom css -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />

        <script src="{{asset('assets/js/modernizr.min.js')}}"></script>




<!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" />

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                            <img src="assets/images/logo.png" alt="" height="18">
                        </span>
                        <i>
                            <img src="assets/images/logo_sm.png" alt="" height="22">
                        </i>
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-email-outline noti-icon waves-light waves-effect"></i>
                            </a>
                            <span class="badge badge-purple noti-icon-badge">3</span>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right dropdown-arrow dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0"><span class="float-right"><a href="#" class="text-dark"><small>Clear All</small></a> </span>Chat</h5>
                                </div>

                                <div class="slimscroll" style="max-height: 230px;">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="assets/images/users/avatar-3.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Sam Garret</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Wow that's great</p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="assets/images/users/avatar-5.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Sherry Marshall</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="assets/images/users/avatar-6.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Shawn Millard</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-dark notify-item notify-all">
                                    View all <i class="fi-arrow-right"></i>
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-bell-outline noti-icon waves-light waves-effect"></i>
                            </a>
                            <span class="badge badge-pink noti-icon-badge">4</span>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right dropdown-arrow dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0"><span class="float-right"><a href="#" class="text-dark"><small>Clear All</small></a> </span>Notification</h5>
                                </div>

                                <div class="slimscroll" style="max-height: 230px;">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon text-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon text-info"><i class="mdi mdi-account-plus"></i></div>
                                        <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon text-danger"><i class="mdi mdi-heart"></i></div>
                                        <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon text-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon text-purple"><i class="mdi mdi-account-plus"></i></div>
                                        <p class="notify-details">New user registered.<small class="text-muted">7 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon text-primary"><i class="mdi mdi-heart"></i></div>
                                        <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days ago</small></p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-dark notify-item notify-all">
                                    View all <i class="fi-arrow-right"></i>
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="noti-icon"><img src="assets/images/users/avatar-1.jpg" alt="user" class="img-fluid rounded-circle"></i>
                                <span class="profile-username ml-2 text-dark">{{ Auth::user()->name }} </span> <span class="mdi mdi-menu-down text-dark"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Bienvenido {{ Auth::user()->name }}</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-settings"></i> <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lock-open"></i> <span>Lock Screen</span>
                                </a>

                                <!-- item-->

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                                 <i class="mdi mdi-power"></i> <span>Salir</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href="#"><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Navigation</li>



                            <li>
                                <a href="javascript: void(0);"><i class="ion-md-basket"></i> <span> Administracion de Usuarios </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                      @can('roles.index')
                                    <li><a href="{{route('roles.index')}}">Cargo</a></li>
                                    @endcan
                                    @can('privilegios.index')
                                    <li><a href="{{route('privilegios.index')}}">Privilegio</a></li>

                                    @endcan
                                       @can('users.index')

                                    <li><a href="{{route('users.index')}}">Usuarios</a></li>
                                        @endcan
                                </ul>
                            </li>



                            <li>
                                <a href="javascript: void(0);"><i class="ion-md-basket"></i> <span> Movimiento de Cuentas </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{route('clientes.index')}}">Gestionar Cliente</a></li>
                                    <li><a href="{{route('cuentas.create')}}">Gestionar Cuenta</a></li>
                                    <li><a href="{{route('tipos.index')}}">Gestionar T Cuenta</a></li>
                                    <li><a href="{{route('tipo.index')}}">Gestionar T Cliente</a></li>
                                    <li><a href="{{route('monedas.index')}}">Gestionar Moneda</a></li>
                                </ul>
                            </li>



                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">



                 @yield('content')







                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 - 2018 © Velonic - Coderthemes.com
                </footer>

            </div>




            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/js/waves.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>

        <!-- Counter js  -->
        <script src="{{asset('plugins/waypoints/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('plugins/counterup/jquery.counterup.min.js')}}"></script>

        <!-- sparkline -->
        <script src="{{asset('plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- sweet alerts -->
        <script src="{{asset('plugins/sweet-alert2/sweetalert2.min.js')}}"></script>

        <!--Morris Chart-->
        <script src="{{asset('plugins/morris/morris.min.js')}}"></script>
        <script src="{{asset('plugins/raphael/raphael-min.js')}}"></script>

        <!-- Chat -->
        <script src="{{asset('plugins/moment/moment.js')}}"></script>
        <script src="{{asset('assets/pages/jquery.chat.js')}}"></script>

        <!-- Dashboard -->
        <script src="{{asset('assets/pages/jquery.dashboard.js')}}"></script>

        <!-- Todoapp -->
        <script src="{{asset('assets/pages/jquery.todo.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/jquery.core.js')}}"></script>
        <script src="{{asset('assets/js/jquery.app.js')}}"></script>

        <script>

            $(document).ready(function(){
                formulariopersona.style.display = 'none';
                formulariogrupo.style.display = 'none';
                formularioempresa.style.display = 'none';

            });

            function  clickpersona(){
                document.getElementById("grupo").checked = false;
                document.getElementById("empresa").checked = false;

                divNatural = document.getElementById('persona');
                if(divNatural.checked){

                    formulariopersona.style.display = '';
                    formulariogrupo.style.display = 'none';
                    formularioempresa.style.display = 'none';
                }
            }

            function  clickrgrupo(){
                document.getElementById("persona").checked = false;
                document.getElementById("empresa").checked = false;

                divNatural = document.getElementById('grupo');
                if(divNatural.checked){

                    formulariopersona.style.display = 'none';
                    formulariogrupo.style.display = '';
                    formularioempresa.style.display = 'none';
                }
            }

            function  clickempresa(){
                document.getElementById("persona").checked = false;
                document.getElementById("grupo").checked = false;

                divNatural = document.getElementById('empresa');
                if(divNatural.checked){

                    formulariopersona.style.display = 'none';
                    formulariogrupo.style.display = 'none';
                    formularioempresa.style.display = '';
                }
            }
        </script>

    <script src="{{asset('assets/pages/jquery.wizard-init.js')}}" type="text/javascript"></script>

    <script src="{{asset('plugins/jquery.steps/js/jquery.steps.min.js')}}" type="text/javascript"></script>

      <script src="{{asset('assets/pages/jquery.wizard-init.js')}}" type="text/javascript"></script>

 <script>
            $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
        </script>

        <script src="{{asset('assets/pages/jquery.datatables.editable.init.js')}}"></script>


        <script src="{{asset('plugins/custombox/js/custombox.min.js')}}"></script>
        <script src="{{asset('plugins/custombox/js/legacy.min.js')}}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
--

    </body>

<!-- Mirrored from coderthemes.com/velonic/admin_1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Sep 2018 21:59:04 GMT -->
</html>
