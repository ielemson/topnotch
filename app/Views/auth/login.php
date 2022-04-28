<!DOCTYPE html>
<html
    lang="en">

    <!-- Added by HTTrack -->
    <meta
    http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin::Login</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

        <link rel="stylesheet" href="<?=base_url('admin_plugins/fontawesome-free/css/all.min.css')?>">

        <link rel="stylesheet" href="<?=base_url('admin_plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">

        <link rel="stylesheet" href="<?=base_url('dist/css/adminlte.min2167.css?v=3.2.0')?>">
   
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="">
                    <b>User</b> Login</a>
            </div>
            <?= $this->include('inc/_notification'); ?>
            <div class="card">

                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                    <form class="pt-3" action="<?= base_url('admin/login'); ?>" method="POST" accept-charset="UTF-8">
                    <?= csrf_field() ?>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" name="email" required> 
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                            <a href="<?=base_url('/')?>" type="submit" class="btn btn-primary btn-block">Go Back</a>
                            </div>

                            <div class="col-6">
                                <button type="submit" class="btn btn-success btn-block">Sign In</button>
                            </div>

                        </div>
                    </form>
                    <!-- <div class="social-auth-links text-center mb-3">
                        <p>- OR -</p>
                        <a href="#" class="btn btn-block btn-primary">
                            <i class="fab fa-facebook mr-2"></i>
                            Sign in using Facebook
                        </a>
                        <a href="#" class="btn btn-block btn-danger">
                            <i class="fab fa-google-plus mr-2"></i>
                            Sign in using Google+
                        </a>
                    </div> -->

                    <!-- <p class="mb-1">
                        <a href="forgot-password.html">I forgot my password</a>
                    </p>
                    <p class="mb-0">
                        <a href="register.html" class="text-center">Register a new membership</a>
                    </p> -->
                </div>

            </div>
        </div>


        <script src="<?=base_url('admin_plugins/jquery/jquery.min.js')?>"></script>

        <script src="<?=base_url('admin_plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

        <script src="<?=base_url('dist/js/adminlte.min2167.js?v=3.2.0')?>"></script>
    </body>

</html>
