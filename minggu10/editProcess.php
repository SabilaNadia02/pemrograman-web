<?php
    include "myconnection.php";

    $id = $_POST["myid"];
    $name = $_POST["myname"];
    $address = $_POST["myaddress"];
    $foto = $_POST["myphoto"];

    $target_path="gambar/";

    $target_path=$target_path . basename(
        $_FILES['myphoto']['name']);

        if(move_uploaded_file($_FILES['myphoto']['tmp_name'],$target_path)){
            
        }else{
            echo "Terdapat kesalahan dalam mengunggah foto, coba lagi";
        }

    $query = "UPDATE student SET name='$name', address='$address', foto='$target_path' WHERE id=$id";

    if(mysqli_query($connect, $query)){
        header('Location:homeCRUD.php');
    } else {
        echo "Gagal mengubah data <br>".mysqli_error($connect);
    }
    mysqli_close($connect);
?> 