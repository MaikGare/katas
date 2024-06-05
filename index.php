<?php 

function escribirResultados($numero) {
    $archivo = fopen("calculs_$numero.txt", "w");
    if ($archivo) {
        $cuadrado = calcularCuadrado($numero);
        $cubo = calcularCubo($numero);
        $factorial = calcularFactorial($numero);

        fwrite($archivo, "Número: $numero\n");
        fwrite($archivo, "Cuadrado: $cuadrado\n");
        fwrite($archivo, "Cubo: $cubo\n");
        fwrite($archivo, "Factorial: $factorial\n");

        fclose($archivo);
        echo "Se han escrito los cálculos en el archivo calculs_$numero.txt" . PHP_EOL;
    } else {
        echo "No se pudo abrir el archivo para escritura.";
    }
}
function calcularCuadrado($numero) {
    return $numero * $numero;
}

function calcularCubo($numero) {
    return $numero * $numero * $numero;
}

function calcularFactorial($numero) {
    if ($numero == 0 || $numero == 1) {
        return 1;
    } else {
        return $numero * calcularFactorial($numero - 1);
    }
}

$num1 = 3; 
$num2 = 8;
$num3 = 5;

escribirResultados($num1);
escribirResultados($num2);
escribirResultados($num3);
?>