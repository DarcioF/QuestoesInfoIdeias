<?php


function PrimoInferior($numero){
    if($numero < 0){
       return 0;     
    }

    $primos = array();
    for($i = 1; $i <= $numero; $i++){
        $divisores = 0;
        for($j = $i; $j >= 1; $j--) {
            if (($i % $j) == 0) {
                $divisores++;
            }
        }
        if ($divisores == 2){
            array_push($primos, $i);
        }
    }
    return end($primos);
}

echo PrimoInferior(30);

?>