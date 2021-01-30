<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-shopping-cart"></i> Stock in </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item "><a href="dashboard" class="fa fa-tachometer-alt"> </a></li>
                    <li class="breadcrumb-item active">Stock in</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <?php $this->view('message') ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Stock Data
                    </div>
                    <h3 class="text-right"><a href="<?= site_url('stock/in/add') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Stock</a></h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example2">
                            <thead>
                                <tr>
                                    <th>Barcode</th>
                                    <th>Name</th>
                                    <th>Supplier</th>
                                    <th>Qty</th>
                                    <th>Date</th>
                                    <th>User</th>
                                    <th><i class="fa fa-cog"></i></th>

                            </thead>
                            </tr>
                            <tbody>
                                <?php foreach ($row as $key => $data) { ?>
                                    <tr>
                                        <td><?= $data->barcode ?></td>
                                        <td><?= $data->item_name ?></td>
                                        <td><?= $data->supplier_name ?></td>
                                        <td><?= $data->qty ?></td>
                                        <td><?= indo_date($data->date) ?></td>
                                        <td><?= $data->user_id ?></td>
                                        <td width="14%">

                                            <a href="" class="btn btn-success btn-xs" id="select" data-toggle="modal" data-target="#modal-default" data-barcode="<?= $data->barcode ?>" data-itemname="<?= $data->item_name ?>" data-detail="<?= $data->detail ?>" data-supplier="<?= $data->supplier_name ?>" data-qty="<?= $data->qty ?>" data-date="<?= indo_date($data->date) ?>">
                                                <i class=" fa fa-eye"></i>Detail</a>
                                            <a href="<?= site_url('stock/in/del/' . $data->stock_id . '/' . $data->item_id) ?>" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>Delete</a>

                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Stock in Detail</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body table-responsive">
                        <table class="table table-bordered no-margin" id="example2">

                            <tbody>
                                <tr>
                                    <th class="text-left">Bordered</th>
                                    <td><span id="barcode"></span></td

                                </tr>
                                <tr>
                                    <th class="text-left">Item name</th>
                                    <td><span id="item_name"></span></td>

                                </tr>
                                <tr>
                                    <th class="text-left">Detail</th>
                                    <td><span id="detail"></span></td>

                                </tr>
                                <tr>
                                    <th class="text-left">Supplier name</th>
                                    <td><span id="supplier_name"></span></td>

                                </tr>
                                <tr>
                                    <th class="text-left">Qty</th>
                                    <td><span id="qty"></span></td>

                                </tr>
                                <tr>
                                    <th class="text-left">Date</th>
                                    <td><span id="date"></span></td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
    <script>
        $(document).ready(function() {
            $(document).on('click', '#select', function() {
                var barcode = $(this).data('barcode');
                var itemname = $(this).data('itemname');
                var detail = $(this).data('detail');
                var suppliername = $(this).data('supplier');
                var qty = $(this).data('qty');
                var date = $(this).data('date');
                $('#barcode').text(barcode);
                $('#item_name').text(itemname);
                $('#supplier_name').text(suppliername);
                $('#qty').text(qty);
                $('#date').text(date);
                $('#detail').text(detail);
            })
        })
    </script>
</section>