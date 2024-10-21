<?php 

session_start();
if(empty($_SESSION['username'])){
    header('location:login.php');
}

include "koneksi.php";

$data = $koneksi->query("SELECT * FROM tb_barang");
$barang = $data->fetch_all(MYSQLI_ASSOC);
 

    $i= 1;
    $kode = 0;
    $k=1;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Data Anggota</title>
    <style>
                *{
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }
        body{
        background-color: #ddd;
        }
        .container{
            width: 80%;
            margin: auto;
            margin-top: 100px;
            
            background-color: white;
            box-shadow: 1px 1px 1px rgb(167, 171, 177);
            background-color: white;
        }
        h2{
            text-align: center;
            background-color: #007bff;
            padding: 20px;
           
        }
        table {
            border-collapse: collapse;
            width: 90%;
            margin: auto;
            margin-top: 50px;
        }
        
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: #007bff;
            text-align: center;
        }
        tr:nth-child(odd){
            background-color: rgb(233, 230, 227);
        }


        .aksi{
            text-align: center;
            border-radius: 10px;
        }

        button{
            border-radius: 10px;
            /* background-color: #b48605; */
            
        }
        .edit{
            background-color: #007bff;
            padding: 10px;
            box-sizing: border-box;
        }

        .delete{
            background-color: rgb(214, 48, 48);
            padding: 10px;             
            box-sizing: border-box;
        }
        a{
            text-decoration: none;
            box-sizing: border-box;
            height: 5px;
            border: none;
            color: white ;
            
        }
        .button{
            margin-top: 80px;
            margin-left: 65px;
            
        }
        .tambah{
            background-color: #007bff;
            border-radius: 10px;
            padding: 5px;
            box-sizing: border-box;
            color: rgb(255, 255, 255);
        }

        .logout{
            padding: 5px;
            border: 1px solid #007bff;
            border-radius: 10px;
            color: black;
        }




    </style>

</head>
<body>
    <div class="container">
        
        <h2>Data Anggota GenBI</h2>
        <div class="button">
            <a href="logout.php" class="logout">logout</a>
            <a href="create.php" class="tambah">Add New</a>
        </div>
                   
        <table >
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($barang as $br) { ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $k++ ?></td>
                    <td><?= $br["nama"] ?></td>
                    <td><?= $br["harga"] ?></td>
                    <td><?= $br["stok"] ?></td>
                    <td class="aksi">
                        <button class="edit">
                        <a href="edit.php?kode=<?= $br['kode'] ?>"<i class="fas fa-edit"></i></a>
                        </button>
                       
                        <button class="delete">
                            <a href="delete.php?kode=<?= $br['kode'] ?>" <i class="fas fa-trash-alt"></i></a>
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </table><br><br>

    </div>


</body>
</html>