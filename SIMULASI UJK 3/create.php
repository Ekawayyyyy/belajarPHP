


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
        *{
            font-family: 'poppins';
        }
        .container{
            margin:auto;
            width: 90%;
            background-color: #fff;

        }
        .navbar{
            width: 100%;
            height:100px;
            background-color: #091057;

        }
        .navbar .logo{
            width: 20%;
            display: inline;
            float: left;
            
        }
        .navbar .button{
            
        }
        .navbar .button button{
            
            margin:auto;
            margin-left: 63%;
            background-color: rgba(255, 255, 255, 0.4);
            width: 100px;
            height: 100px;
            padding: 10px;
            color:white;
            
        }
        .logo img{
            width: 50px;
            padding: 20px;
            height:50px;
            margin-left: 100px;
        }
        p{
            font-weight:none;
            font-size: 24px;
            width: 70%;
        }
        span{
            color: red;
            
        }
        .content{
            margin: auto;
            justify-content: center;
            align-items: center;
            width: 100%;

        }
        .content form{
            display: float;
            width: 100%;
            margin: auto;
            padding-top: 50px;
            height: 500px;
            background-color: #FEF9F2;
            border-top: 2px solid #091057;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .content form table{
            margin-top: 50px;
            width: 50%;
            margin:auto;
        }
        .content form select{
            width: 100%;
            height:30px;
            border-radius:5px;
            border:none;
            border: 1px solid #ddd;
        }
        
        .content form input{
            border: 1px solid #ddd;
            width: 100%;
            height: 30px;
            border-radius:5px;
            margin-top:10px;
        }
        .content form .label{
           width: 40%;

        }
        .content form button{
            background-color:#0D92F4;
            color:white;
            border:none;
            padding: 5px 10px 5px 10px;
            border-radius: 5px;
            margin-left:625px;
            
        }
        .footer{
            width: 100%;
            height:50px;
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
            <div class="button">
                <button type="submit" name="logout">Logout</button>
            </div>
        </div>
        <div class="content">
            <center>
                <p>Selamat Datang di BPVP Bantaeng, Anda Login sebagai <span>admin</span></p>
            </center>
            <center>
            <form action="read.php" method="post">
                <h3 align="center">Formulir Registrasi Pengunjung</h3>

                <table>
                    <tr>
                        <td class="label"><label for="nama">Nama</label></td>
                        <td><input type="text" name="nama" required></td>
                    </tr>
                    <tr>
                        <td class="label"><label for="nama">NIK</label></td>
                        <td><input type="text" name="nik" required></td>
                    </tr>
                    <tr>
                        <td class="label"><label for="nama">Asal Instansi / Perusahaan</label></td>
                        <td><input type="text" name="asal" required></td>
                    </tr>
                    <tr>
                        <td class="label"><label for="nama">Bidang yang dikunjungi</label></td>
                        <td><select name="bagian" id="">
                            <option value="blank"></option>
                            <option value="umum">Bagian Umum</option>
                            <option value="kantor">Bagian Kantor</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td class="label"><label for="nama">Keperluan Berkunjung</label></td>
                        <td><input type="text" name="keperluan" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" ><button type="submit" name="submit" >simpan</button></td>
                    </tr>
                </table>
            </form>
            </center>
        </div>
        <div class="footer"></div>
    </div>
</body>
</html>