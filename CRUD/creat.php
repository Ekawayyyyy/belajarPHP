<?php 
    //mengambil data json
    $json_data =file_get_contents("mahasiswa.json");

    //konversi json ke array
    $mahasiswa = json_decode($json_data, true);


    //tambahkan data ketika submit di klik
    if (isset($_POST["submit"])) {
        $data_baru = [
            "nim"=>$_POST["nim"],
            "nama"=>$_POST["nama"],
            "alamat"=>$_POST["alamat"],
            "jurusan"=>$_POST["jurusan"]
        ];

           //menambahkan data baru
        $mahasiswa[] = $data_baru;

        //konversi kembali array to json
        $json_data_baru = json_encode($mahasiswa, JSON_PRETTY_PRINT);

        //simpan data
        file_put_contents("mahasiswa.json",$json_data_baru);

        //arahkan ke read
        header("location:read.php");
    }

 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        form input{
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>form registrasi mahasiswa</h2>
    <a href="read.php"><input type="submit" value="Lihat Data"></a><br><br>
    <form action="" method="post">
        <input type="text" name="nim" placeholder="masukkan nim" required><br>
        <input type="text" name="nama" placeholder="masukkan nama" required><br>
        <input type="text" name="alamat" placeholder="masukkan alamat" required><br>
        <input type="text" name="jurusan" placeholder="masukkan jurusan" required><br><br>
        <input type="submit" name="submit" value="simpan">
    </form>
</body>
</html>