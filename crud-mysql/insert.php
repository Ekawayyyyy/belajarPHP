<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "belajar_web";
    
    $koneksi = mysqli_connect($host, $user, $pass, $database);

    if (isset($_POST['submit'])) {
       
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $gaji = $_POST['gaji'];
        $tgl_masuk = $_POST['tgl_masuk'];
        
        $koneksi->query("INSERT INTO karyawan VALUES ('','$nama','$jabatan','$gaji','$tgl_masuk')");

        header("location:view.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="insert.php" method="post">
        <table align="center">
           
            <tr>
                <td>NAMA</td>
                <td>  <input type="text" name="nama" placeholder="masukkan nama" required></td>
            </tr>

            <tr>
                <td>JABATAN</td>
                <td>  <input type="text" name="jabatan" placeholder="masukkan jabatan" required></td>
            </tr>

            <tr>
                <td>GAJI</td>
                <td>  <input type="number" name="gaji" placeholder="masukkan gaji" required></td>
            </tr>
            <tr>
                <td>TANGGAL MASUK</td>
                <td>  <input type="date" name="tgl_masuk" required></td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="simpan">
                    <input type="reset" name="reset" value="reset">
                </td>
                
            </tr>

         
        </table>
         
          
        </form>
</body>
</html>