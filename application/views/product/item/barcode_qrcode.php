<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fa fa-car"></i>Item Product</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item "><a href="dashboard" class="fa fa-tachometer-alt"> </a></li>
                    <li class="breadcrumb-item"><a href="<?= site_url('item') ?>"><i class="fas fa-car"></i>item</a></li>
                    <li class="breadcrumb-item active"></i>Generator Barcode</li>
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
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Barcode Generator</h2>
                    <h3 class="text-right"><a href="<?= site_url('item') ?>" class="btn btn-primary btn-sm"><i class="fa fa-undo"></i> Back</a>
                    </h3>
                </div>
                <div class="card-body text-center">
                    <?php
                    $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
                    echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($row->barcode, $generator::TYPE_CODE_128)) . '"style="width:200px";>'; ?>
                    <br>
                    <?= strtoupper($row->barcode) ?>
                    <br><br>
                    <a href="<?= site_url('item/barcode_print/' . $row->item_id) ?>" target="blank" class="btn btn-success btn-sm">
                        <i class="fas fa-print"></i>Print Barcode</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Qr-Code Generator</h5>
                </div>
                <div class="card-body text-center">
                    <?php
                    $qrCode = new Endroid\QrCode\QrCode($row->barcode);
                    $qrCode->writeFile('uploads/qr-code/item-' . $row->item_id . '.png');
                    ?>
                    <img src="<?= base_url('uploads/qr-code/item-' . $row->item_id . '.png') ?>" style="width:200px;">
                    <br>
                    <?= strtoupper($row->barcode) ?>
                    <br><br>
                    <a href="<?= site_url('item/qrcode_print/' . $row->item_id) ?>" target="blank" class="btn btn-success btn-sm">
                        <i class="fas fa-print"></i>Print QrCode</a>

                </div>
            </div>
        </div>
    </div>
</section>