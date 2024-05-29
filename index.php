<?php 

function esMatrizMagica($matriz) {
    
    if (!verificarFilas($matriz)) {
        return false;
    }

    if (!verificarColumnas($matriz)) {
        return false;
    }

    if (!verificarDiagonales($matriz)) {
        return false;
    }

    return true;
}
function verificarFilas($matriz) {

    foreach ($matriz as $fila) {
        $constanteMagica = array_sum($fila);
        if ($constanteMagica !== $matriz[0][0]) {
            return false;
        }
    }
    return true;
}

function verificarColumnas($matriz) {

    $tamanoMatriz = count($matriz);
    for ($i = 0; $i < $tamanoMatriz; $i++) {
        $sumaColumna = 0;
        for ($j = 0; $j < $tamanoMatriz; $j++) {
            $sumaColumna += $matriz[$j][$i];
        }
        if ($sumaColumna !==  $matriz[0][0]) {
            return false;
        }
    }
    return true;
}

function verificarDiagonales($matriz) {

    $tamanoMatriz = count($matriz);
    
    $sumaPrimeraDiagonal = 0;
    for ($i = 0; $i < $tamanoMatriz; $i++) {
        $sumaPrimeraDiagonal += $matriz[$i][$i];
    }
    if ($sumaPrimeraDiagonal !== $matriz[0][0]) {
        return false;
    }

    $sumaSegundaDiagonal = 0;
    for ($i = 0; $i < $tamanoMatriz; $i++) {
        $sumaSegundaDiagonal += $matriz[$i][$tamanoMatriz - $i - 1];
    }
    if ($sumaSegundaDiagonal !== $matriz[0][0]) {
        return false;
    }

    return true;
}



$matriz1 = [[2,7,6],
            [9,5,1],  
            [4,3,8]];

if (esMatrizMagica($matriz1)) {
    echo "La matriz es mágica.";
} else {
    echo "La matriz no es mágica.";
}



?>