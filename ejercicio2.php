<?php
//?simulacion de juego en el que se crea un sistema solar basico, pedir al usuario cuantos planetas desea agregar en su sistema solar.

$cantidad = $_POST['cantidad'];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Solar</title>
</head>
<body>
    <h1>CREA TU PROPIO SISTEMA SOLAR</h1>
    <form action="ejercicio2.php" method="POST">
        <label for="input">¿Cúantos planetas deseas tener en tu sistema solar?</label>
        <input type="number" id="input" name="cantidad">
        <?php
           for ($i=0; $i < $cantidad; $i++) { 
            echo '<br>';
            echo '<br>';
            echo '<label for="input">Ingresa el nombre para tu planeta'.$i.'</label>';
            echo '<input type="text" id="input" name="cantidad"><br>';
        ?>

        <?php
        };
        ?>
    </form>
</body>
</html>