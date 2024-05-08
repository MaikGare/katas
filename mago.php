<?php 

class Mago extends Jugador{

    public array $hechizos;

    public function __construct(string $nickName, array $hechizos){

        parent::__construct($nickName);
        $this->hechizos = $hechizos;
    }

    public function lanzarHechizo($hechizoEscogido){
        if (isset($hechizoEscogido,$this->hechizos)){
            echo "Has lanzado el hechizo " . $hechizoEscogido;
        }
    }
}
?>