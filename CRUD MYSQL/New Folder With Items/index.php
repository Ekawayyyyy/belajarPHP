<?php
    session_start();
    //kondisi yang mengecek apakah username telah terisi ato login atau belum
    if(!empty($_SESSION['username'])){
        header('location:data.php');
    }
    
    
$host = "localhost";
$user = "root";
$pass = "";
$database = "belajar_web";

$koneksi = mysqli_connect($host, $user, $pass, $database);

if (mysqli_connect_error()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

$data = $koneksi->query("SELECT * FROM tabel_user");
$dtu = $data->fetch_all(MYSQLI_ASSOC);
// var_dump($dtu);

if(isset($_POST ['login'])){
    foreach ($dtu as $dt) {
        if($dt['username']==$_POST['username']&& $dt ['password']==$_POST['password']){
            $_SESSION['username']=$dt['username'];
            header('location:data.php');
        }else{
            echo "<script>alert('username atau password salah')</script>";
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
<h1 align="center">SELAMAT DATANG</h1>
    <h3 align="center">CRUD MYSQL</h3>
    <div class="card-form">
        <!-- <div class="image"><img src="./assets/login.jpg" alt=""></div> -->
        <div class="form"></div>
             
    </div>

    <form action="" method="post">
        <h2> <b>FORM LOGIN</b></h2>
        <input type="username" name="username" placeholder="masukkan username">
        <input type="password" name="password" placeholder="masukkan password">
        <center>
            <button type="submit" name="login"><b>Login</b></button>
        </center>
        <div class="regist">
            <p color="blue">Do yout have a account ? Sign Up</p>
        </div>
    </form>

</body>
</html>

