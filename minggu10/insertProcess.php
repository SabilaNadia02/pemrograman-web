<?php
    include "myconnection.php";

    $name = $_POST["myname"];
    $address = $_POST["myaddress"];

    $target_path="gambar/";

    $target_path=$target_path . basename(
        $_FILES['myphoto']['name']);

        if(move_uploaded_file($_FILES['myphoto']['tmp_name'],$target_path)){
            
        }else{
            echo "Terdapat kesalahan dalam mengunggah foto, coba lagi";
        }

    $query = "INSERT INTO student(name, address, foto)
    VALUE('$name', '$address', '$target_path')";

    if(mysqli_query($connect, $query)){
        echo "Data baru berhasil ditambahakan";
    } else {
        echo "Data baru gagal ditambahakan <br>".mysqli_error($connect);
    }
    mysqli_close($connect);
?> 