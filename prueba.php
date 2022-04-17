<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <?php 
        $stock = 10;
        while($stock > 0) {
            echo "El stock es $stock <br>";
            $stock--;
        }
        echo "Stock agotado <br>";
        for ($i = 0; $i < 10; $i++){
            echo $i . "<br>";
        }
    ?>
</body>
</html>