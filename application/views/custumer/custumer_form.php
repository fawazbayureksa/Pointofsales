<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-users"></i>custumer</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item "><a href="dashboard" class="fa fa-tachometer-alt"></a></li>
                    <li class="breadcrumb-item"><a href="<?= site_url('custumer') ?>">custumer</a></li>
                    <li class="breadcrumb-item active"><?= ucfirst($page) ?> custumer</li>
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
                    <h3 class="card-title"><?= ucfirst($page) ?> custumer</h3>
                    <h3 class="text-right"><a href="<?= site_url('custumer') ?>" class="btn btn-primary btn-sm"><i class="fa fa-undo"></i> Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('custumer/process') ?>" method="POST">
                        <div class="form-group">
                            <label>custumer</label>
                            <input type="hidden" name="id" value="<?= $row->custumer_id ?>">
                            <input type="text" class="form-control" name="custumer_name" value="<?= $row->name ?>" autocomplete="off" placeholder="custumer Name" required>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="jenis_kelamin" class="form-control" id="">
                                <option value="">--Choose--</option>
                                <option value="L" <?=$row->jenis_kelamin == 'L' ? 'selected' : null ?>>Laki-laki</option>
                                <option value="P" <?=$row->jenis_kelamin == 'P' ? 'selected' : null ?>>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="tel" class="form-control" name="phone" value="<?= $row->phone ?>" autocomplete="off" placeholder="Phone Number" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control" rows="5"><?= $row->address ?></textarea>
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