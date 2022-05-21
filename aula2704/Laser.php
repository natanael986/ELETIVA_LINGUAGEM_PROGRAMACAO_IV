<?php

class Laser extends Impressora{
    private $frenteVerso;
    private $capacidadeToner;

    public function __construct($marca, $modelo, $frenteVerso, $colorida, $capacidadeToner, $peso)
    {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setFrenteVerso($frenteVerso);
        $this->setColorida($colorida);
        $this->setCapacidadeToner($capacidadeToner);
        $this->setPeso($peso);
    }

    public function getCapacidadeToner(){
        return $this->capacidadeToner;
    }
    public function setCapacidadeToner($capacidadeToner){
        $this->capacidadeToner = $capacidadeToner;
    }
    public function getFrenteVerso(){
        return $this->imprimeVias;
    }
    public function setFrenteVerso($frenteVerso){
        $this->frenteVerso = $frenteVerso;
    }
}