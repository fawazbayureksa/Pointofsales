<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-users"></i> custumer</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item "><a href="dashboard" class="fa fa-tachometer-alt"> </a></li>
                    <li class="breadcrumb-item active"><a href="<?= site_url('custumer') ?>"><i class="fas fa-car"></i>custumer</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<?php
// print_r($row->result());
?>
<section class="content">
    <?php $this->view('message')?>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Data custumer</h2>
                    <h3 class="text-right"><a href="<?= site_url('custumer/add') ?>" class="btn btn-primary btn-sm"><i class="fa fa-user-plus"></i> Create</a>

                    </h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example2">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>custumer</th>
                                    <th>Gender</th>
                                    <th>Number Phone</th>
                                    <th>Address</th>

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
                                        <td><?= $data->name ?></td>
                                        <td><?= $data->jenis_kelamin ?></td>
                                        <td><?= $data->phone ?></td>
                                        <td><?= $data->address ?></td>
                                        <td width="15%">
                                            <form action="<?= site_url('custumer/del') ?>" method="post">
                                                <a href="<?= site_url('custumer/edit/' . $data->custumer_id) ?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>Edit</a>
                                                <input type="hidden" name="custumer_id" value="<?= $data->custumer_id ?>">
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