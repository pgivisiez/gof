<?php

class Animal {
    private String $cor;
    private int $altura;
    private bool $agitado;
    private int $patas;

    function __construct(string $cor, int $altura, bool $agitado, int $patas) {
        $this->setCor($cor);
        $this->setAltura($altura);
        $this->setAgitado($agitado);
        $this->patas = $patas;
    }
    
    public function setCor(string $cor) {
        $this->cor = $cor;
    }
    public function getCor() : string {
        return $this->cor;
    }
    
    public function setAltura(int $altura) {
        $this->altura = $altura;
    }
    public function getAltura() : int {
        return $this->altura;
    }
    
    public function setAgitado(bool $agitado) {
        $this->agitado = $agitado;
    }
    public function isAgitado() : bool {
        return $this->agitado;
    }
        

}



