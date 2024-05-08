<?php 

class Guerrero extends Jugador {

public string $nombreArma;

public function __construct(string $nickName, string $nombreArma){

    parent::__construct($nickName);

    $this->velocidad = 2;

    $this->nombreArma = $nombreArma;
    
}


}

?>