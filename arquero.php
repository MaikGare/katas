<?php 

class Arquero extends Jugador{

    public string $nombreArco;
    public int $numeroFlechas;

    public function __construct(string $nickName, string $nombreArco, int $numeroFlechas){

        parent::__construct($nickName);
        $this->nombreArco = $nombreArco;
        $this->numeroFlechas = $numeroFlechas;
    }

    public function dispararFlecha(){
        $flechasRestantes = $this->numeroFlechas - 1;
        echo "Has disparado una flecha, te quedan " . $flechasRestantes . PHP_EOL;
    }
}
?>