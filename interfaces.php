<?php
interface Parlanchin
{
    public function habla();
}
abstract class Reloj
{
    protected $marca;
    public function __construct($marca)
    {
        $this->marca = $marca;
    }
    abstract public function getHora();
}
class Cuco extends Reloj implements Parlanchin
{
    public $melodia;
    public function __construct($marca, $melodia)
    {
        parent::__construct($marca);
        $this->melodia = $melodia;
    }
    public function getHora()
    {
        echo "Cucu, son las tres!!!";
    }
    public function habla()
    {
        echo "<br/>El cuco marca " . $this->marca . " dice: " . $this->melodia;
    }
}
abstract class Animal implements Parlanchin
{
    protected $nombre;
    abstract public function habla();
}
class Perro extends Animal
{
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
    public function habla()
    {
        echo "<br/>$this->nombre dice: GUAU!!!, GUAU!!!";
    }
}
class Gato extends Animal
{
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
    public function habla()
    {
        echo "<br/>$this->nombre dice: MIAU!!!, MIAU!!!";
    }
}
function hazlehablar($bicho)
{
    $bicho->habla();
}
$perrito = new Perro("Toby");
$gatito = new Gato("Misifu");
$cuquito = new Cuco("Casio", "Tarirorirorirorito para papa papa!!!");
hazlehablar($perrito);
hazlehablar($gatito);
hazlehablar($cuquito);
