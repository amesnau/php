<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Estatica
    {
        static $mensaje_estatico = "Hola, soy un atributo de clase bien estatico";
        var $mensaje_normal = "Yo soy un atributo de objeto";
        // function __construct($potencia, $peso)
        // {
        //     $this->potencia = $potencia;
        //     $this->peso = $peso;
        //     echo "constructor de la clase<br/>";
        // }
        function __destruct()
        {
            echo "destructor de la clase<br/>";
        }
    }
    echo Estatica::$mensaje_estatico;
    echo "<br/>";
    Estatica::$mensaje_estatico = "soy static";
    echo Estatica::$mensaje_estatico;
    ?>
</body>

</html>