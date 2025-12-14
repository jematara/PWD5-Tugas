<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    </script>
    <style>
        .card {
            width: 250px;
            margin: 80px auto;
        }

        a {
            width: 200px;
            margin: 5px auto;
        }

        .card-box {
            margin: 10px auto;
        }

        input,
        button {
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2 class="card-header">Edit User</h2>
        <div class="card-box">
            <form autocomplete="off" action="" method="post">
                <?php
                require 'config.php';
                $id = $_GET["id"];
                $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM pembeli WHERE id=$id"));
                ?>
                <input type="hidden" id="id" value="<?php echo $rows['id']; ?>">
                <input type="text" id="nama" name="nama_pembeli" placeholder="Nama" required value="<?php echo $rows['nama_pembeli']; ?>"><br>
                <input type="text"" id="barang" name="barang" placeholder="Barang" required value="<?php echo $rows['barang']; ?>"><br>
                <input type="number"" id="harga" name="total_harga" placeholder="Harga" required value="<?php echo $rows['total_harga']; ?>"><br>
                <button type="button" onclick="submitData('edit');" class="btn btn-primary">Edit</button>
            </form>
            <a href="index.php" class="btn btn-primary">Go to Index</a>
            <?php require 'script.php'; ?>
            <br>
        </div>
    </div>
</body>

</html>