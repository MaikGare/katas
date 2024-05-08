<?php 

class Mago extends Jugador{

    public array $hechizos;

    public function __construct(string $nickName){

        parent::__construct($nickName);
        $this->hechizos = [];
    }
    public function anadirHechizo($hechizo) {
        $this->hechizos[] = $hechizo;
    }
    public function lanzarHechizo($hechizoEscogido){
        if (isset($hechizoEscogido,$this->hechizos)){
            echo $this->nickName . " ha lanzado el hechizo " . $hechizoEscogido . PHP_EOL;
        }
    }
}
?>