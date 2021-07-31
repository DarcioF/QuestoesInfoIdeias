<?php


function SeculoAno ($ano){
    $divisao = $ano / 100;
    $seculo = floor($divisao + 1);
    return  "século ". $seculo; 
}

echo SeculoAno(1999);

?>