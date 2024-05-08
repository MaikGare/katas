<?php 



function isArmstrong(int $numero) : string {
    $arrayNum = array_map('intval', str_split($numero));

    $potencia = count($arrayNum);
    $resultado = 0;
    
    foreach ($arrayNum as $num) {
        $numeroElevado = pow($num, $potencia);
        $resultado += $numeroElevado;
    }
    if ($resultado == $numero){
        return $numero . " es un número de Armstrong." . "<br>";
    } else {
        return $numero . " no es un número de Armstrong." . "<br>";
    }
}

echo isArmstrong(153);

echo isArmstrong(370);

echo isArmstrong(985);

echo isArmstrong(8208);

?>