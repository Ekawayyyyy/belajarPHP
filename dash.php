<?php

session_start();
if(empty($_SESSION['username'])){
    header('location:log.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Selamat Anda Masuk Ke Dashboard <?=  $_SESSION['username']?>😊</h2>

    <a href="logout.php"><input type="submit" value="Logout"></a>
</body>
</html>