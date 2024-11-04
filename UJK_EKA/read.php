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
    <title>Tampilkan Data Tamu</title>
    <link rel="stylesheet" href="style/read.css">
</head>
<body>
    <div class="container">

        <div class="navbar">
            <a href="create.php">Form Input</a>
            <a href="read.php">Data Tamu</a>
        </div>

        <div class="content">
            <h3>DATA TAMU</h3>
            <center>
                <table>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>EMAIL</th>
                    </tr>
                    <?php foreach($data as $dt){ ?>
                        <tr>
                            <td class="no"><?= $no++ ?></td>
                            <td><?= $dt['nama'] ?></td>
                            <td><?= $dt['email'] ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </center>
        </div>
    </div>
</body>
</html>