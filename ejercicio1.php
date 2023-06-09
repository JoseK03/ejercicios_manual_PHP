<?php
//!Ejercicio 1: Identificar planetas y sus respectivos numeros de orden en el sistema solar.
//? Array que representa los planetas del sistema solar. Las claves son los nombres y los valores son sus repectivos numeros de orden
?>
<?php
if($_POST){
    $planeta= $_POST['planeta'];


$SistemaSolar = array(
    "sol" => "1",
    "mercurio" => "2",
    "venus" => "3",
    "tierra" => "4",
    "jupiter" => "5",
    "saturno" => "6",
    "urano" => "7",
    "neptuno" => "8"
); 

foreach ($SistemaSolar as $key => $value) {
    if ($value == $planeta){
        echo "tu planeta es $key";
    }; 
}

}

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
    <form action="ejercicio1.php" method="POST">
        <h1>SISTEMA SOLAR</h1>
        <label for="input">Busca tu planeta favorito</label> <br>
        <input type="text" id="input" name="planeta">
        <?php echo "tu planeta esta en la posicion ".$SistemaSolar[$planeta]; ?>
        
    </form>
</body>
</html>