<?php

class Banco {
    private $host;
    private $user;
    private $pass;
    private $porta;
    private $banco;

    private static $instancia;

    function __construct($host) {
        $this->host = $host;
    }

    function getHost() {
        return $this->host;
    }

    static function novo($host) {
        if (!self::$instancia) {
            self::$instancia = new Banco($host);
        }
        return self::$instancia;
    }
}


for ($i=0;$i<100;$i++) {
    $my1 = Banco::novo('10.0.0.'.$i);
    echo $my1->getHost()."\n";
}

