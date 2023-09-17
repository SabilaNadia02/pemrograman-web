<!DOCTYPE html>
<html>
    <head>
        <title>Total Transaksi</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Secular+One&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Patrick+Hand&family=Secular+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="transaksi.css">
    </head>
    <body class="tampil">
    <div class="header">
            <div class="wrapper">
                <div class="logo">
                    <h1>Nadia Kulinari</h1>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="restaurant.html">Home</a></li>
                        <li><a href="transaksi.html">Transaksi</a></li>
                        <li><a href="tambahFoto.html">Tambah Foto</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <h1>Total Transaksi</h1>
            <?php
                if(isset($_POST['nama']) AND isset($_POST['status']) AND isset($_POST['menu']) AND isset($_POST['jumlah'])){
                    $nama=$_POST['nama'];
                    $status=$_POST['status'];
                    $menu=$_POST['menu'];
                    $jumlah=$_POST['jumlah']; 
                    $jumlahTransaksi="";
                    $jumlahDiskon="";
                    $total="";
                }

                if($status == "Member") {
                    if($menu == "paket1") {
                        if($jumlah == 1) {
                            $diskon = 0.05 * 20000;
                            $harga = 20000 - $diskon; 
                            $jumlahTransaksi = 20000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else if($jumlah == 2 || $jumlah == 3) {
                            $diskon = 0.07 * 20000;
                            $harga = 20000 - $diskon; 
                            $jumlahTransaksi = 20000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }else if($jumlah > 3) {
                            $diskon = 0.1 * 20000;
                            $harga = 20000 - $diskon; 
                            $jumlahTransaksi = 20000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }
                    }else if($menu == "paket2") {
                        if($jumlah == 1) {
                            $diskon = 0.05 * 30000;
                            $harga = 30000 - $diskon; 
                            $jumlahTransaksi = 30000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else if($jumlah == 2 || $jumlah == 3) {
                            $diskon = 0.07 * 30000;
                            $harga = 30000 - $diskon; 
                            $jumlahTransaksi = 30000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }else if($jumlah > 3) {
                            $diskon = 0.1 * 30000;
                            $harga = 30000 - $diskon; 
                            $jumlahTransaksi = 30000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }
                    }else if($menu == "paket3") {
                        if($jumlah == 1) {
                            $diskon = 0.05 * 50000;
                            $harga = 50000 - $diskon; 
                            $jumlahTransaksi = 50000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else if($jumlah == 2 || $jumlah == 3) {
                            $diskon = 0.07 * 50000;
                            $harga = 50000 - $diskon; 
                            $jumlahTransaksi = 50000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }else if($jumlah > 3) {
                            $diskon = 0.1 * 50000;
                            $harga = 50000 - $diskon; 
                            $jumlahTransaksi = 50000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }
                    }
                }else {
                    if($menu == "paket1") {
                        if($jumlah > 6 && $jumlah < 10) {
                            $jumlahTransaksi = 20000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0.05;
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else if($jumlah > 10) {
                            $jumlahTransaksi = 20000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0.07;
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else {
                            $jumlahTransaksi = 20000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0;
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }
                    }else if($menu == "paket2") {
                        if($jumlah > 6 && $jumlah < 10) {
                            $jumlahTransaksi = 30000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0.05;
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else if($jumlah > 10) {
                            $jumlahTransaksi = 30000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0.07;
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else {
                            $jumlahTransaksi = 30000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0;
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }
                    }else if($menu == "paket3") {
                        if($jumlah > 6 && $jumlah < 10) {
                            $jumlahTransaksi = 50000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0.05;
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else if($jumlah > 10) {
                            $jumlahTransaksi = 50000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0.07;
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else {
                            $jumlahTransaksi = 50000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0;
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }
                    }
                }

                //menampilkan total pesanan 
                echo "Nama Pembeli        : " .$nama;
                echo "<br>";
                echo "Status Pembeli      : " .$status;
                echo "<br>";
                echo "Total Harga         : " .$jumlahTransaksi;
                echo "<br>";
                echo "Total Diskon        : " .$jumlahDiskon;
                echo "<br><br>";
                echo "Yang harus Anda bayarkan " .$total;
            ?>
    </body>
</html>