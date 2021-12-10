<?php
//khai báo hàm
function smallest() {
    //tạo mảng
    $sma =[31,34,68,32,94,27];
    $min = $sma[2];
    for ($i= 0; $i < count($sma); $i++) {
        if ($sma[$i] < $min){
            $min = $sma[$i];
        }

    }
    echo $min;
}
smallest();
?>