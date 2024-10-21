<?php 
  session_start();
  if(empty($_SESSION['username'])){
      header('location:login.php');
  }

include "koneksi.php";

  $id = $_GET['id'];

  $data = $koneksi->query("SELECT * FROM karyawan WHERE id ='$id'" );

  $dt = mysqli_fetch_assoc($data);

  if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $gaji = $_POST['gaji'];
        $tgl_masuk = $_POST['tgl_masuk'];
        
        $koneksi->query("UPDATE karyawan SET nama='$nama', jabatan='$jabatan', gaji='$gaji', tgl_masuk='$tgl_masuk' WHERE id='$id' ");

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
    <title>Updatedata</title>
    <link rel="stylesheet" href="style/edit.css">
</head>
<body>


    <div class="container">
        
        <h2>UPDATE DATA</h2>
        <div class="button">
            <a href="logout.php" class="logout">logout</a>
            <a href="data.php" class="kembali">Kembali</a>
        </div>

        
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="">Nama</label></td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="<?= $dt["nama"]?>" required></td>
                </tr>
                <tr>
                    <td><label for="">Jabatan</label></td>
                    <td>:</td>
                    <td><input type="text" name="jabatan" value="<?= $dt["jabatan"]?>" required></td>
                </tr>
                <tr>
                    <td><label for="">Gaji</label></td>
                    <td>:</td>
                    <td><input type="text" name="gaji" value="<?= $dt["gaji"]?>" required></td>
                </tr>
                <tr>
                    <td><label for="">Tanggal Masuk</label></td>
                    <td>:</td>
                    <td><input type="text" name="tgl_masuk" value="<?= $dt["tgl_masuk"]?>" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>2
                    <td><button type="submit" name="submit">simpan</button></td>
                </tr>
            </table>
            
        </form>
    
    </div>

    
</body>
</html>