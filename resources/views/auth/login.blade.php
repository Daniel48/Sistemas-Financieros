<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/velonic/admin_1/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Sep 2018 22:03:15 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Velonic - Responsive Bootstrap 4 Admin Dashboard Template</title>
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.css" rel="stylesheet" type="text/css" />
        <!-- your custom css -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="pb-0">

            <div class="wrapper-page">
                <div class="account-pages">
                    <div class="account-box">
                        <div class="account-logo-box bg-primary p-4">
                            <h3 class="m-0 text-center text-white">Scrum</h3>
                        </div>
                        <div class="account-content">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group  mb-4 row">
                                    <div class="col-12">
                                        <label for="emailaddress">Email:</label>
                                        <input class="form-control" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <div class="col-12">
                                        <label for="password">Contraseña:</label>
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif


                                    </div>
                                </div>


                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Iniciar Session</button>
                                    </div>
                                </div>

                            </form>


                        </div>
                    </div>
                </div>
                <!-- end account-box-->


            </div>




        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/velonic/admin_1/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Sep 2018 22:03:15 GMT -->
</html>
