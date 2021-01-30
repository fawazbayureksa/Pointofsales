<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-car"></i>Item Product</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item "><a href="dashboard" class="fa fa-tachometer-alt"> </a></li>
                    <li class="breadcrumb-item active"><a href="<?= site_url('item') ?>"><i class="fas fa-car"></i>item</a></li>
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
                    <h2 class="card-title">Data items</h2>
                    <h3 class="text-right"><a href="<?= site_url('item/add') ?>" class="btn btn-primary btn-sm"><i class="fa fa-user-plus"></i> Create</a>

                    </h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="tableitem1" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Barcode</th>
                                    <th>Produk name</th>
                                    <th>Category</th>
                                    <th>Unit</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Image</th>
                                    <th><i class="fa fa-cog"></i></th>
                                </tr>
                            </thead>
                        </table>   
                    </div>
                </div>
            </div>
        </div>
</section>
<script>
    $(document).ready(function() {
        $('#tableitem1').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= site_url('item/get_ajax') ?>",
                "type":"post"
            }

        });
    });
</script>