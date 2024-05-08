<?php 
require_once "jugador.php";
require_once "arquero.php";

$arquero = new Arquero("Antonio","arco chuli",5);

$arquero->dispararFlecha();
$arquero->dispararFlecha();
$arquero->dispararFlecha();

$arquero->moverArriba();
$arquero->moverArriba();
$arquero->moverAbajo();
$arquero->moverIzquierda();
?>