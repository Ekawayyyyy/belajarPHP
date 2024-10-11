<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas tabel</title>
    <style>
        .baris{
            background-color = blue;
        }
    
    </style>
</head>
<body>

    <table border="1">

       <?php for ($i=0; $i < 5 ; $i++) { ?>
        <tr style="background-color: <?php echo ($i % 2 == 0) ? 'white' : 'red'; ?>">
            <?php for ($x=0; $x < 8; $x++) { ?>
                <td>
                <?php echo $i. "," .$x ?>
                </td>
            <?php } ?>
        </tr>
      <?php } ?>
    </table>

    <table border="1">

       <?php for ($i=0; $i < 5 ; $i++) { ?>

        <?php if ($i % 2 == 0) { ?>
            <tr class="baris">
        <?php } ?>

            <?php for ($x=0; $x < 8; $x++) { ?>
                <td>
                <?php echo $i. "," .$x ?>
                </td>
            <?php } ?>
        </tr>
      <?php } ?>
    </table>

</body>
</html>