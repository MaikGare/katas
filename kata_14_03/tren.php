<?php 

$suma = 0;

for ($i=1; $i <= 10; $i++) { 
    echo "Introduce un número: " ;
    fscanf(STDIN, "%s", $num);
    $suma += $num;
    echo $suma . "/67  " . "|||  intentos: " . $i . "/10 ";
}

if ($suma == 67) {
    echo "Has activado el freno de emergencia.";
} else {
    echo "No has activado el freno, te comen los zombies.";
}

$suma = 0;
for ($i=1; $i <= 10; $i++) { 
    echo "Introduce un número: " ;
    fscanf(STDIN, "%s", $num);
    $suma += $num;
   // echo $suma . "/67 " . "- intentos: " . $i . "/10 ";
}

if ($suma == 81) {
    echo "Has activado el freno de emergencia.";
} else {
    echo "No has activado el freno, te comen los zombies.";
}
?>