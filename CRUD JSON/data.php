<?php 

session_start();
if(empty($_SESSION['username'])){
    header('location:login.php');
}

    $json_data = file_get_contents('anggota.json');
    $anggota = json_decode($json_data, true);

    $i= 1;
    $indeks = 0;


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
                <th>NIM</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($anggota as $ang) { ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $ang["nim"] ?></td>
                    <td><?= $ang["nama"] ?></td>
                    <td><?= $ang["jabatan"] ?></td>
                    <td><?= $ang["jurusan"] ?></td>
                    <td class="aksi">
                        <button class="edit">
                        <a href="edit.php?indeks=<?= $indeks ?>">Edit</a>
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