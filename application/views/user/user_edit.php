<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-center"><i class="fa fa-user-plus"></i> Update User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= site_url('user') ?>" class="fas fa-user"></a></li>
                    <li class="breadcrumb-item"><a href="<?= site_url('user') ?>" class="fas fa-cog"></a></li>
                    <li class="breadcrumb-item active"><i class="fas fa-edit"></i>User</li>
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
                    <h3 class="card-title">Update Data User</h3>
                    <h3 class="text-right"><a href="<?= site_url('user') ?>" class="btn btn-primary btn-sm"><i class="fa fa-undo"></i> Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <?php //echo validation_errors()  <?= form_error('fullname') ? 'has-error' : null 
                    ?>
                    <form action="" method="POST">
                        <input type="hidden" name="user_id" value="<?=$row->user_id?>">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="fullname" value="<?= $this->input->post('fullname') ?? $row->name ?>" autocomplete="off" placeholder="Full Name">
                            <small style="color: red;"><i><?= form_error('fullname') ?></i></small>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" value="<?= $this->input->post('username') ?? $row->username ?>" autocomplete="off" placeholder="Username">
                            <small><i style="color:red;"><?= form_error('username') ?></i></small>
                        </div>
                        <div class="form-group">
                            <label>Password</label> <small style="color : red;">(let the empty if not be replaced)</small>
                            <input type="password" class="form-control" value="<?= $this->input->post('password') ?>" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Password Confirmation</label>
                            <input type="password" class="form-control" name="passconf" value="<?= $this->input->post('passconf') ?>" placeholder="Confirmation Password">
                            <small><i style="color:red;"><?= form_error('passconf') ?></i></small>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="addres" class="form-control" cols="20" rows="5"><?= $this->input->post('addres') ?? $row->addres ?></textarea>
                            <small><i style="color:red;"><?= form_error('addres') ?></i></small>
                        </div>
                        <div class="form-group">
                            <label for="">Level</label>
                            <select class="form-control" name="level" id="">
                                <?php  $level= $this->input->post('level') ?  $this->input->post('level') : $row->level ?>
                                <option value="1" >Admin </option>
                                <option value="2" <?= $level == 2 ? 'selected': null ?>>Kasir</option>
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