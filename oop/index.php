<?php
include_once('Cachorro.class.php');
include_once('Gato.class.php');
include_once('Passarinho.class.php');


/*
interfaces
encapsulamento
polimorfismo
classes abstratas
sobrecar/overloading
visibilidade
construtores

*/

$tux = new Cachorro('amarelo', 30, true, 1, true, true);
$bob = new Cachorro('preto', 10, false, 3, true, true);
$rex = new Cachorro('caramelo', 15, false, 6, true, true);

$puma = new Gato('preto', 10, true, 1, true, true);
$flock = new Gato('branco', 13, true, 4, true, true);

$loro = new Passarinho('verde', 5, 4, 3, 2, 1);
$amarelinho = new Passarinho('amarelo', 6, 2, 5, 2, 2);

$tux::$nome = 'Tuxeeee';
$bob::$nome = 'Bobeeeee';
$rex::$nome = 'Pega rexxx';

echo "\nTux: ".Cachorro::$nome;
echo "\nBob: ".Cachorro::$nome;
echo "\nRex: ".Cachorro::$nome;

/*
Animal
    Mamifero
        Cachorro
        Gato
    Ave
        Passarinho
        Galo
*/