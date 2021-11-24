<?php

class Dado {

    private $minNumDado = 1;
    private $maxNumDado = 12;

    public function getMinNum () {
    return $this->minNumDado;
    }

    public function getMaxNum () {
    return $this->maxNumDado;
    }

    public function tirarDado() {
    return rand($this->getMinNum(), $this->getMaxNum());
}
}

?>