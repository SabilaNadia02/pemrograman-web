<!DOCTYPE html>
<html>
    <head>
        <title>Pencarian Buku</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" type="text/css" href="style2.css"/>
    </head>
    <body>
        <div class="wrapper">
        <h1>Hasil Pencarian DATA BUKU</h1>
        <table>
        <tr>
                <th> Kode Buku </th>
                <th> Judul </th>
                <th> Pengarang </th>
                <th> Detail Buku </th>
            </tr>
            <?php
                $judul = $_GET["caribuku"];
                include "myconnection.php";

                $query = "SELECT * FROM buku WHERE judul LIKE '%$judul%'";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){

                        ?>
                        <tr>
                            <td> <?php echo $row["id_buku"];?> </td>
                            <td> <?php echo $row["judul"];?> </td>
                            <td> <?php echo $row["pengarang"];?> </td>
                            <td> 
                                <a href="detailbuku.php?id=<?php echo $row["id_buku"];?>">
                                <button>Detail</button></a>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "0 results";
                }   
                        ?>
        </table>
        <br>
        <a href="home.php"><button>Kembali ke Halaman Utama</button></a>
        </div>
        
    </body>
</html>