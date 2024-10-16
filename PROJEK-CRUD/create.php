<?php 
    session_start();
    if(empty($_SESSION['username'])){
        header('location:login.php');
    }
    //mengambil data json
    $json_data =file_get_contents("anggota.json");

    //konversi json ke array
    $anggota = json_decode($json_data, true);


    //tambahkan data ketika submit di klik
    if (isset($_POST["submit"])) {
        $data_baru = [
            "nim"=>$_POST["nim"],
            "nama"=>$_POST["nama"],
            "jabatan"=>$_POST["jabatan"],
            "jurusan"=>$_POST["jurusan"]
        ];

           //menambahkan data baru
        $anggota[] = $data_baru;

        //konversi kembali array to json
        $json_data_baru = json_encode($anggota, JSON_PRETTY_PRINT);

        //simpan data
        file_put_contents("anggota.json",$json_data_baru);

        //arahkan ke data
        header("location:data.php");
    }

 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style/create.css">
</head>
<body>
    <div class="container"> 
        <h2>form registrasi mahasiswa</h2>

        <div class="button">
            <a href="logout.php" class="logout">logout</a>
            <a href="data.php" class="lihat">lihat data</a>
        </div>
                       
        <form action="" method="post">
            <input type="text" name="nim" placeholder="masukkan nim" required><br>
            <input type="text" name="nama" placeholder="masukkan nama" required><br>
            <input type="text" name="jabatan" placeholder="masukkan jabatan" required><br>
            <input type="text" name="jurusan" placeholder="masukkan jurusan" required><br><br><br>
            <button type="submit" name="submit">simpan</button>
        </form>
    </div>
   
</body>
</html>