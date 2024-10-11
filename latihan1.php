<?php
    // echo "ekaway <br>";
    // print "Latihan 1 <br>";
    // print_r ("Latihan 1 <br>");
    // var_dump ("Latihan 1");
    $nama = "Eka darmayanti";

    $no1 = 10;
    $no2 = 30;

    echo $no1 + $no2;
    echo "<br>";
    echo $no1. "+". $no2. "=". ($no1 + $no2);

    $nama = "Eka";
    $nama .= " ";
    $nama .= "Darmayanti";

    echo "<br>";
    echo $nama;

    var_dump(1<5); 
    var_dump(1=="1");
    var_dump(1!="1");
    var_dump(1>=5);
    var_dump(1<=5);

    for ($i=0; $i < 10 ; $i++) { 
        # cechode...
        echo "muncullah sebanyak". $i. "kali <br>";
    }

    echo "<br>";
    $a = 2;
    while ($a < 5) {
        # code...
        echo "muncullah sebanyak". $a. "kali <br>";
        $a++;
    }
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>selamat datang <?php echo $nama ?></p>
    
</body>
</html> -->