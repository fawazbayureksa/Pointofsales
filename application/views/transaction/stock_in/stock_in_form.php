<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-shopping-cart"></i> Stock in</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item "><a href="dashboard" class="fa fa-tachometer-alt"> </a></li>
                    <li class="breadcrumb-item"><a href="<?= site_url('stock') ?>">Stock in</a></li>
                    <li class="breadcrumb-item active">Add Stock</li>
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
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Stock</h3>
                    <h3 class="text-right"><a href="<?= site_url('stock/in') ?>" class="btn btn-primary btn-sm"><i class="fa fa-undo"></i> Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="col-sm-6 offset-sm-4">
                        <form action="<?= site_url('stock/process') ?>" method="POST">
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" class="form-control" name="date" value="<?= date('Y-m-d') ?>" required>
                            </div>
                            <div>
                                <label for="barcode">Barcode</label>
                            </div>
                            <div class="form-group input-group">
                                <input type="hidden" id="item_id" name="item_id">
                                <input type="text" id="barcode" name="barcode" class="form-control" required autofocus>
                                <span class="input-group-btn">
                                    <Button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-lg">
                                        <i class="fa fa-search"></i>
                                    </Button>
                                </span>
                            </div>
                            <div class="form-group">
                                <label>Item Name</label>
                                <input type="text" class="form-control" name="item_name" id="item_name" value="" readonly>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="unit_name">Item Unit</label>
                                        <input type="text" name="unit_name" class="form-control" id="unit_name" readonly>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="stock">Initial Stock</label>
                                        <input type="text" name="stock" id="stock" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Detail</label>
                                <input type="text" class="form-control" name="detail" value="" placeholder="32 /64 / 250 / GB" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>Supplier</label>
                                <select name="supplier" id="" class="form-control">
                                    <option value="">-Pilih-</option>
                                    <?php foreach ($supplier as $i => $data) { ?>
                                        <option value="<?= $data->supplier_id ?>"><?= $data->name ?></option>


                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Qty</label>
                                <input type="number" class="form-control" name="qty" required>
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="in_add" class="btn btn-success"><i class="fas fa-paper-plane"></i>Submit</button>
                                <button type="submit" class="btn btn-default btn-flat">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Select Product Item</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered" id="example2" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Barcode</th>
                            <th>Name</th>
                            <th>Unit</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th><i class="fa fa-cog"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($item as $i => $data) { ?>
                            <tr>
                                <td><?= $data->barcode ?></td>
                                <td><?= $data->name ?></td>
                                <td><?= $data->unit_name ?></td>
                                <td> <?= indo_currency($data->price) ?></td>
                                <td><?= $data->stock ?></td>
                                <td>
                                    <button class="btn btn-info btn-sm" id="select" data-id="<?= $data->item_id ?>" data-barcode="<?= $data->barcode ?>" data-name="<?= $data->name ?>" data-unit="<?= $data->unit_name ?>" data-stock="<?= $data->stock ?>">
                                        <i class="fa fa-check"></i>select
                                    </button>
                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script>
    $(document).ready(function() {
        $(document).on('click', '#select', function() {
            var item_id = $(this).data('id');
            var barcode = $(this).data('barcode');
            var name = $(this).data('name');
            var unit_name = $(this).data('unit');
            var stock = $(this).data('stock');
            $('#item_id').val(item_id);
            $('#barcode').val(barcode);
            $('#item_name').val(name);
            $('#unit_name').val(unit_name);
            $('#stock').val(stock);
            $('#modal-lg').modal('hide');
        })
    })
</script>