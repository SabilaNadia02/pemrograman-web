<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <h1>DATA MAHASISWA</h1>
        <a href="insertForm.html"><button>Tambah Data</button></a><br><br>
        <table>
            <tr>
                <th> ID </th>
                <th> Nama </th>
                <th> Alamat </th>
                <th> Nama Foto </th>
                <th> Foto </th>
                <th> Aksi </th>
            </tr>
            <?php
                include "myconnection.php";

                $query = "SELECT * FROM student";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){    
            ?>
                        <tr>
                            <td> <?php echo $row["id"];?> </td>
                            <td> <?php echo $row["name"];?> </td>
                            <td> <?php echo $row["address"];?> </td>
                            <td> <?php echo $row["foto"];?> </td>
                            <td> <img src="<?php echo $row["foto"];?>" width=100> </td>
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
                }
                else {
                    echo "0 results";
                }
            ?>
        </table>
    </body>
</html>