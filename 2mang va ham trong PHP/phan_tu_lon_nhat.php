<?php
function biggest(){
    $big = [
        [32,42,12,42,53],
        [34,54,15,35,23],
        [65,43,73,13,99]
    ];
//phần tử ĐẦU TIÊN CỦA MẢNG 2 CHIỀU
    $max = $big[0][0];
//dung 2 vòng lặp để duyệt mảng đa chiều
    for ($i=0; $i < count($big); $i++){
        for ($j=0; $j < count($big[i]); $j++){
            if ($big[$i][$j] > $max){
                $max = $big[$i][$j];
            }
        }
    }
    echo $max;
    
}
biggest();
?>