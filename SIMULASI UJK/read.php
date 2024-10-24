<?php

$json_data = file_get_contents('tamu.json');

$tamu =  json_decode($json_data, true);

$i = 1;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilkan data</title>
    <link rel="stylesheet" href="read.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <h1>DATA TAMU</h1>
    <div class="content">
        <button>
            <a href="create.php">Add</a>
        </button>
        <button>
            <a href="logout.php">Logout</a>
        </button>
       
        <table border="1">
            <tr>
                <th>No</th> 
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. Telp</th>
                <th>Pilhan Sebagai</th>
                <th>Jenis Kelamin</th>
                <th>Komentar</th>
                <th>Tanggal & Jam Masuk</th>
            </tr>
            <?php foreach ($tamu as $tm) { ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $tm["nm"] ?></td>
                    <td><?= $tm["alamat"] ?></td>
                    <td><?= $tm["telp"] ?></td>
                    <td><?= $tm["pilihan"] ?></td>
                    <td><?= $tm["jk"] ?></td>
                    <td><?= $tm["komentar"] ?></td>
                    <td><?= $tm["waktu"] ?></td>
                    
                </tr>
           <?php } ?>
                
        </table>
        
    </div>
</body>
</html>