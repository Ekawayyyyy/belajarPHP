<?php

    $json_data = file_get_contents('data.json');

    $data = json_decode($json_data, true);

    if (isset($_POST['submit'])) {
        $data_baru =[
            'nama'=> $_POST['nama'],
            'email'=> $_POST['email'],
        ];

        $data[] = $data_baru;

        $data_json_baru = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents('data.json', $data_json_baru);
        header('location:read.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skenario Tugas 2</title>
    <link rel="stylesheet" href="style/create.css">
    
</head>
<body>
    <div class="container">\

        <div class="navbar">
            <a href="create.php">Form Input</a>
            <a href="read.php">Data Tamu</a>
        </div>

        <div class="content">
            <h3>FORM INPUT DATA TAMU</h3>
            <center>
                <form action="" method="post">
                    <table >
                        <tr>
                            <td><label for="nama">Nama</label></td>
                            <td><input type="text" name="nama" Required></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email</label></td>
                            <td><input type="text" name="email" Required></td>
                        </tr>
                        <tr>
                            <td collspan="1"><button type="submit" name="submit">Simpan</button></td>
                        </tr>
                    </table>
                </form>
            </center>
        </div>
    </div>
</body>
</html>