<?php
    session_start();
    //kondisi yang mengecek apakah username telah terisi ato login atau belum
    if(!empty($_SESSION['username'])){
        header('location:read.php');
    }
    
    $akun = [
    
        ["username" => "qqq", "password" => "111"],
    ];
    
    // biar kalau di refresh tetap nol
    $kondisi = 0;
    
    if(isset($_POST ['submit'])){
        // diubah jadi kondisi 1 karena mau di submit dan mengarahkan ke dashbord php
                $kondisi = 1;
                foreach ($akun as $akn) {
                    if($akn['username']==$_POST['username']&& $akn ['password']==$_POST['password']){
                        $_SESSION['username']=$akn['username'];                   
                        header('location:create.php');
                        
                   
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="login.css">
    
    <title>Login</title>
    
</head>
<body>

<div class="container">
        <form action="#" method="post"  class="login-form">
            <h2>Login</h2>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="submit">Login</button>
            <?php if( $kondisi ==2) { ?>
             <p>username dan password salah</p>
        <?php } ?>
        </form>
</div>
   
   
</body>
</html>

