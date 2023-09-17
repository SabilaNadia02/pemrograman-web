<?php
    include "myconnection.php";

    $user = $_POST["username"];
    $pass = md5($_POST["password"]);
    
    $query = "SELECT * FROM admin WHERE username='$user' && password='$pass'";
    $result = mysqli_query($connect, $query);
    $check = mysqli_num_rows($result);
    
    if($check>0){
        session_start();
        $_SESSION["username"] = $user;
        $_SESSION["role"] = "Admin";
        header("Location:homeCRUD.php");
    }else{
        header("Location:loginForm.php?error=gagal");
    }
    mysqli_close($connect);
?>