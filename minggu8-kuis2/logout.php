<!DOCTYPE html>
<html>
    <head>
        <title>Logout</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" type="text/css" href="style2.css"/>
        <link rel="stylesheet" type="text/css" href="style4.css"/>
    </head>
    <body>
        <?php
            session_start();
            session_destroy();

            echo "<h1>Anda berhasil keluar</h1>";
        ?>
        <a href="home.php"><button>Kembali ke Halaman Utama</button></a>
    </body>
</html>