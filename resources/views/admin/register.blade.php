<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Register | Moltran - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('admin_assets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{asset('admin_assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{asset('admin_assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin_assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet" />

    </head>

    <body class="authentication-page">

        <div class="account-pages my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">
                            <div class="card-header bg-img p-5 position-relative">
                                <div class="bg-overlay"></div>
                                <h4 class="text-white text-center mb-0">Create a new Account</h4>
                            </div>
                            <div class="card-body p-4 mt-2">
                                <form action="#" class="p-3">

                                    <div class="form-group mb-3">
                                        <input class="form-control" type="email" required="" placeholder="Email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <input class="form-control" type="email" required="" placeholder="Username">
                                    </div>

                                    <div class="form-group mb-3">
                                        <input class="form-control" type="password" required="" placeholder="Password">
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox checkbox-primary">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                            <label class="custom-control-label" for="checkbox-signin">I accept <a href="#">Terms and Conditions</a></label>
                                        </div>
                                    </div>

                                    <div class="form-group text-center mt-5 mb-4">
                                        <button class="btn btn-primary waves-effect width-md waves-light" type="submit"> Register </button>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-sm-12 text-center">
                                            <a href="pages-login.html">Already have account?</a>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <!-- end row -->

                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
        </div>

        <!-- Vendor js -->
        <script src="{{asset('admin_assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('admin_assets/js/app.min.js')}}"></script>

    </body>

</html>