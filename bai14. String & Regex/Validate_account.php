<?php
$account1  ="123abc_";
$account2  ="_abc123";
$account3  ="______";
$account4  ="12345";

function ktaccount($account){
    $pattern = "/^[_a-z0-9]{6,}$/";
    if(preg_match_All($pattern,$account)){
        echo $account . " " ."tài khoản hợp lệ" . "<br>";
    }else{
        echo $account . " " ."tài khoản không hợp lệ" . "<br>"; 
    }
}
ktaccount($account1);
ktaccount($account2);
ktaccount($account3);
ktaccount($account4);
