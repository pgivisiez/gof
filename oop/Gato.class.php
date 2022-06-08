<?php

require_once('Mamifero.class.php');

class Gato extends Mamifero {
    private int $miado;

    function __construct(string $cor, int $altura, bool $agitado, int $miado, int $patas, bool $fucinho) {
        parent::__construct($cor, $altura, $agitado, $patas, $fucinho);
        $this->miado = $miado;
    }    

}



