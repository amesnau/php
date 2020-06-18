<?php
abstract class Persona {
    protected $nombre;
    protected $apellidos;
    abstract function calcular_salario();
}
class Director extends Persona {
    function __construct($nombre,$apellidos) {
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
    }
    function calcular_salario()
    {
        return 10000;
    }
    
}
$director=new Director("Francisco","Belmonte Ruiz");
echo $director->calcular_salario();
