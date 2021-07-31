<?php

function SequenciaCrescente($array){
    if(count($array) == 1){
        print_r($array);
        echo "<br>";
        echo "TRUE";
    }
    $crescente = false;
    for( $i = 0; $i< count($array) ;$i++){
        $array_verificar = $array;
        array_splice($array_verificar, $i, 1);
        if(isCrescente($array_verificar)){
            $crescente = true ;
            break;
        }
    }
    if( $crescente ){
        print_r($array);
        echo "<br>";
        echo "TRUE";
    }else{
        print_r($array);
        echo "<br>";
        echo "FALSE";
    }
}

function isCrescente($array){
    for( $i = 1 ; $i < count($array) ;$i++){
         if($array[$i - 1] >= $array[$i] ){
            return false;
        } 
    }
    return true;
}
 
echo SequenciaCrescente([3, 5, 67, 98, 3]);

?>