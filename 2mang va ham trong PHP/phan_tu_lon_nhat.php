<?php
function biggest(){
    $big = [
        [32,42,12,42,53],
        [34,54,15,35,23],
        [65,43,73,13,99]
    ];
    $max = $big[0][0];
    for ($i=0; $i < count($big); $i++){
        for ($j=0; $j < 5; $j++){
            if ($big[$i][$j] > $max){
                $max = $big[$i][$j];
            }
        }
    }
    echo $max;
    
}
biggest();
?>