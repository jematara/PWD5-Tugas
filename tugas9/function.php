<?php
    require 'config.php';

    if(isset($_POST["action"])){
        if($_POST["action"]=="insert"){
            insert();
        }else if($_POST["action"]=="edit"){
            edit();
        }else{
            delete();
        }
    }

    function insert(){
        global $conn;

        $nama=$_POST["nama_pembeli"];
        $barang=$_POST['barang'];
        $harga=$_POST['total_harga'];

        $query="INSERT INTO pembeli VALUES('', '$nama', '$barang', '$harga', NOW())";
        mysqli_query($conn, $query);
        echo "Inserted Successfully";
    }

    function edit(){
        global $conn;

        $id=$_POST["id"];
        $nama=$_POST["nama_pembeli"];
        $barang=$_POST['barang'];
        $harga=$_POST['total_harga'];

        $query="UPDATE pembeli SET nama_pembeli='$nama', barang='$barang', total_harga='$harga', waktu_beli=NOW() WHERE id=$id";
        mysqli_query($conn, $query);
        echo "Updated Successfully";
    }

    function delete(){
        global $conn;

        $id=$_POST["action"];
        
        $query="DELETE FROM pembeli WHERE id=$id";
        mysqli_query($conn, $query);
        echo "Deleted Successfully";
    }
?>