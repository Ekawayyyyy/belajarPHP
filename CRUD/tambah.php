<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambahkan data anggota</title>

    <style>
        h2{
            text-align: center;
        }
        table{
            width: 400px;
            height: 250px;
            border: 1px solid black;

        }
        table td, input{
            padding: 7px;
            
        }
 
        input[type="reset"]{
            width: 35%;
            background-color: blue;
            
        }
        input[type="submit"]{
            width: 35%;
            background-color: blue;
            
        }
    </style>
</head>
<body>
    <h2>FORM TAMBAH DATA</h2>

    <form action="insert.php" method="post">
        <table align="center">
            <tr>
                <td>NIM</td>
                <td>  <input type="text" name="nim" placeholder="masukkan nim" required></td>
            </tr>

            <tr>
                <td>NAMA</td>
                <td>  <input type="text" name="nama" placeholder="masukkan nama" required></td>
            </tr>

            <tr>
                <td>JABATAN</td>
                <td>  <input type="text" name="jabatan" placeholder="masukkan jabatan" required></td>
            </tr>

            <tr>
                <td>JURUSAN</td>
                <td>  <input type="text" name="jurusan" placeholder="masukkan jurusan" required></td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" name="simpan" value="simpan">
                    <input type="reset" name="reset" value="reset">
                </td>
                
            </tr>

         
        </table>
         
          
        </form>
</body>
</html>