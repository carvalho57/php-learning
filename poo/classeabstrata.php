<?php 

# CLASSES ABSTRATAS

abstract class Forma
{
    public $largura = 100;
    public $altura = 200;

    abstract public function area();

    function altura() {
        return $this->altura();
    }
}

// $quadrado = new Forma();

class Retangulo extends Forma 
{
    public function area()
    {
        return $this->largura * $this->altura;
    }
}


$retangulo = new Retangulo();
echo $retangulo->area();