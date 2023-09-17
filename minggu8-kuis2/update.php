<!DOCTYPE html>
<html>
    <head>
        <title>PHP MySQL</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" type="text/css" href="style2.css"/>
        <link rel="stylesheet" type="text/css" href="style4.css"/>
    </head>
    <body>
        <h1>Perbarui Data Buku</h1>
        <?php
            include "myconnection.php";
            $id_buku = $_GET['id'];
            $query = "SELECT * FROM buku WHERE id_buku='$id_buku'";
            $result = mysqli_query($connect,$query);
        ?>
        <form action="updateproses.php" method="post" enctype="multipart/form-data">
            <table>
                <?php
                    while($row=mysqli_fetch_array($result)){
                ?> 
                <tr>
                    <td> Kode Buku </td>
                    <td> <input type="text" name="id_book" value="<?php echo $row['id_buku'];?>" readonly> </td>
                </tr>
                <tr>
                    <td> Judul </td>
                    <td><input type="text" name="title" value="<?php echo $row['judul'];?>"> </td>
                </tr>
                <tr>
                    <td> Pengarang </td>
                    <td><input type="text" name="author" value="<?php echo $row['pengarang'];?>"> </td>
                </tr>
                <tr>
                    <td> Penerbit </td>
                    <td><input type="text" name="publishing" value="<?php echo $row['penerbit'];?>"> </td>
                </tr>
                <td> Deskripsi </td>
                <td>
                    <textarea name="desc" cols="50" rows="20">
                        <?php echo $row['deskripsi'];?>
                    </textarea>
                </td>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <input type="submit" name="save" value="Update">
                    </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </form>
    </body>
</html>