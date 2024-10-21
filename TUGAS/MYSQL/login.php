<?php
    session_start();
    //kondisi yang mengecek apakah username telah terisi ato login atau belum
    if(!empty($_SESSION['username'])){
        header('location:data.php');
    }
    
    include "koneksi.php";
    $data = $koneksi->query("SELECT * FROM user");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
      body {
          font-family: 'Poppins', sans-serif;f;
          background-color: #f0f0f0;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          margin: 0;
      }

      .container {
          background-color: white;
          padding: 20px;
          border-radius: 10px;
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
          width: 300px;
      }

      .login-form h2 {
          text-align: center;
          margin-bottom: 20px;
      }

      .input-group {
          position: relative;
          margin-bottom: 15px;
      }

      .input-group i {
          position: absolute;
          left: 10px;
          top: 12px;
          color: #888;
      }

      .input-group input {
          width: 86%;
          padding: 10px 10px 10px 30px; /* Padding left for icon */
          border: 1px solid #ccc;
          border-radius: 5px;
          outline: none;
      }

      .input-group input:focus {
          border-color: #007bff;
      }

      button {
          width: 100%;
          padding: 10px;
          background-color: #007bff;
          color: white;
          border: none;
          border-radius: 5px;
          cursor: pointer;
          font-size: 16px;
      }

      button:hover {
          background-color: #0056b3;
      }

    </style>
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
            <button type="submit" name="login">Login</button>
        </form>
    </div>
   
   
</body>
</html>

