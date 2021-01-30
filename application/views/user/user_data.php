<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-cog"></i> Settiing User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= site_url('user') ?>" class="fas fa-user"></a></li>
                    <li class="breadcrumb-item active">Setting User</li>
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
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Data User</h2>
                    <h3 class="text-right"><a href="<?= site_url('user/add') ?>" class="btn btn-primary btn-sm"><i class="fa fa-user-plus"></i> Create</a>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example2">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Nama</th>
                                    <th>Address</th>
                                    <th>Level</th>
                                    <th><i class="fa fa-cog"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($row->result() as $key => $data) {
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $data->username ?></td>
                                        <td><?= $data->name ?></td>
                                        <td><?= $data->addres ?></td>
                                        <td><?= $data->level == 1 ? "Admin" : "Kasir" ?></td>
                                        <td width="15%">
                                            <form action="<?= site_url('user/del') ?>" method="post">
                                                <a href="<?= site_url('user/edit/' . $data->user_id) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a>
                                                <input type="hidden" name="user_id" value="<?= $data->user_id ?>">
                                                <button onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-xs"> <i class="fas fa-trash"></i>Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>