<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
       <?php for ($i=0; $i < 5 ; $i++) { ?>
        <tr>
            <?php for ($x=0; $x < 8; $x++) { ?>
                <td>
                <?php echo $i. "," .$x ?>
                </td>
            <?php } ?>
        </tr>
      <?php } ?>
    </table>

    <?php
    $nilai = 6;
    if ($nilai > 5) {
      echo "<br> betul sekali";
    }else{
    
    echo "<br> salahki";
    }
    ?>


    <?php
    $value = 20;
    if ($value < 20) {
      echo "<br> betul sekali";
    }else if($value == 20){
    echo "<br> nilai sama dengan 20";
    }else{
        echo "salahki";
    }
    ?>

</body>
</html>