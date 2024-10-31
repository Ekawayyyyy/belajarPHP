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
        .navbar {
            width: 100%;
            height: 200px;
            margin: 0;
            background-color: #091057;
        }
        .navbar .logo {
            width: 30%;
            float: left;
            justify-content: center;
            align-items:center;
        }
        .logo img {
            width: 160px;
            height: 160px;
            margin-left: 180px;
            margin-top: 20px;
            display: inline;
        }
        .navbar .title {
            width: 70%;
            float: right;
            color: white;
        }
        h1 {
            font-size: 32px;
            text-align: center;
            padding-right: 70px;
        }
        .navbar .title p {
            font-weight: none;
            font-size: 18px;
            margin-right: 70px;
            text-align: center;
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
            <div class="title">
                <h1>APLIKASI BUKU TAMU BPVP BANTAENG</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis ab tenetur, sit necessitatibus, ipsa delectus quibusdam iste eaque placeat perferendis voluptatem cum dolore autem impedit consectetur</p>
            </div>
        </div>
        <div class="content">
    

            <form action="" method="post">
                <table>
                    <tr>
                        <td><label for="username">Username</label></td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td><label for="Password">Password</label></td>
                        <td><input type="text" name="password"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" name="submit">Login</button>
                        </td>
                    </tr>
                </table>
                <?php if( $kondisi ==2) { ?>
                    <p color="red">username dan password salah</p>
                 <?php } ?>
            </form>
           
        </div>
        <div class="footer"></div>
    </div>
</body>
</html>