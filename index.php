<?php 
require_once "jugador.php";
require_once "arquero.php";
require_once "guerrero.php";
require_once "mago.php";

$arquero = new Arquero("Antonio","arco chuli",5);

$arquero->dispararFlecha();
$arquero->dispararFlecha();
$arquero->dispararFlecha();

$arquero->moverArriba();
$arquero->moverArriba();
$arquero->moverAbajo();
$arquero->moverIzquierda();

$guerrero = new Guerrero("Dart","Matagragones");

$guerrero->moverArriba();
$guerrero->correrArriba();

$mago = new Mago("Magordito");
$mago->anadirHechizo("Tormenta de legumbres");
$mago->moverDerecha();
$mago->moverAbajo();
$mago->lanzarHechizo("Tormenta de legumbres");
?>