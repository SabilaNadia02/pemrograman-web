<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <h1>Hasil Pencarian DATA MAHASISWA</h1>
        <table>
            <tr>
                <th> ID </th>
                <th> Username </th>
                <th> Password </th>
                <th> Level </th>
            </tr>
            <?php
                $nama = $_GET["carinama"];
                include "myconnection.php";

                $query = "SELECT * FROM user WHERE username LIKE '%$nama%'";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){

                        ?>
                        <tr>
                        <td> <?php echo $row["id"];?> </td>
                            <td> <?php echo $row["username"];?> </td>
                            <td> <?php echo $row["password"];?> </td>
                            <td> <?php echo $row["level"];?> </td>
                            <td> 
                                <a href="editForm.php?id=<?php echo $row["id"];?>">
                                <button>Edit</button></a>
                            </td>
                            <td> 
                                <a href="delete.php?id=<?php echo $row["id"];?>">
                                <button>Hapus</button></a>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "0 results";
                }   
                        ?>
        </table>
        <a href="homeCRUD.php">Kembali ke Home</a>
    </body>
</html>