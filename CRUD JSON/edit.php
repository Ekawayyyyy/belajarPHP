<?php 
session_start();
if(empty($_SESSION['username'])){
    header('location:login.php');
}

$indeks = $_GET["indeks"];

//mengambil data json
$json_data = file_get_contents('anggota.json');

//konversi json ke array
$anggota = json_decode($json_data, true);

//update data yang sudah ada
if (isset($_POST["submit"])) {
    $data_update = [
        "nim"=>$_POST["nim"],
        "nama"=>$_POST["nama"],
        "jabatan"=>$_POST["jabatan"],
        "jurusan"=>$_POST["jurusan"]
    ];

    //simpan data
    $anggota[$indeks] = $data_update;

    //konversi kembali array to json
    $json_update = json_encode($anggota, JSON_PRETTY_PRINT);

    //simpan data
    file_put_contents('anggota.json', $json_update);

    //arahkan ke tampilan data
    header("location:data.php");
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Updatedata</title>
    <link rel="stylesheet" href="style/edit.css">
</head>
<body>


    <div class="container">
        
        <h2>UPDATE DATA</h2>
        <div class="button">
            <a href="logout.php" class="logout">logout</a>
            <a href="data.php" class="kembali">Kembali</a>
        </div>

        
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="">NIM</label></td>
                    <td>:</td>
                    <td><input type="text" name="nim" value="<?= $anggota[$indeks]["nim"]?>" required></td>
                </tr>
                <tr>
                    <td><label for="">Nama</label></td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="<?= $anggota[$indeks]["nama"]?>" required></td>
                </tr>
                <tr>
                    <td><label for="">Jabatan</label></td>
                    <td>:</td>
                    <td><input type="text" name="jabatan" value="<?= $anggota[$indeks]["jabatan"]?>" required></td>
                </tr>
                <tr>
                    <td><label for="">Jurusan</label></td>
                    <td>:</td>
                    <td><input type="text" name="jurusan" value="<?= $anggota[$indeks]["jurusan"]?>" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="submit">simpan</button></td>
                </tr>
            </table>
            
        </form>
    
    </div>

    
</body>
</html>