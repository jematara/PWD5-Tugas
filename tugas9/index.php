<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        .card {
            width: 900px;
            margin: 80px auto;
        }

        a {
            width: 100px;
            margin: 5px auto;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2 class="card-header">Index</h2>
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Barang</th>
                <th>Harga</th>
                <th>Waktu Beli</th>
                <th>Action</th>
            </tr>
            <?php
                require 'config.php';
                $rows=mysqli_query($conn, "SELECT * FROM pembeli");
                $i=1;
            ?>
            <?php foreach($rows as $row) : ?>
                <tr id=<?php echo $row["id"]; ?>>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row["nama_pembeli"]; ?></td>
                    <td><?php echo $row["barang"]; ?></td>
                    <td><?php echo $row["total_harga"]; ?></td>
                    <td><?php echo $row["waktu_beli"]; ?></td>
                    <td class="act"><a class="btn btn-primary" href="ubah.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <button type="button" onclick="submitData(<?php echo $row['id']; ?>)" class="btn btn-danger">Delete</button>
                </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <a href="tambah.php" class="btn btn-primary">Add User</a>
        <?php require 'script.php'; ?>
        <br>
    </div>
</body>
</html>