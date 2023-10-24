<?php

require_once "Character.php";
require_once "Goku.php";
require_once "Vegeta.php";
require_once "Krilin.php";

$goku = new Goku();
echo $goku->specialAttack() . PHP_EOL;

$vegeta = new Vegeta();
echo $vegeta->attack(). PHP_EOL;

// ¿Cómo hacemos para que Krilin use también el Hamekameha?
$krilin = new Krilin();
echo $krilin->specialAttack() . PHP_EOL;

