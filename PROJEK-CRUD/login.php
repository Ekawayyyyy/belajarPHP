<?php
    session_start();
    //kondisi yang mengecek apakah username telah terisi ato login atau belum
    if(!empty($_SESSION['username'])){
        header('location:data.php');
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
                    header('location:data.php');
                        
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/login.css">
    <title>Login</title>
    
</head>
<body>

    <form action="" method="post">
        <h2>LOGIN</h2>
        <input type="username" name="username" placeholder="masukkan username">
        <input type="password" name="password" placeholder="masukkan password">
        <center>
            <button type="submit" name="submit">Login</button>
        </center>
        <?php if( $kondisi ==2) { ?>
             <p>username dan password salah</p>
        <?php } ?>
    </form>
</body>
</html>

