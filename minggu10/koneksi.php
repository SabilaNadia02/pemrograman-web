<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";

    $connect = mysql_connect($hostname, $username, $password);

    if($connect){
        echo "Koneksi ke MySQL berhasil";
    } else {
        echo "Koneksi ke MySQL gagal";
    }
?>