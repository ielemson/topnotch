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
    <div class="container-fluid">
    <?= $this->include('inc/_notification'); ?>
        <div class="row">

            <div class="col-md-8 mx-auto">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Services</h3>
                    </div>

                    
            <form action="<?= base_url('admin/service/update/'.$service['id']); ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
            <?= csrf_field() ?>
                        <div class="card-body">
                    <div class="row mb-3">
                    <div class="col-12">
                        <input type="text" class="form-control" placeholder="Service Title" name="title" value="<?= $service['title'] ?>">
                    </div>
                    <!-- <div class="col-6">
                        <input type="text" class="form-control" placeholder=".col-4">
                    </div> -->
                   
                </div>

                <div class="form-group">
                    <div class="input-group">
                    <textarea id="summernote" class="form-control" name="description">
                    <?= $service['description'] ?>
                    </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="img" accept=".png, .jpg, .jpeg">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card shadow">
                <img src="<?= base_url("uploads/service")?>/<?=$service['img']?>" class="card-img-top" alt="<?=$service['title']?>" style="width:100%">
                
            </div>
        </div>
        </div>

    </div>
</section>

<?= $this->endSection() ?>