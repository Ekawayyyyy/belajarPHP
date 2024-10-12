<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampilkan data database</title>
    <style>
        h2{
            text-align: center;
        }

        table{
            width: 800px;
            height: auto;
            border-collapse: collapse;
            margin: 0 auto;
        }
        th{
            border: 1px solid black;
        }
        tr, td{
            padding: 10px;
            border: 1px solid black;

        }

        h4 a{
            width: 800px;
            color: black;
            baground-color: blue;
            text-decoration: none;
            border: 1px solid black;

        }

    </style>
</head>
<body>
    <h2>DAFTAR ANGGOTA GENBI</h2>

    <h4><a href="tambah.php">tambah data</a></h4>
    <table align="center">
            <tr bgcolor="blue">
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            
            </tr>
            <?php
            include "koneksi.php";
            $no = 1;
            $data = mysqli_query($koneksi, "select * from tb_anggota");
            
            while ($row = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['nim'] ?></td> 
                <td><?= $row['nama'] ?></td> 
                <td><?= $row['jabatan'] ?></td> 
                <td><?= $row['jurusan'] ?></td>
                <td><a href="">Edit</a>
                    <a href="">Hapus

                </td>
            </tr>

            <?php 
            } 
            ?>
        </table><br><br>

</body>
</html>