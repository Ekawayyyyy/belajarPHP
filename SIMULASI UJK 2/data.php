<?php

$json_data = file_get_contents('data.json');

$data = json_decode($json_data, true);

$no = 1;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width: 100%;
            margin: auto;
            background-image: url('bag.png');
            background-size: cover;
            background-repeat: no-repeat;

        }
        h1{
            text-align: center;
        }
        .card{
            margin:auto;
            width: 70%;
            box-shadow: 0px 0px 10px black;
            padding: 20px;
            backdrop-filter: blur(0px);
            background-color: rgba(17, 25, 40, 0.30);
           

        }
        table{
            margin: auto;
            width: 90%;
            border-collapse: collapse;
            color: white;
        }
        th, td{
            border: 1px solid white;
            padding: 5px
        }
        tr{
            text-align: center;
        }
        a{
            margin: auto;
            
            
        }
    </style>
</head>
<body>
    <h1>DATA PENGUNJUNG</h1>
    <div class="card">
    <a href="input.php">Add</a>
    <table >
    
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>No Telp</th>
        </tr>
        <?php foreach ($data as $dt) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $dt['nama'] ?></td>
                <td><?= $dt['alamat'] ?></td>
                <td><?= $dt['jk'] ?></td>
                <td><?= $dt['tlp'] ?></td>
            </tr>
       <?php } ?>
    </table>
    </div>
    
</body>
</html>