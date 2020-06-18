<?php
abstract class Figura
{
    protected $area;
    protected $perimetro;
    protected $volumen;
    abstract public function calculaArea();
    public function getArea()
    {
        return $this->area;
    }
    public function getPerimetro()
    {
        return $this->perimetro;
    }
    public function getVolumen()
    {
        return $this->volumen;
    }
}
class Circulo extends Figura
{
    const PI = 3.141592;
    private $radio;
    private $altura;
    public function __construct($radio, $altura = 1)
    {
        $this->radio = $radio;
        $this->altura = $altura;
    }
    public function calculaArea()
    {
        $this->area = $this::PI * pow($this->radio, 2);
    }
    public function calculaPerimetro()
    {
        echo $this->radio;
        $this->perimetro = 2 * $this::PI * $this->radio;
    }
    public function calculaVolumen()
    {
        $this->volumen = $this::PI * pow($this->radio, 2) * $this->altura;
    }
}
class Rectangulo extends Figura
{
    private $base;
    private $altura;
    private $profundidad;
    public function __construct($base, $altura, $profundidad = 1)
    {
        $this->base = $base;
        $this->altura = $altura;
        $this->profundidad = $profundidad;
    }
    public function calculaArea()
    {
        $this->area = $this->base * $this->altura;
    }
    public function calculaPerimetro()
    {
        $this->perimetro = 2 * ($this->base + $this->altura);
    }
    public function calculaVolumen()
    {
        $this->volumen = $this->profundidad * $this->base * $this->altura;
    }
}
class Comando
{
    private $figura;
    function __construct($figura)
    {
        $this->figura = $figura;
    }
    public function calculaAreaFigura()
    {
        $this->figura->calculaArea();
    }
    public function calculaPerimetroFigura()
    {
        $this->figura->calculaPerimetro();
    }
    public function calculaVolumenFigura()
    {
        $this->figura->calculaVolumen();
    }
    public function areaFigura()
    {
        return $this->figura->getArea();
    }
    public function perimetroFigura()
    {
        return $this->figura->getPerimetro();
    }
    public function volumenFigura()
    {
        return $this->figura->getVolumen();
    }
}
$comando1 = new Comando(new Circulo(3, 4));
$comando1->calculaAreaFigura();
$comando1->calculaPerimetroFigura();
$comando1->calculaVolumenFigura();
$comando2 = new Comando(new Rectangulo(2, 4, 4));
$comando2->calculaAreaFigura();
$comando2->calculaPerimetroFigura();
$comando2->calculaVolumenFigura();
echo 'El area con $comando1: ' . $comando1->areaFigura() . " unidades cuadradas<br/>";
echo 'El area con $comando2: ' . $comando2->areaFigura() . " unidades cuadradas<br/>";
echo 'El perimetro con $comando1: ' . $comando1->perimetroFigura() . " unidades cuadradas<br/>";
echo 'El perimetro con $comando2: ' . $comando2->perimetroFigura() . " unidades cuadradas<br/>";
echo 'El volumen con $comando1: ' . $comando1->volumenFigura() . " unidades cubicas<br/>";
echo 'El volumen con $comando2: ' . $comando2->volumenFigura() . " unidades cubicas<br/>";
