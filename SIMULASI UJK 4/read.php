<?php

    $tamu = file_get_contents('data.json'); 
    $tamu = json_decode($tamu, true);

    $no=1;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
            background-color:#ddd;
        }

        .container {
            border-radius: 10px;
            width: 80%;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
        }
        h1{
            text-align: center;
        }
        a{
            text-decoration: none;
            margin: 10px;
            margin-top: 20px;
            
            
        }
        form table{
            width: 100%;
            border-collapse: collapse;
            border: 1px solid black;
            
        }
        tr td{
            padding: 10px;
            box-sizing: border-box;
        }
        th {
            background-color:gray;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <a href="create.php"><input type="button" value="TAMBAH DATA"></a>
        <a href="logout.php"><input type="button" value="LOGOUT"></a>
        <h1>DATA TAMU</h1>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. Telepon</th>
                <th>Pilihan</th>
                <th>Jenis Kelamin</th>
                <th>Komentar</th>
                <th>Waktu</th>
            </tr>

            <?php foreach($tamu as $t){ ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $t['nama'] ?></td>
                    <td><?= $t['alamat'] ?></td>
                    <td><?= $t['telp'] ?></td>
                    <td><?= $t['pilihan'] ?></td>
                    <td><?= $t['jk'] ?></td>
                    <td><?= $t['komentar'] ?></td>
                    <td><?= $t['waktu'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>