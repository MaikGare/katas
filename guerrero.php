<?php 

class Guerrero extends Jugador {

public string $nombreArma;

public function __construct(string $nickName, string $nombreArma){

    parent::__construct($nickName);

    $this->nombreArma = $nombreArma;
    
}

public function moverJugador(){
    
}

}

?>