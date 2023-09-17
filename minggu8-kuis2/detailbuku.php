<!DOCTYPE html>
<html>
    <head>
        <title>Detail Buku</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" type="text/css" href="style2.css"/>
    </head>
    <body>
        <div class="wrapper">
        <h1>Detail Buku</h1>
        <table>
        <?php
                include "myconnection.php";
                $id_buku = $_GET['id'];
                $query = "SELECT * FROM buku WHERE id_buku='$id_buku'";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){    
        ?>
                    <tr>
                        <th>Kode Buku</th>
                        <td> <?php echo $row["id_buku"];?> </td>
                    </tr>
                    <tr>
                        <th> Judul </th>
                        <td> <?php echo $row["judul"];?> </td>
                    </tr>
                    <tr>
                        <th> Pengarang </th>
                        <td> <?php echo $row["pengarang"];?> </td>
                    </tr>
                    <tr>
                        <th> Penerbit </th>
                        <td> <?php echo $row["penerbit"];?> </td>
                    </tr>
                    <tr>
                        <th> Deskripsi </th>
                        <td> <?php echo $row["deskripsi"];?> </td>
                    </tr>
            <?php
                    }
                }
                else {
                    echo "0 results";
                }
            ?>
        </table>
        <br>
        <a href="home.php"><button>Kembali ke Halaman Utama</button></a>
        </div>
    </body>
</html>