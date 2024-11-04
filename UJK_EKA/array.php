<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skenario Tugas 1</title>
    <link rel="stylesheet" href="style/array.css">

</head>
<body>
    <div class="container">
        <h1> Array Assosiatif</h1>
        <?php
            $data = [
            "Agus" => "20",
            "Shinta" => "25",
            "Riska" => "18",
            ];

            ksort($data);
            foreach ($data as $key => $value) {
                echo "$key : $value , \n";
                echo "<br>";
            }
        
        ?>
    </div>
</body>
</html>