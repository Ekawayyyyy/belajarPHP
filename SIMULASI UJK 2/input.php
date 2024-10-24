<?php

$json_data = file_get_contents('data.json');

$data =  json_decode($json_data, true);

if(isset($_POST['submit'])){
    $data_baru = [
        "nama" => $_POST['nama'],
        "alamat" => $_POST['alamat'],
        "tlp" => $_POST['tlp'],
        "jk" => $_POST['jk'],

    ];

    $data[] = $data_baru;

    $json_data_baru = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('data.json',$json_data_baru);

    header('location:data.php');

};


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <form action="" method="post">

            <h2>Form Data Pengunjung</h2>
            <table border="1">
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td><label for="nama">Alamat</label></td>
                    <td>:</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td><label for="nama">No Telepon</label></td>
                    <td>:</td>
                    <td><input type="text" name="tlp"></td>
                </tr>
                <tr>
                    <td><label for="jk">Jenis Kelamin</label></td>
                    <td>:</td>
                    <td>
                        <input type="radio" name= "jk" value="Laki-Laki">Laki-Laki</input>
                        <input type="radio" name= "jk" value="Perempuan">Perempuan</input>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="submit">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
    
</body>
</html>