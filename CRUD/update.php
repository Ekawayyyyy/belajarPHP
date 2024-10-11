<?php 

$indeks = $_GET["indeks"];

//mengambil data json
$json_data = file_get_contents('mahasiswa.json');

//konversi json ke array
$mahasiswa = json_decode($json_data, true);

//update data yang sudah ada
if (isset($_POST["submit"])) {
    $data_update = [
        "nim"=>$_POST["nim"],
        "nama"=>$_POST["nama"],
        "alamat"=>$_POST["alamat"],
        "jurusan"=>$_POST["jurusan"]
    ];

    //simpan data
    $mahasiswa[$indeks] = $data_update;

    //konversi kembali array to json
    $json_update = json_encode($mahasiswa, JSON_PRETTY_PRINT);

    //simpan data
    file_put_contents('mahasiswa.json', $json_update);

    //arahkan ke read
    header("location:read.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udate data</title>
    <style>
        form input{
            padding: 10px;
        }
    </style>
</head>
<body>

<h2>UPDATE DATA</h2>

    <form action="" method="post">
    
    <input type="text" name="nim" value="<?= $mahasiswa[$indeks]["nim"]?>" required><br>
        <input type="text" name="nama" value="<?= $mahasiswa[$indeks]["nama"]?>" required><br>
        <input type="text" name="alamat" value="<?= $mahasiswa[$indeks]["alamat"]?>" required><br>
        <input type="text" name="jurusan" value="<?= $mahasiswa[$indeks]["jurusan"]?>" required><br>
        <input type="submit" name="submit" value="update">
    </form>
    
</body>
</html>