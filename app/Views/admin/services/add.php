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
    
        <div class="row">

            <div class="col-md-8 mx-auto">
            <?= $this->include('inc/_notification'); ?>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Services</h3>
                    </div>

                    
            <form action="<?= base_url('admin/addService'); ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
            <?= csrf_field() ?>
                        <div class="card-body">
                    <div class="row mb-3">
                    <div class="col-12">
                        <input type="text" class="form-control" placeholder="Service Title" name="title" required>
                    </div>
                    <!-- <div class="col-6">
                        <input type="text" class="form-control" placeholder=".col-4">
                    </div> -->
                   
                </div>

                <div class="form-group">
                    <div class="input-group">
                    <textarea id="summernote" class="form-control" name="description" required>
                Write <em> some</em> <u>content</u> <strong>here</strong>
                    </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="img" required>
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
                            <a href="<?=base_url('admin/services')?>"  class="btn btn-info">View services</a>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>
</section>

<?= $this->endSection() ?>