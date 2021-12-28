<?php
$email1 = "a@gmail.com";
$email2 = "ab@gmail.com";
$email3 = "abc@gmail.com";
$email4 = "acs2@gmail.com";
$email5 = "awx3@gmail.com";
function pregmatch1($email){
$pattern = "/[a-z]{1,}\@[a-z]{1,}\.[a-z]{1,}/";
if (preg_match_All($pattern,$email)){
    echo $email . " ". "Email hợp lệ" . "<br>";
}else {
    echo $email . " ". "Email không hợp lệ" . "<br>";
}
}
pregmatch1($email1);
pregmatch1($email2);
pregmatch1($email3);
pregmatch1($email4);
pregmatch1($email5);
