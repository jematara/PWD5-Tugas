<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/person-gear.svg" type="image/x-icon">
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script 
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    </script>
</head>
<body>
    <div class="container">
        <h2>Edit User</h2>
        <form autocomplete="off" action="" method="post">
            <?php
                require 'config.php';
                $id=$_GET["id"];
                $rows=mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id=$id"));
            ?>
            <input type="hidden" id="id" value="<?php echo $rows['id']; ?>">
            <input type="text" id="name" placeholder="Full Name" required value="<?php echo $rows['name']; ?>"><br>
            <input type="email"" id="email" placeholder="E-Mail" required value="<?php echo $rows['email']; ?>"><br>
            <div class="gender">
                <label for="">Gender</label><br>
                <div class="sel">
                    <select id="gender">
                        <option value="Male" <?php if($rows["gender"]=="Male") echo "selected"; ?>>Male</option>
                        <option value="Female" <?php if($rows["gender"]=="Female") echo "selected"; ?>>Female</option>
                    </select><br>
                </div>
            </div>
            <button type="button" onclick="submitData('edit');">Edit</button>
        </form>
        <br>
        <a href="index.php">Go to Index</a>
        <?php require 'script.php'; ?>
    </div>
</body>
</html>