<?php 
session_start();
if(empty($_SESSION['username'])){
    header('location:login.php');
}

$indeks = $_GET["indeks"];

//mengambil data json
$json_data = file_get_contents('barang.json');

//konversi json ke array
$barang = json_decode($json_data, true);

//update data yang sudah ada
if (isset($_POST["submit"])) {
    $data_update = [
        "nama"=>$_POST["nama"],
            "harga"=>$_POST["harga"],
            "stok"=>$_POST["stok"]
    ];

    //simpan data
    $barang[$indeks] = $data_update;

    //konversi kembali array to json
    $json_update = json_encode($barang, JSON_PRETTY_PRINT);

    //simpan data
    file_put_contents('barang.json', $json_update);

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
            border: #007bff solid 2px;
            border-radius: 10px;
            background-color: white;
        }
        h2{
            text-align: center;
            background-color: #007bff;
            padding: 20px;
        }

        form{
            text-align: center;
            border: 1px solid #007bff;
            border-radius: 10px;
            width: 90%;
            padding-top: 20px;
            padding-bottom: 20px;
            margin: auto;
            margin-bottom: 50px;
            margin-top: 50px;
            box-sizing: border-box;

            
        }

        form input {
            width: 300px;
            padding: 10px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        button{
            margin-top: 20px;
            border-radius: 5px;
            background-color: #007bff;
            padding: 5px;
            width: 300px;
        }

        a{
            text-decoration: none;
            padding: 10px;
            box-sizing: border-box;
            height: 10px;
            border: none;
            color:white ;
            
        }
        .button{
            margin-top: 80px;
            margin-left: 65px;
            
        }
        .kembali{
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
        
        <h2>UPDATE DATA</h2>
        <div class="button">
            <a href="logout.php" class="logout">logout</a>
            <a href="data.php" class="kembali">Kembali</a>
        </div>

        
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="">Nama</label></td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="<?= $barang[$indeks]["nama"]?>" required></td>
                </tr>
                <tr>
                    <td><label for="">arga</label></td>
                    <td>:</td>
                    <td><input type="text" name="harga" value="<?= $barang[$indeks]["harga"]?>" required></td>
                </tr>
                <tr>
                    <td><label for="">Stok</label></td>
                    <td>:</td>
                    <td><input type="text" name="stok" value="<?= $barang[$indeks]["stok"]?>" required></td>
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