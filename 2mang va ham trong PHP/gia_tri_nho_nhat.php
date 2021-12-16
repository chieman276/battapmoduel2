<?php
$sma =[34,32,65,37,42];
$min = $sma[0];
for ($i= 0; $i < count($sma); $i++) {
    if ($sma[$i] < $min){
        $min = $sma[$i];
    }

}
echo $min;