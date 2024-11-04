<?php

$data_json = file_get_contents('data.json');

$data_tamu = json_decode($data_json, true);

if(isset($_POST['submit'])){
    $waktu = date_default_timezone_set('Asia/makassar');
    $waktu = date('Y-m-d H:i A');

    $baru=[
        'nama'=> $_POST['nama'],
        'alamat'=> $_POST['alamat'],
        'telp'=> $_POST['telp'],
        'pilihan'=> $_POST['pilihan'],
        'jk'=> $_POST['jk'],
        'komentar'=> $_POST['komentar'],
        'waktu'=> $waktu,
    ];

    $data_tamu[] = $baru;

    $tamu = json_encode($data_tamu, JSON_PRETTY_PRINT);
    file_put_contents('data.json', $tamu);

    header('location:read.php');
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <style>
        body{
            display:flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
        }

        .container{
            width: 500px;
            background-color: #ddd;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            border-radius: 10px;
            padding: 20px;
            box-sizing: border-box;
        }
        h1{
            text-align: center;
        }

        input[type="text"]{
            width: 100%;
        }
        form{
            width: 100%;
        }
        table{
            width: 100%;
        }
        select{
            width: 103%;
            padding: 5px;
            box-sizing: border-box;
        }

        textarea{
            width: 100%;
            height: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>BUKU TAMU</h1>
        <form action="" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input class"input" type="text" name="nama" ></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input class"input" type="text" name="alamat" ></td>
            </tr>
            <tr>
                <td>No. Telp</td>
                <td>:</td>
                <td><input class"input" type="text" name="telp" ></td>
            </tr>
            <tr>
                <td>Pilihan Sebagai</td>
                <td>:</td>
                <td><select name="pilihan" id="">
                    <option value="umum">Umum</option>
                    <option value="umum">Tamu</option>
                    <option value="umum">Anggota</option>
                </select></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jk" value="Laki-laki">Laki-Laki
                    <input type="radio" name="jk" value="Perempuan">Perempuan</td>
            </tr>
            <tr>
                <td>komentar</td>
                <td>:</td>
               <td> <textarea name="komentar" id=""></textarea></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Simpan</button></td>
                <td colspan="2"><button type="submit" name="ulang">Ulangi</button></td>
                <td><button  action="read.php" type="submit" name="batal">Batal</button></td>
            </tr>
        </table>
        </form>
        
    </div>
</body>
</html>