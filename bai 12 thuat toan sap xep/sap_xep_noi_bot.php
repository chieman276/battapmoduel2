<?php
// phương thức bubbleSort($list) 
function bubbleSort($list){
    //
    for ($i = 0; $i < count($list)-1;$i++){
        for($j = count($list) -1; $j > $i; $j--)
        {
            if ($list[$j] < $list[$j -1])
            {
                $t = $list[$j - 1];
                $list[$j-1] = $list[$j];
                $list[$j] = $t;
            }
        }
    }
    return $list;
    
}
$list = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
foreach(bubbleSort($list) as $key => $value){
    echo $value." ";
}
?>