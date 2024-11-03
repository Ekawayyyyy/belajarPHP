<?php
session_start();

$user=[
    ['username'=> 'www', 'password'=>'222']
];

$kondisi=0;

if (isset($_POST['submit'])) {
    $kondisi=1;
    foreach ($user as $us) {
        if ($us['username']==$_POST['username'] && $us['password']==$_POST['password']) {
            $_SESSION['username']=$us['username'];
            header('location:create.php');
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
            * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .login-container {
            width: 350px;
            padding: 30px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            font-size: 14px;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }

        .input-wrapper {
            position: relative;
        }

        .icon {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-55%);
            color: #888;
            
        }

        .required-symbol {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            color: #888;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px 40px 10px 30px; /* Adjusted for icon padding */
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        .login-button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-button:hover {
            background-color: #0056b3;
        }


    </style>
</head>
<body>
<div class="login-container">
        <h2>Login</h2>
        <form action="" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <div class="input-wrapper">
                    <span class="icon">👤</span>
                    <input type="text" id="username" name="username" placeholder="Username" required>
                    <span class="required-symbol">*</span>
                </div>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <div class="input-wrapper">
                    <span class="icon">🔒</span>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <span class="required-symbol">*</span>
                </div>
            </div>
            <button type="submit" class="login-button" name="submit">Login</button>
        </form>
    </div>
</body>
</html>