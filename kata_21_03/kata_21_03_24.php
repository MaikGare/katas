<?php 

$numero1 = 153;
$numero2 = 204;

$arrayNum1 = array_map('intval', str_split($numero1));
$arrayNum2 = array_map('intval', str_split($numero2));

function isArmstrong(array $arrayNum, int $numero) : string {
    $potencia = count($arrayNum);
    $resultado = 0;
    
    foreach ($arrayNum as $num) {
        $numeroElevado = pow($num, $potencia);
        $resultado += $numeroElevado;
    }
    if ($resultado == $numero){
        return $numero . " es un número de Armstrong.";
    } else {
        return $numero . " no es un número de Armstrong.";
    }
}

echo isArmstrong($arrayNum1,$numero1);

echo isArmstrong($arrayNum2,$numero2);

?>