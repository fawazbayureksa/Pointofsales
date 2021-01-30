<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-center"><i class="fa fa-user-plus"></i> Add User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= site_url('user') ?>">User</a></li>
                    <li class="breadcrumb-item"><a href="">Setting User</a></li>
                    <li class="breadcrumb-item active">Add User</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
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
                    <h3 class="card-title">Create Data User</h3>
                    <h3 class="text-right"><a href="<?= site_url('user') ?>" class="btn btn-primary btn-sm"><i class="fa fa-undo"></i> Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <?php //echo validation_errors()  <?= form_error('fullname') ? 'has-error' : null 
                    ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="fullname" value="<?= set_value('fullname') ?>" autocomplete="off" placeholder="Full Name">
                            <small style="color: red;"><i><?= form_error('fullname') ?></i></small>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" value="<?= set_value('username') ?>" autocomplete="off" placeholder="Username">
                            <small><i style="color:red;"><?= form_error('username') ?></i></small>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" value="<?= set_value('password') ?>" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Password Confirmation</label>
                            <input type="password" class="form-control" name="passconf" value="<?= set_value('passconf') ?>" placeholder="Confirmation Password">
                            <small><i style="color:red;"><?= form_error('passconf') ?></i></small>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="addres" class="form-control" cols="20" rows="5"><?= set_value('addres') ?></textarea>
                            <small><i style="color:red;"><?= form_error('addres') ?></i></small>
                        </div>
                        <div class="form-group">
                            <label for="">Level</label>
                            <select class="form-control" name="level" id="">
                                <option value="">--Pilih--</option>
                                <option value="1" <?= set_value('level') == 1 ? "selected" : null ?>>Admin </option>
                                <option value="2" <?= set_value('level') == 2 ? "selected" : null ?>>Kasir</option>
                            </select>
                            <small><i style="color:red;"><?= form_error('level') ?></i></small>
                        </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Submit</button>
                    <button type="submit" class="btn btn-default btn-flat">Reset</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>