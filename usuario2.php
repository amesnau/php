<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'test.php';
    class Usuario2 extends Persona
    {
        private $_id;
        private $fechaIngreso;
        static protected $_ultimoID = 0;
        public function __construct($nombre, $apellido)
        {
            parent::__construct($nombre, $apellido);
            self::$_ultimoID += 1;
            $this->_id = self::$_ultimoID;
            $this->_fechaIngreso = date('w');
        }
        public function __toString()
        {
            return "<br/>" . $this->_id . "-" . parent::__toString();
        }
    }


    ?>
</body>

</html>