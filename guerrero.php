<?php 

class Guerrero extends Jugador {

public string $nombreArma;

public function __construct(string $nickName, string $nombreArma){

    parent::__construct($nickName);

    $this->velocidad = 2;

    $this->nombreArma = $nombreArma;
    
}

public function correrArriba() {
    $this->velocidad = 2;
    if ($this->posicionY < 9) {
        $this->posicionY += $this->velocidad;
        echo "$this->nickName ha corrido hacia arriba a la posición ({$this->posicionX}, {$this->posicionY})" . PHP_EOL;
    } else {
        echo "Ouch. Hay una pared!" . PHP_EOL;
    }
}

public function correrAbajo() {
    $this->velocidad = 2;
    if ($this->posicionY > 0) {
        $this->posicionY -= $this->velocidad;
        echo "$this->nickName se ha movido hacia abajo a la posición ({$this->posicionX}, {$this->posicionY})" . PHP_EOL;
    } else {
        echo "Ouch. Hay una pared!" . PHP_EOL;
    }
}

public function correrDerecha() {
    $this->velocidad = 2;
    if ($this->posicionX < 9) {
        $this->posicionX += $this->velocidad;
        echo "$this->nickName se ha movido hacia la derecha a la posición ({$this->posicionX}, {$this->posicionY})" . PHP_EOL;
    } else {
        echo "Ouch. Hay una pared!" . PHP_EOL;
    }
}

public function correrIzquierda() {
    $this->velocidad = 2;
    if ($this->posicionX > 0) {
        $this->posicionX -= $this->velocidad;
        echo "$this->nickName se ha movido hacia la izquierda a la posición ({$this->posicionX}, {$this->posicionY})" . PHP_EOL;
    } else {
        echo "Ouch. Hay una pared!" . PHP_EOL;
    }
}

}

?>