<!DOCTYPE html>
<html>
    <head>
        <title>Proses Menambahkan Buku</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" type="text/css" href="style2.css"/>
        <link rel="stylesheet" type="text/css" href="style4.css"/>
    </head>
    <body>
        <?php
            include "myconnection.php";

            $id_buku = $_POST["id_buku"];
            $judul = $_POST["judul"];
            $pengarang = $_POST["pengarang"];
            $penerbit = $_POST["penerbit"];
            $deskripsi = $_POST["deskripsi"];

            $query = "INSERT INTO buku(id_buku, judul, pengarang, penerbit, deskripsi)
            VALUE('$id_buku', '$judul', '$pengarang', '$penerbit', '$deskripsi')";

            if(mysqli_query($connect, $query)){
                echo "<h2>Data buku baru berhasil ditambahakan</h2>";
            } else {
                echo "Data buku baru gagal ditambahakan <br>".mysqli_error($connect);
            }
            mysqli_close($connect);
        ?> 
        <a href="homeCRUD.php"><button>Kembali ke Halaman CRUD</button></a>
    </body>
</html>