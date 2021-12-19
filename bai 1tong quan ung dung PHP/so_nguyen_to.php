<?php
function isPrimeNumber($number) {
    // so nguyen n < 2 khong phai la so nguyen to
    if ($number < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    $soNgTo = sqrt ( $number );
    for($i = 2; $i <= $soNgTo; $i ++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
 
echo ("Các số nguyên tố nhỏ hơn 100 là: <br>");
for($i = 0; $i < 100; $i ++) {
    if (isPrimeNumber ( $i )) {
        echo ($i . " ");
    }
}
?>