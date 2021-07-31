<?php


function SortArray(){
    $array = array();
    for($i = 0; $i < 20; $i++){   
        array_push($array, rand(1,10));
    }
    RepeatNum($array);
}

function RepeatNum($array){
    $valores = array_count_values($array);
    for($i = 0; $i < count($array); $i++){   
            echo $array[$i] . ", "; 
    }
    arsort($valores);
    $mode = key($valores);
    echo "<br>";
    echo "<br>";
    echo "O número que mais se repete é o  ". $mode ;
    echo "<br>";
    echo "Ele se repete ".  $valores[$mode]." vezes";
    return   $mode;
}
  SortArray();

?>