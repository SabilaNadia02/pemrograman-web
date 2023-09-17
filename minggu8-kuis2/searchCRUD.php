<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
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
                    <th> Deskripsi </th>
                    <th> Edit </th>
                    <th> Hapus </th>
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
                                        <a href="detailbukuCRUD.php?id=<?php echo $row["id_buku"];?>">
                                        <button>Read</button></a>
                                </td>
                                <td> 
                                    <a href="update.php?id=<?php echo $row["id_buku"];?>">
                                    <button>Update</button></a>
                                </td>
                                <td> 
                                    <a href="delete.php?id=<?php echo $row["id_buku"];?>">
                                    <button>Delete</button></a>
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
            <a href="homeCRUD.php"><button>Kembali ke Halaman CRUD</button></a>
        </div>
    </body>
</html>