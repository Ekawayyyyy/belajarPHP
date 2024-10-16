<?php 

session_start();
if(empty($_SESSION['username'])){
    header('location:login.php');
}

$host = "localhost";
$user = "root";
$pass = "";
$database = "belajar_web";

$koneksi = mysqli_connect($host, $user, $pass, $database);

if (mysqli_connect_error()) {
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
    <link rel="stylesheet" href="style/data.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Data Anggota</title>

</head>
<body>
    <div class="container">
        
        <h2>Data Anggota GenBI</h2>
        <div class="button">
            <a href="logout.php" class="logout">logout</a>
            <a href="create.php" class="tambah">Add New</a>
        </div>
                   
        <table >
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Gaji</th>
            <th>Tunjangan</th>
            <th>Total Gaji</th>
            <th>Tanggal Masuk</th>
            <th>Aksi</th>
        </tr>
            <?php foreach ($karyawan as $k) { ?>
                <tr>
                <td><?= $k['id'] ?></td>
                <td><?= $k['nama'] ?></td>
                <td><?= $k['jabatan'] ?></td>
                <td><?= "Rp. ".number_format($k['gaji'],0,',','.')?></td>
                <td><?= "Rp. ".number_format($k['gaji']*1.2,0,',','.')?></td>
                <td><?= "Rp. ".number_format(($k['gaji']*1.2)+$k['gaji'],0,',','.')?></td>
                <td><?= $k['tgl_masuk'] ?></td>
                    <td class="aksi">
                        <button class="edit">
                        <a href="edit.php?id=<?=$k['id']?>">Edit</a>
                        </button>
                       
                        <button class="delete">
                            <a href="delete.php?indeks=<?= $indeks++ ?>">Delete</a>
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </table><br><br>

    </div>


</body>
</html>