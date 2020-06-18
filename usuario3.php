<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'Usuario2.php';
    $usuario1 = new Usuario2("Pepe", "Gonzalez");
    $usuario2 = new Usuario2("Reme", "Tejada");
    $usuario3 = new Usuario2("Isabel", "Ortiz");
    echo "<br/>" . $usuario1 . "<br/>" . $usuario2 . "<br/>" . $usuario3;
    ?>
</body>

</html>