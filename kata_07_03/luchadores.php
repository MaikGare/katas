<?php 

class Luchador{

    public const int VIDA = 10;
    public int $fuerza;
    public int $defensa;

    public function __construct($fuerza,$defensa){
        
        $this->fuerza = $fuerza;
        $this->defensa = $defensa;
        
    }
    public function Combatir($luchador1,$luchador2) {

        if($luchador1->$this->fuerza == $luchador2->$this->fuerza){
            $ataque = rand(1,10);
            if($ataque >= 1 && $ataque < 6){
                $daño = $luchador1->$this->fuerza - $luchador2->$this->defensa;
                $resultado = $luchador2->VIDA - $daño;
            } else {
                $daño = $luchador2->$this->fuerza - $luchador1->$this->defensa;
                $resultado = $luchador1->VIDA - $daño;
            }
        } elseif ($luchador1->$this->fuerza > $luchador2->$this->fuerza) {
            $ataque = rand(1,10);
            if($ataque >= 1 && $ataque < 8){
                $daño = $luchador1->$this->fuerza - $luchador2->$this->defensa;
                $resultado = $luchador2->VIDA - $daño;
            } else {
                $daño = $luchador2->$this->fuerza - $luchador1->$this->defensa;
                $resultado = $luchador1->VIDA - $daño;
            }
        } elseif ($luchador2->$this->fuerza > $luchador1->$this->fuerza) {
            $ataque = rand(1,10);
            if($ataque >= 1 && $ataque < 8){
                $daño = $luchador2->$this->fuerza - $luchador1->$this->defensa;
                $resultado = $luchador1->VIDA - $daño;
            } else {
                $daño = $luchador1->$this->fuerza - $luchador2->$this->defensa;
                $resultado = $luchador2->VIDA - $daño;
            }
        }
    }
}    
?>