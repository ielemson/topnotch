<?= $this->extend('layout/appLayout'); ?>


<!-- Styles -->
<?= $this->section('styles'); ?>
<?= $this->include('styles-scripts/general-styles'); ?>
<?= $this->endSection(); ?>
<!-- End Styles -->

<!-- Scripts -->
<?= $this->section('scripts'); ?>
<?= $this->include('styles-scripts/general-scripts'); ?>
<?= $this->endSection(); ?>
<!-- End Scripts -->

<?= $this->section('content'); ?>
<?= $this->include('inc/pageTitle'); ?>
<?= $this->include('inc/repairContent'); ?>
<?= $this->endSection(); ?>
<!-- End Slider -->


