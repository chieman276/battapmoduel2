<?php
function sallest() {
$sma= [9,3,5,7,4,8];
$min =$sma[0];
for ($i= 1; $i <count($sma); $i++) {
    if ($sma[$i] < $min) {
        $min = $sma[$i];
    }
}
// echo "<pre>";
// print_r($sma) ;
// echo "</pre>";
echo $min;
}
sallest();
?>



