<?php

require_once('Animal.class.php');

class Passarinho extends Animal {
    private int $cantador;
    private bool $bico;

    function __construct(string $cor, int $altura, bool $agitado, int $cantador, int $patas, bool $bico) {
        parent::__construct($cor, $altura, $agitado, $patas);
        $this->cantador = $cantador;
        $this->bico = $bico;
    }
        
}



