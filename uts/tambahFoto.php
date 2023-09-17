<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambahkan Foto</title>
</head>
<body>
<?php
    $target_path="uploads/";

    $target_path=$target_path . basename(
        $_FILES['uploadedfoto']['name']);

        if(move_uploaded_file($_FILES['uploadedfoto']['tmp_name'],$target_path)){
            echo "Foto Anda " . basename($_FILES['uploadedfoto']['name'])." berhasil di unggah.";
        }else{
            echo "Terdapat kesalahn, coba lagi";
        }
?>
</body>
</html>