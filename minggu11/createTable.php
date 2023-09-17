<?php
    include "myconnection.php";

    $query = "CREATE TABLE user (
        id INT PRIMARY KEY,
        username VARCHAR(20),
        password VARCHAR(50))";

    if(mysqli_query($connect,$query)){
        echo "Tabel user berhasil dibuat";
    } else {
        echo "Tabel user gagal dibuat <br>".mysqli_error($connect);
    }
    mysqli_close($connect);
?>