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

        <link rel="stylesheet" href="admin_plugins/fontawesome-free/css/all.min.css">

        <link rel="stylesheet" href="admin_plugins/icheck-bootstrap/icheck-bootstrap.min.css">

        <link rel="stylesheet" href="../../dist/css/adminlte.min2167.css?v=3.2.0">
   
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="">
                    <b>User</b> Registration</a>
            </div>
            <?= $this->include('inc/_notification'); ?>
            <div class="card">

                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                    <form action="<?= base_url('create-account'); ?>" method="POST" accept-charset="UTF-8" >
                    <?= csrf_field() ?>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Full name" name="fname">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Retype password" name="password_confirm">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                            <button type="submit" class="btn btn-success btn-block">Login</button>
                            </div>

                            <div class="col-4">
                                <a href="<?=base_url('/')?>" type="submit" class="btn btn-warning btn-block">Home</a>
                            </div>

                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>


        <script src="admin_plugins/jquery/jquery.min.js"></script>

        <script src="admin_plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="../../dist/js/adminlte.min2167.js?v=3.2.0"></script>
    </body>

</html>
