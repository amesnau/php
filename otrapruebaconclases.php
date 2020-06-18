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
        public $matricula;
        private $color;
        protected $encendido;
        public function encender()
        {
            $this->encendido = true;
            echo "Vehiculo encendido <br/>";
        }
        public function apagar()
        {
            $this->encendido = false;
            echo "Vehiculo apagado <br/>";
        }
        public function verificar_encendido()
        {
            if ($this->encendido == true) {
                echo get_class($this) . " encendido. Verificado <br/>";
            } else {
                echo get_class($this) . " apagado. Verificado <br/>";
            }
        }
    }
    class Camion extends Vehiculo
    {
        private $carga;
        public function cargar($cantidad_a_cargar)
        {
            $this->carga = $cantidad_a_cargar;
            echo "Se ha cargado cantidad: " . $cantidad_a_cargar . "<br/>";
        }
        // public function verificar_encendido()
        // {
        //     if ($this->encendido == true) {
        //         echo "Camion encendido <br/>";
        //     } else {
        //         echo "Camion apagado <br/>";
        //     }
        // }
    }
    class Autobus extends Vehiculo
    {
        private $pasajeros;
        public function subir_pasajeros($cantidad_pasajeros)
        {
            $this->pasajeros = $cantidad_pasajeros;
            echo "Se han subido " . $cantidad_pasajeros . " pasajeros <br/>";
        }
        // public function verificar_encendido()
        // {
        //     if ($this->encendido == true) {
        //         echo "Autobus encendido <br/>";
        //     } else {
        //         echo "Autobus apagado <br/>";
        //     }
        // }
    }
    $camion = new Camion();
    $camion->encender();
    $camion->cargar(10);
    $camion->verificar_encendido();
    $camion->matricula = "MDU - 293";
    $camion->apagar();
    $autobus = new Autobus();
    $autobus->encender();
    $autobus->subir_pasajeros(5);
    $autobus->verificar_encendido();
    $autobus->matricula = "KDF - 923";
    $autobus->apagar();
    ?>
</body>

</html>