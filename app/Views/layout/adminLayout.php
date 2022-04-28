<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Mar 2022 04:28:49 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Dashboard</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="<?=base_url("admin_plugins/fontawesome-free/css/all.min.css")?>">

    <link rel="stylesheet" href="<?=base_url('dist/css/code.ionic.min.css')?>">

    <link rel="stylesheet" href="<?=base_url('admin_plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')?>">

    <link rel="stylesheet" href="<?=base_url('admin_plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">

    <link rel="stylesheet" href="<?=base_url('admin_plugins/jqvmap/jqvmap.min.css')?>">

    <link rel="stylesheet" href="<?=base_url('dist/css/adminlte.min2167.css?v=3.2.0')?>">

    <link rel="stylesheet" href="<?=base_url('admin_plugins/overlayScrollbars/css/OverlayScrollbars.min.css')?>">

    <link rel="stylesheet" href="<?=base_url('admin_plugins/daterangepicker/daterangepicker.css')?>">

    <link rel="stylesheet" href="<?=base_url('admin_plugins/summernote/summernote-bs4.min.css')?>">
   <?=$this->renderSection('styles')?>
   
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?=base_url('images/admin.png')?>" alt="AdminLTELogo" height="60" width="60">
        </div>

      

        <?= $this->include('admin/inc/navbar')?>
        <?= $this->include('admin/inc/aside')?>
       

        <div class="content-wrapper">

           <?=$this->renderSection('content')?>

        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; <?=date('Y')?> <a href="<?=base_url('/')?>">Admin TopNotch</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>


    <script src="<?=base_url('admin_plugins/jquery/jquery.min.js')?>"></script>

    <script src="<?=base_url('admin_plugins/jquery-ui/jquery-ui.min.js')?>"></script>

    <!-- <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script> -->

    <script src="<?=base_url('admin_plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <script src="<?=base_url('admin_plugins/moment/moment.min.js')?>"></script>
    <script src="<?=base_url('admin_plugins/daterangepicker/daterangepicker.js')?>"></script>

    <script src="<?=base_url('admin_plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')?>"></script>

    <script src="<?=base_url('admin_plugins/summernote/summernote-bs4.min.js')?>"></script>

    <script src="<?=base_url('admin_plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')?>"></script>

    <script src="<?=base_url('dist/js/adminlte2167.js?v=3.2.0')?>"></script>
    <script src="<?=base_url('admin_plugins/bs-custom-file-input/bs-custom-file-input.min.js')?>"></script>
    <!-- <script src="dist/js/demo.js"></script> -->

    <!-- <script src="<?=base_url('dist/js/pages/dashboard.js')?>"></script> -->

    <script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    // CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
    //   mode: "htmlmixed",
    //   theme: "monokai"
    // });
  });

  $(function () {
                bsCustomFileInput.init();
            });
</script>


</body>


</html>