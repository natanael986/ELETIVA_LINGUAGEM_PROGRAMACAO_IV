<?php

class Matricial extends Impressora {

    private $numAgulhas;
    private $imprimeVias;

    public function __construct($marca, $modelo, $numAgulhas,
            $colorida, $imprimeVias, $peso)
    {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setNumAgulhas($numAgulhas);
        $this->setColorida($colorida);
        $this->setImprimeVias($imprimeVias);
        $this->setPeso($peso);
    }

    public function getNumAgulhas(){
        return $this->numAgulhas;
    }

    public function setNumAgulhas($numAgulhas){
        $this->numAgulhas = $numAgulhas;
    }

    public function getImprimeVias(){
        return $this->imprimeVias;
    }

    public function setImprimeVias($imprimeVias){
        $this->imprimeVias = $imprimeVias;
    }

}