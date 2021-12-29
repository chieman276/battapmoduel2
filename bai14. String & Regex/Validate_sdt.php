<?php
$phone1 = "(84)-(0978489648)";
$phone2 = "(a8)-(22222222)";
function pregMatch($phone){
    $pattern = "/\([0-9]{2}\)\-\([0]{1}[0-9]{9}\)/";
    if(preg_match($pattern,$phone)){
        echo  $phone . ":Số điện thoại hợp lệ" . "<br>";

    }else {
        echo  $phone . ":Số điện thoại không hợp lệ" . "<br>";
    }
}
pregMatch($phone1);
pregMatch($phone2);