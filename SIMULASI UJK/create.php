<?php

$json_data = file_get_contents('tamu.json');

$tamu =  json_decode($json_data, true);

if(isset($_POST['submit'])){
    $waktuSekarang = date_default_timezone_set('Asia/Makassar');
    $waktuSekarang = date('Y-m-d H:i A');

   
    $data_baru = [
        "nm" => $_POST['nm'],
        "alamat" => $_POST['alamat'],
        "telp" => $_POST['telp'],
        "pilihan" => $_POST['pilihan'],
        "jk" => $_POST['jk'],
        "komentar" => $_POST['komentar'],
        "waktu" => $waktuSekarang,
    ];

    $tamu[] = $data_baru;

    $json_data_baru = json_encode($tamu, JSON_PRETTY_PRINT);
    file_put_contents('tamu.json',$json_data_baru);

    header('location:read.php');

};


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input data</title>
    <link rel="stylesheet" href="create.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
        <h1>BUKU TAMU</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="">Nama</label></td>
                    <td>:</td>
                    <td><input type="text" name="nm" width="200" classname="in" required></td>
                </tr>
                <tr>
                    <td><label for="">Alamat</label></td>
                    <td>:</td>
                    <td><input type="text" name="alamat" classname="in" required></td>
                </tr>
                <tr>
                    <td><label for="">No.Telp</label></td>
                    <td>:</td>
                    <td><input type="text" name="telp" classname="in" required></td>
                </tr>
                <tr>
                    <td><label for="">Pilihan Sebagai</label></td>
                    <td>:</td>
                    <td>
                        <select name="pilihan" id="" require>
                            <option value="umum">umum</option>
                            <option value="anggota">anggota</option>
                            <option value="tamu">tamu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="">Jenis Kelamin</label></td>
                    <td>:</td>
                    <td class="jk">
                        <input type="radio" name="jk" value="Laki-laki" classname="jk" required>
                        <label for="">Laki-laki</label>
                        <input type="radio" name="jk" value="Perempuan" classname="jk" required>
                        <label for="">Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td><label for="">Komentar</label></td>
                    <td>:</td>
                    <td><textarea name="komentar" id="" required></textarea></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <center>
                             <button type="submit" name="submit">submit</button>
                        </center>
                    
                   
                    
                </tr>
            </table>
        </form>
</body>
</html>