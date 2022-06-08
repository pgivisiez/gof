<?php

require_once('Mamifero.class.php');

class Cachorro extends Mamifero {
    private int $latido;
    static public $nome;

    function __construct(string $cor, int $altura, bool $agitado, int $latido, int $patas, bool $fucinho) {
        parent::__construct($cor, $altura, $agitado, $patas, $fucinho);
        $this->setLatido($latido);
    }
        
    public function setLatido(int $latido) {
        $this->latido = $latido;
    }
    public function getLatido() : int {
        return $this->latido;
    }

    static function late() {
        return 'au au';
    }

}



