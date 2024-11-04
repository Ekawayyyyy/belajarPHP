<?php 
    session_start();
    if(empty($_SESSION['username'])){
        header('location:login.php');
    }
    //mengambil data json
    $json_data =file_get_contents("data.json");

    //konversi json ke array
    $data = json_decode($json_data, true);


    //tambahkan data ketika submit di klik
    if (isset($_POST["submit"])) {
        $data_baru = [
            "nama"=>$_POST["nama"],
            "nik"=>$_POST["nik"],
            "asal"=>$_POST["asal"],
            "bagian"=>$_POST["bagian"],
            "keperluan"=>$_POST["keperluan"],
        ];

           //menambahkan data baru
        $data[] = $data_baru;

        //konversi kembali array to json
        $json_data_baru = json_encode($data, JSON_PRETTY_PRINT);

        //simpan data
        file_put_contents("data.json",$json_data_baru);

        //arahkan ke data
        
    }

 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kunjungan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
            margin:0;
            
        }
        .container {
            margin: auto;
            width: 90%;
            background-color: #fff;
        }
        .navbar{
            width: 100%;
            height:100px;
            background-color: #36157D;

        }
        .navbar .logo{
            width: 20%;
            display: inline;
            float: left;
            
        }
        .navbar .button{
            
        }
        .navbar .button button{
            
            margin:auto;
            margin-left: 63%;
            background-color: rgba(255, 255, 255, 0.4);
            width: 100px;
            height: 100px;
            padding: 10px;
            color:white;
            
        }
        .logo img{
            width: 100px;
            height:100px;
            margin-left: 100px;
        }
        
        
        .content {
            margin: 0;
            justify-content: center;
            align-items: center;
            height: 600px;
            width: 100%;
            background-color: #FEF8F8;
        }
        .content form {
            width: 100%;
            max-width: 400px;
            padding: 20px;
    
            border-radius: 8px;
           
        }
        .content table {
            margin-top:50px;
            width: 50%;
            
        }
        table tr:nth-child(odd) {
            background-color: #F4E8E8; /* Warna latar baris ganjil */
        }
        .content table tr{
            height: 60px;
        }
        .content  input {
            width: 100%;
            padding: 10px;
          
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 5px;
        }
        .content form button {
            background-color: green;
            padding: 5px 10px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-left: 360px;
            
        }
    
        .footer {
            width: 100%;
            height: 50px;
            background-color: #36157D;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="navbar">
            <div class="logo">
                <img src="logo.png" alt="">
            </div>
            <div class="button">
                <form action="logout.php" method="POST">
                    <button type="submit" name="logout">Logout</button>
                </form>
            </div>

        </div>
        <div class="content">
                <br>
                <center>
                    <h1>Terima kasih</h1>
                    <h3>Berikut Data yang telah anda masukkan</h3>
                </center>
                <?php If (isset($_POST["submit"])){ ?>
                <center>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td><?= $_POST['nama']?></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td><?= $_POST['nik']?></td>
                    </tr>
                    <tr>
                        <td>Asal Instansi</td>
                        <td><?= $_POST['asal']?></td>
                    </tr>
                    <tr>
                        <td>Bagian Kunjungan</td>
                        <td><?= $_POST['bagian']?></td>
                    </tr>
                    <tr>
                        <td>Keperluan</td>
                        <td><?= $_POST['keperluan']?></td>
                    </tr>
                </table>
                </center>
                <?php } else { ?>
                    <center><h1>Silahkan masukkan data dulu 😅</h1></center>
                <?php } ?>
        <br>
            <center>
                Gunakan koneksi internet BVP Bantaeng <br>
                Password: bvpb1234
            </center>
         
        </div>
        <div class="footer"></div>
    </div>
  
</body>
</html>
