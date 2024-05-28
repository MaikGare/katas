<?php
/*Hola, recuerdo que en la explicación post-kata digiste que no era necesario hacer funciones, pero ya que lo hice así en su momento
te lo mando así tal cual, si eso solo sería quitar las funciones y dejar las lógicas de dentro*/
function contarFor(){

    $contador = 0;

    for ($i=0; $i < 10; $i++) { 
        echo $contador += 1;
    }

    echo PHP_EOL;
}
contarFor();


function contarWhile(){

    $contador = 0;
    while ($contador < 10) {
        echo $contador += 1;    
    }

    echo PHP_EOL;
}

contarWhile();

function contarDoWhile(){

    $contador = 0;

    do {
        echo $contador += 1;
    } while ($contador < 10);

    echo PHP_EOL;
}

contarDoWhile();

function contarArray(array $contador){

    foreach ($contador as $numero) {
        echo $numero;
    }

        echo PHP_EOL;
}

contarArray([1,2,3,4,5,6,7,8,9,10]);

function contarRecursiva($contador){

    if($contador == 10){
        echo $contador;
    } else {
        echo $contador;
        contarRecursiva($contador + 1);
    }
    PHP_EOL;
}

contarRecursiva(1);
?>