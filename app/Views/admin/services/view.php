<?= $this->extend('layout/adminLayout'); ?>

<?= $this->section('content') ?>

<div class="content-header">

    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    
<div class="container">
    <?php 
    if($services){ ?>

<div class="row">
  <?php 
  foreach($services as $service){
      
      ?>
  
  <div class="col-12 col-sm-8 col-md-4 col-lg-4">
      <div class="card">
        <img class="card-img" src="<?= base_url("uploads/service")?>/<?=$service['img']?>" alt="<?=$service['title']?>">
        <div class="card-img-overlay">
          <a href="#" class="btn btn-light btn-sm"><?=$service['title']?></a>
        </div>
        <div class="card-body">
          <h4 class="card-title"><?=$service['title']?></h4>
          <!-- <small class="text-muted cat">
            <i class="far fa-clock text-info"></i> 30 minutes
            
            <i class="fas fa-users text-info"></i> 4 portions
          </small> -->
          <p class="card-text text-truncate"><?= word_limiter(strip_tags($service['description']),50)?></p>
          <div class="btn-group" role="group" aria-label="service button">
                <!-- <button type="button" class="btn btn-secondary">Left</button> -->
                
                <a href="<?= base_url('admin/service/delete/'.$service['id']);?>"  class="btn btn-danger block">Delete</a>
                &nbsp;
                <a href="<?= base_url('admin/service/edit/'.$service['id']);?>"  class="btn btn-primary block">Edit</a>
                </div>
        </div>
        
      </div>
    </div>
  <?php } }else{?>
    <div class="card card-inverse-info col-12">
        <div class="card-body">
        <p class="mb-4">
            You currently have no active service
        </p>
        <a href="<?=base_url('admin/add')?>" class="btn btn-primary">Create Service</a>
        
        </div>
    </div>
  <?php } ?>
  </div>

</div>

</section>

<?= $this->endSection() ?>






<!-- card styles -->
<?=$this->section('styles')?>
<style>
body {
  padding: 2rem 0rem;
}

.card-img {
  border-bottom-left-radius: 0px;
  border-bottom-right-radius: 0px;
}

.card-title {
  margin-bottom: 0.3rem;
}

.cat {
  display: inline-block;
  margin-bottom: 1rem;
}

.fa-users {
  margin-left: 1rem;
}

.card-footer {
  font-size: 0.8rem;
}
</style>
<?=$this->endSection()?>