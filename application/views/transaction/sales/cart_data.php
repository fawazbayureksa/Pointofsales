<?php
$no = 1;
if ($cart->num_rows() > 0) {
    foreach ($cart->result() as $c => $data) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data->barcode ?></td>
            <td><?= $data->item_name ?></td>
            <td><?= indo_currency($data->cart_price) ?></td>
            <td><?= $data->qty ?></td>
            <td><?= indo_currency($data->discount_item) ?></td>
            <td id="total"><?= indo_currency($data->total) ?></td>
            <td width="15%">
                <!-- <button type="button" id="update_cart" data-toggle="modal" data-target="#modal-item-edit" data-cartid="<?= $data->cart_id ?>" data-barcode="<?= $data->barcode ?>" data-product="<?= $data->item_name ?>" data-price="<?= $data->cart_price ?>" data-qty="<?= $data->qty ?>" data-discount="<?= $data->discount_item ?>" data-total="<?= $data->total ?>" class="btn btn-info btn-sm">
                    <i class="fa fa-edit"></i>Update
                </button> -->
                <button id="del_cart" data-cartid="<?= $data->cart_id ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Delete</button>
            </td>
        </tr>
<?php
    }
} else {
    echo '<tr>
     <td colspan="8" class="text-center">Belum ada item yang di pilih </td>
     </tr>';
} ?>