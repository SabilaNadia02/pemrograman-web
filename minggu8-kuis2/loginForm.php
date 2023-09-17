<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="style2.css"/>
        <link rel="stylesheet" type="text/css" href="style3.css"/>
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
                <h2>Selamat Datang, ADMIN!</h2>
                </p>
            </div>
            <div class="heroright">
                <img src="" alt="">
                <br><br><br><br><br>
            </div>
            <br><br>
            <?php
                if(isset($_GET["error"])){
                    $error = $_GET["error"];
                }
                else{
                    $error = "";
                }

                $message = "";
                if($error == "gagal"){
                    $message = "Gagal, silahkan coba kembali";
                }
            ?>
            <p style="color:red"><?php  echo $message;?></p>
            <form action="prosesLogin.php" method="post">
            <h1>Anda harus Login untuk masuk ke halaman CRUD</h1>
                <table>
                    <tr>
                        <th>Username </th>
                        <td><input type="text" name="username" size="20"></td>
                    </tr>
                    <tr>
                        <th>Password </th>
                        <td><input type="password" name="password" size="20"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="login" value="Login"></td>
                    </tr>
                </table>
            </form>
        </div>
        <!-- Hero -->
    </body>
</html>