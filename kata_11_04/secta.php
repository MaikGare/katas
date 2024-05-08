<?php
$num = 123;


function reducirNum($num){

$array = array_map('intval', str_split($num));


for ($i = 0; $i < count($array); $i++){
    $suma = $array[$i] + $array[$i + 1];
    if ($suma > 9){
        $suma = array_map('intval', str_split($suma));
        reducirNum($suma);
    } 
}
return $suma;
}

echo reducirNum($num);

?>