<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QrCode Product <?= $row->barcode ?></title>
</head>
<body>
    <img src="uploads/qr-code/item-<?=$row->item_id?>.png" style="width:200px;">
    <br>
    <?= strtoupper($row->barcode) ?>
</body>
</html>