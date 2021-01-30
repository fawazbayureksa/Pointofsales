<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-car"></i> item</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item "><a href="dashboard" class="fa fa-tachometer-alt"> </a></li>
                    <li class="breadcrumb-item"><a href="<?= site_url('item') ?>">item</a></li>
                    <li class="breadcrumb-item active"><?= ucfirst($page) ?> item</li>
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
    <?php $this->view('message') ?>
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><?= ucfirst($page) ?> Item</h3>
                    <h3 class="text-right"><a href="<?= site_url('item') ?>" class="btn btn-primary btn-sm"><i class="fa fa-undo"></i> Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <?php echo form_open_multipart('item/process') ?>
                    <div class="form-group">
                        <label>Barcode</label>
                        <input type="hidden" name="id" value="<?= $row->item_id ?>">
                        <input type="text" class="form-control" name="barcode" value="<?= $row->barcode ?>" autocomplete="off" placeholder="Barcode" required>
                    </div>
                    <div class="form-group">
                        <label for="product_name">Name</label>
                        <input type="hidden" name="name" value="<?= $row->name ?>">
                        <input type="text" class="form-control" name="product_name" value="<?= $row->name ?>" autocomplete="off" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                        <select name="category" class="form-control" id="">
                            <option value="">--Choise--</option>
                            <?php foreach ($category->result() as $key => $data) { ?>
                                <option value="<?= $data->category_id ?>" <?= $data->category_id == $row->category_id ? "selected" : null ?>><?= $data->name ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Unit</label>
                        <?php echo form_dropdown('unit', $unit, $selectedunit, ['class' => 'form-control', 'required' => 'required']); ?>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control" name="price" value="<?= $row->price ?>" autocomplete="off" placeholder="Price" required>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <?php if ($page == 'edit') { ?>
                            <?php if ($row->image != null) { ?>
                                <div>
                                    <img src="<?= base_url('uploads/product/' . $row->image) ?>" style="width: 100px">
                                </div>
                        <?php }
                        } ?>
                        <input type="file" class="form-control" name="image">
                        <small style="color :red">!Biarkan kosong jika tidak <?= $page == 'edit' ? 'diganti' : 'ada' ?></small>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="<?= $page ?>" class="btn btn-success"><i class="fas fa-paper-plane"></i>Submit</button>
                    <button type="submit" class="btn btn-default btn-flat">Reset</button>
                </div>
                <?php form_close() ?>
            </div>
        </div>
    </div>
</section>