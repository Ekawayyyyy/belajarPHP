<?php

session_start();
//kondisi yang mengecek apakah username telah terisi ato login atau belum
if(!empty($_SESSION['username'])){
    header('location:dash.php');
}


$akun = [

    ["username" => "ekaway", "password" => "ekaway123"],
    ];

    // biar kalau di refresh tetap nol
    $kondisi = 0;

    if(isset($_POST ['submit'])){
        // diubah jadi kondisi 1 karena mau di submit dan mengarahkan ke dashbord php
        $kondisi = 1;
        foreach ($akun as $akn) {
            if($akn['username']==$_POST['username']&& $akn ['password']==$_POST['password']){
            header('location:dash.php');
                
            $_SESSION['username']=$akn['username'];
                                   
        }else{
            // diberikan peringatan ketika salah makanya di berikan kondisi 2
            $kondisi = 2;
        }
    }
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
<form action="" method="post">
        <input type="text" name="username"> <br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit">

     <!-- yang akan ter eksekusi jika inputan username sam password salah -->
    <?php if( $kondisi ==2) { ?>
        <p>username dan password salah</p>
    <?php } ?>

</form>
</body>
</html>