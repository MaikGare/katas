<?php 

class Jugador{


    public string $nickName;
    public int $posicionX;
    public int $posicionY;
    public int $velocidad;

    public function __construct(string $nickName){
        $this->nickName = $nickName;
        $this->posicionX = 0;
        $this->posicionY = 0;
        $this->velocidad = 1;
    }
    
    public function moverArriba() {
        if ($this->posicionY < 9) {
            $this->posicionY += $this->velocidad;
            echo "$this->nickName se ha movido hacia arriba a la posición ({$this->posicionX}, {$this->posicionY})" . PHP_EOL;
        } else {
            echo "Ouch. Hay una pared!" . PHP_EOL;
        }
    }

    public function moverAbajo() {
        if ($this->posicionY > 0) {
            $this->posicionY -= $this->velocidad;
            echo "$this->nickName se ha movido hacia abajo a la posición ({$this->posicionX}, {$this->posicionY})" . PHP_EOL;
        } else {
            echo "Ouch. Hay una pared!" . PHP_EOL;
        }
    }

    public function moverDerecha() {
        if ($this->posicionX < 9) {
            $this->posicionX += $this->velocidad;
            echo "$this->nickName se ha movido hacia la derecha a la posición ({$this->posicionX}, {$this->posicionY})" . PHP_EOL;
        } else {
            echo "Ouch. Hay una pared!" . PHP_EOL;
        }
    }

    public function moverIzquierda() {
        if ($this->posicionX > 0) {
            $this->posicionX -= $this->velocidad;
            echo "$this->nickName se ha movido hacia la izquierda a la posición ({$this->posicionX}, {$this->posicionY})" . PHP_EOL;
        } else {
            echo "Ouch. Hay una pared!" . PHP_EOL;
        }
    }

}

?>