<?php
    include_once __DIR__ .'/product/Smartphone.php';
    include_once __DIR__ .'/product/SmartTv.php';
    include_once __DIR__ .'/product/Macbook.php';
    include_once __DIR__ .'/product/Nikon.php';
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

        categoria : 
        <?php
            echo $telefono->printName();
        ?>

        <?php 
            $tv = new SmartTv('Sony OLED 8k', 'Smart TV', '5900 euro');
            var_dump($tv);
        ?>

        categoria:
        <?php 
           echo $tv->printName();
        ?>

        <?php 
            $mac= new Macbook('Macbook Pro 13"', 'Apple Laptop', '1500 euro', 'Retina Display 2k');
            var_dump($mac)
        ?>

        categoria: 
        <?php
           echo $mac->printName(); 
        ?>

        <?php 
            $camera = new Nikon('Nikon Z7 II', 'Camera', '3500 euro', '45,7 megapixels', 'Full Frame Sensor');
            var_dump($camera);
        ?>

        categoria:

        <?php 
            echo $camera->printName();
        ?>

        

        
    </div>
</body>
</html>