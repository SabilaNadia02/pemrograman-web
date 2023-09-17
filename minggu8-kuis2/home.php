<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style2.css"/>
    </head>
    <body>

        <!-- Header -->
        <div class="header">
            <div class="wrapper">
                <div class="logo">
                    <h1>Nadia Katalog</h1>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="loginForm.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Header -->

        <!-- Hero -->
        <div class="wrapper">
            <div class="heroleft">
                <h2>Selamat Datang, Pecinta Buku!</h2>
                </p>
            </div>
            <div class="heroright">
                <img src="" alt="">
                <br><br><br><br><br>
            </div>
            <br><br>
            <h1>Lagi cari buku apa?</h1>
            <form action="search.php" method="get">
                Cari buku berdasarkan judul: 
                <input type="text" name="caribuku">
                <input type="submit" value="Cari">
            </form>
            <br><br><br><br><br><br><br><br><br><br><br>
            <table>
                <tr>
                    <th> Kode Buku </th>
                    <th> Judul </th>
                    <th> Pengarang </th>
                    <th> Detail Buku </th>
                </tr>
                <?php
                    include "myconnection.php";

                    $query = "SELECT * FROM buku";
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
                    }
                    else {
                        echo "0 results";
                    }
                ?>
            </table>
        </div>
        <!-- Hero -->

        <!-- FOOTER -->
        <div class="wrapper">
            <h3 class="footer">Terima Kasih</h3>
        </div>
        <!-- FOOTER -->
    </body>
</html>