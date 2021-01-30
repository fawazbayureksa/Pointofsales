<style>
    td {
        text-align: center;
    }
</style>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fas fa-shopping-cart"></i> Sales</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item "><a href="dashboard" class="fa fa-tachometer-alt"> </a></li>
                    <li class="breadcrumb-item active">Sales</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-sm-4 col-6">
                <div class="card">
                    <div class="card-body bg-">
                        <form method="POST">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <Label>Date</Label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="date" id="date" value="<?= date('Y-m-d') ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <Label>Kasir</Label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" id="user" value="<?= $this->fungsi->user_login()->name ?>" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <Label>Custumer</Label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="" id="">
                                            <option value="">Umum</option>
                                            <?php
                                            foreach ($custumer as $cust => $value) { ?>
                                                <option value="<?= $value->custumer_id ?>"><?= $value->name ?></option>
                                            <?php }  ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- ./col -->
            <div class="col-sm-4 col-6">
                <div class="card">
                    <div class="card-body bg-">
                        <div class="row">
                            <form action="<?= site_url('sale/process') ?>" method="POST">
                                <div class="form-group input-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <Label for="barcode">Barcode</Label>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="hidden" name="item_id" id="item_id">
                                            <input type="hidden" name="price" id="price">
                                            <input type="hidden" name="stock" id="stock">
                                            <input type="text" id="barcode" name="" class="form-control" autofocus autocomplete="off">
                                        </div>
                                        <div>
                                            <span class="input-group-btn">
                                                <Button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-sm">
                                                    <i class="fa fa-search"></i>
                                                </Button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <Label>Qty</Label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="number" name="qty" id="qty" min="1" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4 offset-4">
                                            <button type="button" name="add_cart" id="add_cart" class="btn btn-primary btn-flat"><i class="fa fa-shopping-cart"></i> Add </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-6">
                <div class="card">
                    <div class="card-body bg-">
                        <div class="row">
                            <div class="col-sm-8 offset-4">
                                <h5>Invoice <b><span id="invoice"><?= $invoice ?></span></b></h5>
                            </div>
                        </div>
                        <div>
                            <div class="col-sm-2 offset-10">
                                <strong>
                                    <span id="grand_total2" style="font-size:4em;">0</span>
                                </strong>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Barcode</th>
                                    <th>Product name</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Discount item</th>
                                    <th>Total</th>
                                    <th> <i class="fa fa-cog"></i> </th>
                                </tr>
                            </thead>
                            <tbody id="cart_table">
                                <?php $this->view('transaction/sales/cart_data') ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 col-6">
                <div class="card">
                    <div class="card-body bg-">
                        <form method="POST">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <Label>Sub Total</Label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="number" id="sub_total" value="" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <Label>Discount</Label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" id="discount" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <Label>Grand Total</Label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="number" id="grand_total" value="" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-6">
                <div class="card">
                    <div class="card-body bg-">
                        <form method="POST">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <Label>Cash</Label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="number" id="cash" value="" min="0" class="form-control" value="0">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <Label>Change</Label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="number" id="change" value="" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-6">
                <div class="card">
                    <div class="card-body bg-">
                        <form method="POST">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <Label>Note</Label>
                                    </div>
                                    <div class="col-sm-10">
                                        <textarea name="note" id="note" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-6">
                <form method="POST">
                    <div class="form-group">
                        <button id="cancel_payment" class="btn btn-outline-warning btn-flat"><i class="fa fa-undo"></i> Cancel</button>
                        <br>
                        <br>
                        <button id="process_payment" class="btn btn-outline-success btn-flat"><i class="fa fa-paper-plane"></i> Process Payment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-sm">
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
                                    <td> <?= indo_currency($data->price) ?></td>
                                    <td><?= $data->stock ?></td>
                                    <td>
                                        <button class="btn btn-info btn-sm" id="select" data-id="<?= $data->item_id ?>" data-barcode="<?= $data->barcode ?>" data-price="<?= $data->price ?>" data-stock="<?= $data->stock ?>">
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

</section>
<script>
    $(document).on('click', '#select', function() {
        $('#item_id').val($(this).data('id'));
        $('#barcode').val($(this).data('barcode'));
        $('#price').val($(this).data('price'));
        $('#stock').val($(this).data('stock'));
        $('#modal-sm').modal('hide');
    })
    $(document).on('click', '#add_cart', function() {
        var item_id = $('#item_id').val()
        var price = $('#price').val()
        var stock = $('#stock').val()
        var qty = $('#qty').val()
        if (item_id == '') {
            alert('the item has not been selected')
            $('#barcode').focus()

        } else if (stock < 1) {
            alert('stock is not sufficient')
            $('#item_id').val('')
            $('#barcode').val('')
            $('#barcode').focus()

        } else {
            $.ajax({
                type: 'POST',
                url: '<?= site_url('sale/process') ?>',
                data: {
                    'add_cart': true,
                    'item_id': item_id,
                    'price': price,
                    'qty': qty
                },
                dataType: 'json',
                success: function(result) {
                    if (result.success == true) {
                        $('#cart_table').load('<?= site_url('sale/cart_data') ?>', function() {

                        })
                        $('#item_id').val('')
                        $('#barcode').val('')
                        $('#qty').val(1)
                        $('#barcode').focus()
                    } else {
                        alert('Failed to add item')
                    }
                }
            })
        }
    })

    $(document).on('click', '#del_cart', function() {
        if (confirm('Are You Sure')) {
            var cart_id = $(this).data('cartid')
            $.ajax({    
                type: 'POST',
                url: '<?= site_url('sale/del_cart') ?>',
                dataType : 'json',
                data: {
                    'cart_id': cart_id
                },
                success: function(result) {
                    if (result.success == true) {
                        $('#cart_table').load('<?= site_url('sale/cart_data') ?>', function() {
                        cal()
                        })
                    }else {
                        alert('failed delete item')
                    }
                }
            })
        }
    })



    function cal() {
        var subtotal = 0;
        $('#cart_table tr').each(function() {
            subtotal += parseInt($(this).find('#total').text())

        })
        isNaN(subtotal) ? $('#sub_total').val(0) : $('#sub_total').val(subtotal)

        var discount = $('#discount').val()
        var grand_total = subtotal - discount
        if (isNaN(grand_total)) {
            $('#grand_total').val(0)
            $('#grand_total2').text(0)

        } else {
            $('#grand_total').val(grand_total)
            $('#grand_total2').text(grand_total)
        }
        var cash = $('#cash').val();
        cash != 0 ? $('#change').val(cash - grand_total) : $('#change').val(0)
    }
    $(document).ready(function() {
        cal()
    })
</script>