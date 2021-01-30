<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-car"></i> category</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item "><a href="dashboard" class="fa fa-tachometer-alt"> </a></li>
                    <li class="breadcrumb-item"><a href="<?= site_url('category') ?>">category</a></li>
                    <li class="breadcrumb-item active"><?= ucfirst($page) ?> category</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- /.content-header -->
<?php

// print_r($row->result());

?>
<section class="content">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><?= ucfirst($page) ?> category</h3>
                    <h3 class="text-right"><a href="<?= site_url('category') ?>" class="btn btn-primary btn-sm"><i class="fa fa-undo"></i> Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('category/process') ?>" method="POST">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="hidden" name="id" value="<?= $row->category_id ?>">
                            <input type="text" class="form-control" name="store" value="<?= $row->name ?>" autocomplete="off" placeholder="Product name" required>
                        </div>

                </div>
                <div class="card-footer">
                    <button type="submit" name="<?= $page ?>" class="btn btn-success"><i class="fas fa-paper-plane"></i>Submit</button>
                    <button type="submit" class="btn btn-default btn-flat">Reset</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>