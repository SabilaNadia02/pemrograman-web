<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Laporan</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1 align="center">DATA MAHASISWA</h1>
        <br>
        <table>
            <tr>
                <th> ID </th>
                <th> Username </th>
                <th> Password </th>
                <th> Level </th>
            </tr>
            <?php  
                include "myconnection.php";

                $query = "SELECT * FROM user";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){

            ?>
                        <tr>
                        <td> <?php echo $row["id"];?> </td>
                            <td> <?php echo $row["username"];?> </td>
                            <td> <?php echo $row["password"];?> </td>
                            <td> <?php echo $row["level"];?> </td>
                        </tr>
                        <?php
                    }
                }    
                        ?>
        </table>
        <script>
            window.print();
        </script>
    </body>
</html>