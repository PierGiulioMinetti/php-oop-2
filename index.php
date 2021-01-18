<?php
    include_once __DIR__ .'/product/Smartphone.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="lista">
        <?php 
            $telefono = new Smartphone('Samsung S21 Ultra', 'Smartphone', '1400 euro');
            var_dump($telefono);
        ?>

        modello : 
            <?php
               echo $telefono->printName();
            ?>

        
    </div>
</body>
</html>