<?php
$class1 = "C0318G";
$class2 = "M0318G";
$class3 = "P0323A";
function pregMatch($class){
$pattern = "/^[C|A|P][0-9]{4}[G|H|I|K|L|M]/";

if (preg_match($pattern,$class)){
    echo $class . ":lớp hợp lệ" . "<br>";
}else{
    echo $class . ":lớp không hợp lệ" . "<br>";
}
}
pregMatch($class1);
pregMatch($class2);
pregMatch($class3);