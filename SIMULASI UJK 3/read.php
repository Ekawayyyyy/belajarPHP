<?php
    session_start();
    //kondisi yang mengecek apakah username telah terisi ato login atau belum
    if(!empty($_SESSION['username'])){
        header('location:read.php');
    }

    $json_data = file_get_content('data.json');
    $data = json_decode($json_data, true);
    var_dump($json_data);

    if (isset($_POST['submit'])) {
        if (!$data) {
            # code...
        }
        $data_baru = [
            "nama"=>$_POST['nama'],
            "nik"=>$_POST['nik'],
            "asal"=>$_POST['asal'],
            "bagian"=>$_POST['bagian'],
            "keperluan"=>$_POST['keperluan']
        ];

        $data[] =$data_baru;

        $tamu = json_encode($data, JSON_PRETTY_PRINT);
        file_get_contents('data.json', $tamu);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        .container {
            margin: auto;
            width: 90%;
            background-color: #fff;
        }
        .navbar{
            width: 100%;
            height:100px;
            background-color: #091057;

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
            display: flex;
            margin: 0;
            justify-content: center;
            align-items: center;
            height: 500px;
            width: 100%;
            background-color: #FEF9F2;
        }
        .content form {
            width: 100%;
            max-width: 400px;
            padding: 20px;
    
            border-radius: 8px;
           
        }
        .content form table {
            width: 100%;
            
        }
        .content form input {
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
            background-color: #091057;
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
                <button type="submit" name="logout">Logout</button>
            </div>
        </div>
        <div class="content">
           
                <center>
                    <h1>Terima kasih</h1>
                    <h3>Berikut Data yang telah anda masukkan</h3>
                </center>

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
                        <td>NIK</td>
                        <td><?= $_POST['asal']?></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td><?= $_POST['bagian']?></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td><?= $_POST['keperluan']?></td>
                    </tr>
                </table>
         
        </div>
        <div class="footer"></div>
    </div>
</body>
</html>