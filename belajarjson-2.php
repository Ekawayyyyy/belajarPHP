<?php 
    //memanggil 
    $json_data = file_get_contents('akun.json');
    $akun = json_decode($json_data, true);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>daftar tampilan akun</h2>
    <table border="1">
        <tr>
            <th>username</th>
            <th>password</th>
        </tr>
        <tr>
           <?php foreach ($akun as $ak) {?>
               <tr>
               <td><?=$ak["username"]?></td>
               <td><?=$ak["password"]?></td>
               </tr>
           <?php }?>
        </tr>
    </table>
    
</body>
</html>