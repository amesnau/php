<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Persona
    {
        protected $nombre;
        protected $apellido;
        public function __construct($nombre, $apellido)
        {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
        }
        public function saluda()
        {
            echo "<br/>Hola, soy $this->nombre $this->apellido";
        }
        public function __toString()
        {
            return $this->nombre . " " . $this->apellido;
        }
    }
    class Usuario extends Persona
    {
        public $tipoUsuario;
        public $edad;
        public function __construct($nombre, $apellido, $tipoUsuario, $edad)
        {
            parent::__construct($nombre, $apellido);
            $this->tipoUsuario = $tipoUsuario;
            $this->edad = $edad;
        }
        public function muestraInfo()
        {
            parent::saluda();
            echo " y mi nivel es de $this->tipoUsuario y tengo $this->edad a;os";
        }
        public function __toString()
        {
            return "<br/>" . parent::__toString() . ", mi nivel es " . $this->tipoUsuario . " y mi edad es " . $this->edad . " years";
        }
    }
    // $miUsuario='Usuario("Pepe", "Perez","novato",25)';
    $miUsuario = new Usuario("Pepe", "Perez", "novato", 25);
    $miUsuario->saluda();
    $miUsuario->muestraInfo();
    echo $miUsuario;
    ?>
</body>

</html>