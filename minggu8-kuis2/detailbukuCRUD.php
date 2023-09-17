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
                            <td>Kode Buku</td>
                            <td> <?php echo $row["id_buku"];?> </td>
                        </tr>
                        <tr>
                            <td> Judul </td>
                            <td> <?php echo $row["judul"];?> </td>
                        </tr>
                        <tr>
                            <td> Pengarang </td>
                            <td> <?php echo $row["pengarang"];?> </td>
                        </tr>
                        <tr>
                            <td> Penerbit </td>
                            <td> <?php echo $row["penerbit"];?> </td>
                        </tr>
                        <tr>
                            <td> Deskripsi </td>
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
                <a href="homeCRUD.php"><button>Kembali ke Halaman CRUD</button></a>
        </div>
    </body>
</html>