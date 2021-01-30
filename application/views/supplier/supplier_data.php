<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-car"></i> Supplier</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item "><a href="dashboard" class="fa fa-tachometer-alt"> </a></li>
                    <li class="breadcrumb-item active"><a href="<?= site_url('supplier') ?>"><i class="fas fa-car"></i>Supplier</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<?php
// print_r($row->result());
?>
<section class="content">
    <?php $this->view('message') ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Data Supplier</h2>
                    <h3 class="text-right"><a href="<?= site_url('supplier/add') ?>" class="btn btn-primary btn-sm"><i class="fa fa-user-plus"></i> Create</a>

                    </h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example2">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Store</th>
                                    <th>Number Phone</th>
                                    <th>Address</th>
                                    <th>Description</th>

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
                                        <td><?= $data->phone ?></td>
                                        <td><?= $data->address ?></td>
                                        <td><?= $data->description ?></td>
                                        <td>
                                            <form action="<?= site_url('supplier/del') ?>" method="post">
                                                <a href="<?= site_url('supplier/edit/' . $data->supplier_id) ?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>Edit</a>
                                                <input type="hidden" name="supplier_id" value="<?= $data->supplier_id ?>">
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