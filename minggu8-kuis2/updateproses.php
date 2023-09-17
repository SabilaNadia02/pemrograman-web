<!DOCTYPE html>
<html>
    <head>
        <title>Update Buku</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" type="text/css" href="style2.css"/>
        <link rel="stylesheet" type="text/css" href="style4.css"/>
    </head>
    <body>
        <?php
            include "myconnection.php";

            $id_buku = $_POST["id_book"];
            $judul = $_POST["title"];
            $pengarang = $_POST["author"];
            $penerbit = $_POST["publishing"];
            $deskripsi = $_POST["desc"];

            $query = "UPDATE buku SET id_buku='$id_buku', judul='$judul', pengarang='$pengarang', penerbit='$penerbit', deskripsi='$deskripsi' WHERE id_buku='$id_buku'";

            if(mysqli_query($connect, $query)){
                echo "<h2>Data buku telah diperbarui</h2>";
                echo '<a href="homeCRUD.php"><button>Kembali ke Halaman CRUD</button></a>';
            } else {
                echo "Gagal mengubah data <br>".mysqli_error($connect);
            }
            mysqli_close($connect);
        ?> 
    </body>
</html>