<?php 
    $json_data = file_get_contents('mahasiswa.json');
    $mahasiswa = json_decode($json_data, true);

    $i= 1;
    $indeks = 0;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
           padding: 10px;
        }
    </style>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <a href="creat.php"><input type="submit" value="Tambah Data"></a><br><br>

    <table border="1" >
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($mahasiswa as $mhs) { ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $mhs["nim"] ?></td>
                <td><?= $mhs["nama"] ?></td>
                <td><?= $mhs["alamat"] ?></td>
                <td><?= $mhs["jurusan"] ?></td>
                <td>
                    <a href="update.php?indeks=<?= $indeks ?>"><input type="submit" value="Edit"></a>
                    <a href="delete.php?indeks=<?= $indeks++ ?>"><input type="submit" value="Delete"></a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>