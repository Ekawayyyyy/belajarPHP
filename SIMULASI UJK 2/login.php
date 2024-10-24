<?php

    $akun = [
        ['username' => 'www', 'password' => '111']
    ];

    $kondisi = 0;

    if (isset($_POST['submit'])) {
        $kondisi = 1;
        foreach ($akun as $ak) {
            if ($ak['username']==$_POST['username'] && $ak['password']==$_POST['password']) {
                $_SESSION['username']=$akn['username'];
                header('location:input.php');
            }else{
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
    <style>
        body{
            margin: auto;
            justify-content: center;
            background-image: url('bag.png');
            background-size: cover;

        }

        form{
            width: 50%;
            margin: auto;
            margin-top: 100px;
            background-color:gray;
            align-items: center;
            padding: 10px;
            border-radius: 10px;
            box-sizing: border-box;
            backdrop-filter: blur(40px);
            background-color: rgba(17, 25, 40, 0.30);
        }

        h2{
            text-align: center;
        }
        form .login {
            margin: auto;
            margin-left: 35px;
        }
        form .pass{
            margin: auto;
            margin-left: 35px;
        }

        input{
            width: 80%;
            margin-botom:10px;
            padding:10px;
            box-sizing: border-box;
            border-radius: 10px;
        }
        .login{
            
        }
        button{
            margin: auto;
            justify-self: unset;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h2>Login</h2>
        <div class="login">
        <label for="">Username</label><br>
        <input type="username" name="username" placeholder="masukkan username" required>
        </div>

        <div class="pass">
            <label for="password">Password</label><br>
            <input type="password" name="password" placeholder="masukkan password" required>
        </div>
        <center>
             <button type="submit" name="submit">submit</button><br><br>
        </center>
      
       <?php
        if($kondisi==2){
            echo "Username dan Password Salah";
       }

       ?>
    </form>
</body>
</html>