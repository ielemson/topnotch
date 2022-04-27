<?= $this->extend('layout/appLayout'); ?>

<!-- Styles -->
<?= $this->section('styles'); ?>
<?= $this->include('styles-scripts/home-styles'); ?>
<?= $this->endSection(); ?>
<!-- End Styles -->


<!-- Scripts -->
<?= $this->section('scripts'); ?>
<?= $this->include('styles-scripts/home-scripts'); ?>
<?= $this->endSection(); ?>
<!-- End Scripts -->


<!-- SLIDER -->
<?= $this->section('slider'); ?>
<?= $this->include('inc/slider'); ?>
<?= $this->endSection(); ?>
<!-- End Slider -->


<!-- SLIDER -->
<?= $this->section('content'); ?>
<?= $this->include('inc/homeContent'); ?>
<?= $this->endSection(); ?>
<!-- End Slider -->


