<?php 
    session_start();
    if(empty($_SESSION['username'])){
        header('location:login.php');
    }
    include "koneksi.php";

    if (isset($_POST['submit'])) {
       
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $gaji = $_POST['gaji'];
        $tgl_masuk = $_POST['tgl_masuk'];
        
        $koneksi->query("INSERT INTO karyawan VALUES ('','$nama','$jabatan','$gaji','$tgl_masuk')");

        header("location:data.php");
    }
 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style/create.css">
</head>
<body>
    <div class="container"> 
        <h2>form registrasi mahasiswa</h2>

        <div class="button">
            <a href="logout.php" class="logout">logout</a>
            <a href="data.php" class="lihat">lihat data</a>
        </div>
                       
        <form action="" method="post">
            <input type="text" name="nama" placeholder="masukkan nama" required><br>
            <input type="text" name="jabatan" placeholder="masukkan jabatan" required><br>
            <input type="number" name="gaji" placeholder="masukkan gaji" required><br>
            <input type="date" name="tgl_masuk" required><br><br>
            <!-- <input type="submit" name="submit value="Simpan"> -->
            <center>
                 <button type="submit" name="submit"><b>Simpan</b></button>
            </center>
        </form>
        <br>
    </div>
   
</body>
</html>