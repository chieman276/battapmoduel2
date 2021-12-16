
<?php
$array =[1,3,5,4,7,2,9,8];
$min = $array[0];
for ($i = 0; $i < count($array); $i++){
    if ($array[$i] < $min){
        $min = $array[$i];
    }
}
echo $min;