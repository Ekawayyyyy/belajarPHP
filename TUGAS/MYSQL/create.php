<?php 
    session_start();
    if(empty($_SESSION['username'])){
        header('location:login.php');
    }
    //mengambil data json
    include "koneksi.php";

    if (isset($_POST['submit'])) {
       
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        
        $koneksi->query("INSERT INTO tb_barang VALUES ('','$nama','$harga','$stok')");

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
    <style>
        *{
            margin: auto;
            font-family: 'Poppins', sans-serif;
        }
        body{
            background-color: #ddd;
        }
        .container{
            width: 80%;
            margin: auto;
            margin-top: 100px;
            border-radius: 10px;
            box-shadow: 1px 1px 1px rgb(167, 171, 177);
            background-color: white;
            border: none;
        }
        h2{
            text-align: center;
            background-color: #007bff;
            color: rgb(0, 0, 0);
            padding: 20px;
            
        }
        .tombol{
            display: inline;
            text-decoration: none;
            background-color: #007bff;
            margin-top: 20px;
        }

        .tombol a{
            text-decoration: none;
            display: flex;
        }
        form{
            text-align: center;
            
            border-radius: 10px;
            width: 90%;
            padding-top: 20px;
            padding-bottom: 20px;
            margin: auto;
            margin-bottom: 100px;
            margin-top: 50px;
            box-sizing: border-box;


            
        }
        input {
            width:30%;
            padding: 10px;
            box-sizing: border-box;
            margin-bottom: 10px;
            border: 1px solid #007bff;
        }

        .button{
            margin-top: 80px;
            margin-left: 65px;
            
        }

        button{
            width: 30%;
            background-color: #007bff;
            padding: 10px;
            border-radius: 10px;
            border: none;
            font-size: 18px;
            font-weight: bold;
        }

        a{
            text-decoration: none;
            padding: 10px;
            box-sizing: border-box;
            height: 10px;
            border: none;
            
        }

        .lihat{
            background-color: #007bff;
            border-radius: 10px;
            color: rgb(255, 255, 255);
        }

        .logout{
            background-color: #007bff;
            border-radius: 10px;
            color: rgb(255, 255, 255);
        }

    </style>

</head>
<body>
    <div class="container"> 
        <h2>form registrasi mahasiswa</h2>

        <div class="button">
            <a href="logout.php" class="logout">logout</a>
            <a href="data.php" class="lihat">lihat data</a>
        </div>
                       
        <form action="" method="post">
            <input type="text" name="nama" placeholder="masukkan nama" required><br>
            <input type="text" name="harga" placeholder="masukkan harga" required><br>
            <input type="text" name="stok" placeholder="masukkan stok" required><br><br><br>
           
            <button type="submit" name="submit">simpan</button>
        </form>
    </div>
   
</body>
</html>