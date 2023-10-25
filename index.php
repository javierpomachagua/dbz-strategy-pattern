<?php

require_once "Character.php";
require_once "Goku.php";
require_once "Vegeta.php";
require_once "Krilin.php";
require_once "Dende.php";
require_once "AttackBehavior.php";
require_once "Hamekameha.php";
require_once "Gohan.php";
require_once "Masenko.php";
require_once "NoAttack.php";
require_once "BigBang.php";

// Ahora podemos usar varios ataques y asignarlos
// dinámicamente a un personaje
$gohan = new Gohan(new Masenko());
echo $gohan->attack() . PHP_EOL;
$gohan->setAttackBehavior(new Hamekameha());
echo $gohan->attack() . PHP_EOL;

// Podemos usar un comportamiento específico
// para personajes que no atacan
$dende = new Dende(new NoAttack());
echo $dende->attack(). PHP_EOL;

// Podemos dejar un comportamiento predeterminado
$vegeta = new Vegeta();
echo $vegeta->attack(). PHP_EOL;
$vegeta = new Vegeta(new NoAttack());
echo $vegeta->attack(). PHP_EOL;


