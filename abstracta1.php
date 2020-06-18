<?php
abstract class Animal {
    protected $nombre;
    abstract public function habla();
}
class Perro extends Animal {
    public function __construct($nombre) {
$this->nombre=$nombre;
    }
    public function habla() {
        echo "<br/>$this->nombre dice: GUAU!! GUAU!!";
    }
}
class Gato extends Animal {
    public function __construct($nombre) {
        $this->nombre=$nombre;
    }
    public function habla() {
        echo "<br/>$this->nombre dice: MIAU!!, MIAU!!!";
    }
}
function hazleHablar($bicho) {
    $bicho->habla();
}
$perrito=new Perro("Toby");
$gatito=new Gato("Misifu");

hazleHablar($perrito);
hazleHablar($gatito);
