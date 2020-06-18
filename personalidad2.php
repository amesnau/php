<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'personalidad1.php';
    class Usuario extends Persona
    {
        public $edad;
        public function __construct($nombre, $apellido, $edad)
        {
            parent::__construct($nombre, $apellido, $edad);
            $this->edad = $edad;
        }
    }
    $individuo = new Usuario("Gracita", "Morales", 25);
    echo "edad:" . $individuo->edad;
    echo "nombre:" . $individuo->_nombre;
    ?>
</body>

</html>