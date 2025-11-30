<?php
require_once "pembeli.php";

$pb = new Pembeli();

$table = "pembeli";
$row = $pb->tampilData($table);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pembeli</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<h1>Data Pembeli Kasir Online</h1>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Pembeli</th>
            <th>Barang</th>
            <th>Total Harga</th>
            <th>Waktu Beli</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($row as $data) { ?>
        <tr>
            <td><?= $data['id']; ?></td>
            <td><?= $data['nama_pembeli']; ?></td>
            <td><?= $data['barang']; ?></td>
            <td><?= number_format($data['total_harga']); ?></td>
            <td><?= $data['waktu_beli']; ?></td>
        </tr>
    <?php } ?>
    </tbody>

</table>

</body>
</html>