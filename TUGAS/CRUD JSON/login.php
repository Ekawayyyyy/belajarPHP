<?php
    session_start();
    //kondisi yang mengecek apakah username telah terisi ato login atau belum
    if(!empty($_SESSION['username'])){
        header('location:data.php');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style/login.css">
    <title>Login</title>
    
</head>
<body>
    <h1 align="center">SELAMAT DATANG</h1>
    <h3 align="center">FORM LOGIN CRUD JSON</h3>

    <div class="card-form">
        <div class="image"><img src="./assets/login.jpg" alt=""></div>
        <div class="form">
            <form action="" method="post">
                
                <h2> <b>Get Started</b></h2>
                <label for="username">Username</label>
                <input type="username" name="username" placeholder="masukkan username"><br>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="masukkan password">
                <center>
                    <button type="submit" name="submit"><b>Login</b></button>
                </center>

                <div class="regist">
                    <p color="blue">Do yout have a account ? Sign Up</p>
                </div>
                <?php if( $kondisi ==2) { ?>
                        <script>alert('username atau password salah')</script>
                <?php } ?>
            </form>
        </div>
    </div>
    </div>
   

   
   
</body>
</html>

