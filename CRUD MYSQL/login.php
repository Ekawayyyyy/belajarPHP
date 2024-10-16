<?php
    session_start();
    //kondisi yang mengecek apakah username telah terisi ato login atau belum
    if(!empty($_SESSION['username'])){
        header('location:data.php');
    }
    
    
$host = "localhost";
$user = "root";
$pass = "";
$database = "user";

$koneksi = mysqli_connect($host, $user, $pass, $database);

if (mysqli_connect_error()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

$data = $koneksi->query("SELECT * FROM tb_user");
$dtu = $data->fetch_all(MYSQLI_ASSOC);
// var_dump($dtu);

if(isset($_POST ['login'])){
    foreach ($dtu as $dt) {
        if($dt['username']==$_POST['username']&& $dt ['password']==$_POST['password']){
            $_SESSION['username']=$dt['username'];
            header('location:data.php');
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/login.css">
    <title>Login</title>
    
</head>
<body>
    <h3 align="center">CRUD MYSQL</h3>
    <form action="" method="post">
        
        <h2> <b>FORM LOGIN</b></h2>
        <input type="username" name="username" placeholder="masukkan username">
        <input type="password" name="password" placeholder="masukkan password">
        <center>
            <button type="submit" name="login"><b>Login</b></button>
        </center>
        <br>
    </form>
</body>
</html>

