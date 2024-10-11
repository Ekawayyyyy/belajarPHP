<?php 
     $hari = ["senin", "selasa","rabu","kamis"];
     $hari[2] = 12345;

     var_dump($hari);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo $hari[3];
    ?>

    <p><?=$hari[0]?></p>

    <ul>
        <?php  for ($i=0; $i < count($hari) ; $i++) { ?>
            <li><?php  echo $hari[$i]; ?> </li>
       <?php }?>
    </ul>

    <?php  $mahasiswa = [
        ["ekaway", "sistem informasi","trigers","ekway@gmai.com"],
        ["wahyuni", "teknik informatika","horizon","wahyuni@gmai.com"],
        ["darmayanti", "sistem informasi","trigers","darma@gmai.com"],
        ["suci ramadani", "teknik informasi","satsinger","suciramadahnai@gmai.com"]
    ]?>

    //menggunakan foreach array multidimensi

    <ul>
        <?php foreach ($mahasiswa as $mhs) {?>
           <li><?= $mhs[0]?></li> 
           <li><?= $mhs[1]?></li>
           <li><?= $mhs[2]?></li>
           <li><?= $mhs[3]?></li>
           <?= "<br>" ?>
       <?php } ?>
    </ul>

    //menggunakan foreach array asosiatif

    <?php  $mahasiswa = [
        [
            "nama"=>"ekaway",
            "jurusan"=>"sistem informasi",
            "angkatan"=>"trigers",
            "email"=>"ekway@gmai.com",
            "gambar"=>"ekaway.jpg"
        ],
        [
            "nama"=>"wahyuni",  
            "jurusan"=>"teknik informatika",
            "angkatan"=>"horizon",
            "email"=>"wahyuni@gmai.com",
            "gambar"=>"ekaway.jpg"
        ],
        
    ]?>
    <ul>
        <?php foreach ($mahasiswa as $mhs) {?>
            <li><img src="tumbnail.png <?= $mhs["gambar"] ?>" width="50px"></li>
           <li><?= $mhs["nama"]?></li> 
           <li><?= $mhs["jurusan"]?></li>
           <li><?= $mhs["angkatan"]?></li>
           <li><?= $mhs["email"]?></li>
           <?= "<br>" ?>
       <?php } ?>
    </ul>



</body>
</html>