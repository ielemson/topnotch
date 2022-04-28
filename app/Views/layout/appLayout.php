<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title><?=$title ?? 'Home :: Industry Limited';?></title>
<!-- Stylesheets -->
<?= $this->renderSection('styles'); ?>
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

   
    <?= $this->include('inc/header')?>
    <!-- End Main Header -->

    <!--Main Slider-->
      <!-- ========================= SECTION SLIDER  ========================= -->
      <?= $this->renderSection('slider'); ?>
    <!-- ========================= SECTION SLIDER END// ========================= -->
    <!--End Main Slider-->
	
        <!-- ========================= SECTION SLIDER  ========================= -->
        <?= $this->renderSection('content'); ?>
    <!-- ========================= SECTION SLIDER END// ========================= -->
	<!--Main Footer-->
    <?= $this->include('inc/footer')?>
</div>  
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<!--Scroll to top-->

<?= $this->renderSection('scripts'); ?>
</body>
</html>