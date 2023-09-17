<?php
    include "myconnection.php";

    $id = $_POST["id"];
    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $query = "INSERT INTO user(id, username, password)
    VALUE('$id', '$username', '$password')";

    if(mysqli_query($connect, $query)){
        echo "Data baru berhasil ditambahakan";
    } else {
        echo "Data baru gagal ditambahakan <br>".mysqli_error($connect);
    }
    mysqli_close($connect);
?> 