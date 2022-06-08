<?php

require_once('Animal.class.php');

class Mamifero extends Animal {
    private bool $fucinho;

    function __construct(string $cor, int $altura, bool $agitado,  int $patas, bool $fucinho) {
        parent::__construct($cor, $altura, $agitado, $patas);
        $this->fucinho = $fucinho;
    }
        

}



