<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Vehiculo
    {
        public $velocidadMaxima;
        public $potencia;
        public $color;
        public $peso;
        const pi = 3.1416;
        function __construct($potencia, $peso)
        {
            $this->potencia = $potencia;
            $this->peso = $peso;
            echo "constructor de la clase<br/>";
        }
        function __destruct()
        {
            echo "destructor de la clase<br/>";
        }
        public static function cuadrado($nro)
        {
            return $nro * $nro;
        }
        public static function meregreso($nro)
        {
            echo "<br/>miau!!!<br/>";
            return sqrt(self::cuadrado($nro));
        }
        private function function1()
        {
            echo "<br/>ola k ase<br/>";
        }
        function relacionPesoPotencia()
        {
            if ($this->potencia > 0) {

                $this->function1();
                return ($this->peso / $this->potencia);
            }
            return -1;
        }
        static function kitDePotencia($vehiculo)
        {
            $vehiculo->potencia = $vehiculo->potencia + 5;
        }
    }
    $obj_vehiculo = new Vehiculo(5, 80);
    echo $obj_vehiculo->potencia;
    echo $obj_vehiculo->relacionPesoPotencia() . "<br/>";
    $obj_alias = $obj_vehiculo;
    echo $obj_alias->relacionPesoPotencia() . "<br/>";
    $obj_alias->peso = 60;
    echo $obj_vehiculo->relacionPesoPotencia() . "<br/>";
    echo $obj_alias->relacionPesoPotencia() . "<br/>";
    $obj_alias->peso = 60;
    echo $obj_vehiculo->relacionPesoPotencia() . "<br/>";
    $obj_vehiculo = new Vehiculo(5, 80);
    echo $obj_vehiculo->relacionPesoPotencia() . "<br/>";
    Vehiculo::kitDePotencia($obj_vehiculo);
    echo $obj_vehiculo->relacionPesoPotencia() . "<br/>";
    echo $obj_vehiculo::pi;
    // $obj_vehiculo->function1();
    echo "<br/>" . Vehiculo::cuadrado(5) . "<br/>";
    echo "<br/>" . Vehiculo::meregreso(5) . "<br/>";
    ?>
</body>

</html>