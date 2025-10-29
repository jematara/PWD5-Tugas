<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Index</title>
    <link rel="icon" href="images/person.svg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container1">
        <h2>Index</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-Mail</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
            <?php
                require 'config.php';
                $rows=mysqli_query($conn, "SELECT * FROM users");
                $i=1;
            ?>
            <?php foreach($rows as $row) : ?>
                <tr id=<?php echo $row["id"]; ?>>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["gender"]; ?></td>
                    <td class="act"><a class="edit" href="edituser.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <button type="button" onclick="submitData(<?php echo $row['id']; ?>)">Delete</button>
                </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>
        <a href="adduser.php">Add User</a>
        <?php require 'script.php'; ?>
    </div>
</body>
</html>