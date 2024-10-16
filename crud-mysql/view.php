<?php

// session_start();
// //kondisi yang mengecek apakah username telah terisi ato login atau belum
// if(empty($_SESSION['username'])){
//     header('location:login.php');
// }

$host = "localhost";
$user = "root";
$pass = "";
$database = "belajar_web";

$koneksi = mysqli_connect($host, $user, $pass, $database);

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

$data = $koneksi->query("SELECT * FROM karyawan");
$karyawan = $data->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" width="50%" align="center">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Gaji</th>
            <th>Tunjangan</th>
            <th>Total Gaji</th>
            <th>Tanggal Masuk</th>
        </tr>

        <?php foreach ($karyawan as $k) : ?>
            <tr>
                <td><?= $k['id'] ?></td>
                <td><?= $k['nama'] ?></td>
                <td><?= $k['jabatan'] ?></td>
                <td><?= "Rp. ".number_format($k['gaji'],0,',','.')?></td>
                <td><?= "Rp. ".number_format($k['gaji']*1.2,0,',','.')?></td>
                <td><?= "Rp. ".number_format(($k['gaji']*1.2)+$k['gaji'],0,',','.')?></td>
                
                <td><?= $k['tgl_masuk'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>