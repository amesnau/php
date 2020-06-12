<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    span {
        color: red;
    }
    </style>
</head>

<body>
    <?php
    // error_reporting(0);
    $t = date("H");
    if ($t < 10) {
        echo ("Buenos dias");
    } elseif ($t < 20) {
        echo ("Buenas tardes");
    } else {
        echo ("Buenas noches");
    }
    echo("<br/>");
    $fichero = @fopen("prueba.txt", "r");
    $nombre = "Francisco";
    $foo = 10000;
    $_foo = (bool) $foo;
    var_dump($foo);
    var_dump($_foo);
    echo ("<br/>");
    if ($_foo)
        echo ("<span> _foo es $_foo y foo es igual a $foo</span> <br/>");
    if (isset($nombre))
        echo ("La variable nombre existe. <br/>");
    echo (gettype($nombre) . "<br/>");
    unset($nombre);
    if (!isset($nombre))
        echo ("La variable nombre no existe");
    ?>
</body>

</html>