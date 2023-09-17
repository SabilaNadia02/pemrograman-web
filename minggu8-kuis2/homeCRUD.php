<!DOCTYPE html>
<?php
    session_start();
?>
<html>
    <head>
        <title>Home CRUD</title>
        <link rel="stylesheet" type="text/css" href="style2.css"/>
    </head>
    <body>
        <!-- Header -->
        <div class="header">
            <div class="wrapper">
                <div class="logo">
                    <h1>Nadia Katalog</h1>
                </div>
            </div>
        </div>
        <!-- Header -->
        <div class="wrapper">
            <div class="heroleft">
            <h2>
            <?php
            if(isset($_SESSION["username"])){
                $nama = strtoupper($_SESSION["username"]);
                echo '<h2>Selamat Datang ' . $nama . '<br></h2>';
                echo "<h1>Anda masuk sebagai ". $_SESSION["role"] . "<br></h1>";
                echo "<br><br>";
        ?>
            </h2>
            </p>
            </div>
            <div class="heroright">
                <img src="" alt="">
                <br><br><br><br><br><br><br><br>
            </div>
            <form action="searchCRUD.php" method="get">
                    <p class="x">Cari Buku berdasarkan judul: </p>
                    <input type="text" name="caribuku">
                    <input type="submit" value="Cari">
            </form>
            <br><br><br>
            Menambahkan Data Buku Baru: 
            <a href="tambahBuku.html"><button>CREATE (Tambah Buku)</button></a><br><br>
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
                        }
                        else {
                            echo "0 results";
                        }
                    ?>
                </table> 
                <br><br>  
                <a href="logout.php"><button>Logout</button></a>
        <?php        
            }
            else{
                echo "<h1>Maaf Anda harus Login terlebih dahulu untuk mengakses halaman CRUD";
                echo '<a href="loginForm.php"><button>Login</button></a>';
            }
        ?>
        </div>
    </body>
</html>