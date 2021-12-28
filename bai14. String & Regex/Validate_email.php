<?php
$email1 = "a@gmail.com ";
$email2 = "ab@gmail.com ";
$email3 = "abc@gmail.com ";
$email4 = "abc2@gmail.com ";
$email5 = "abc3@gmail.com ";

function pregmatch($email)
{
    $pattern = "/[a-z]{1,}\@[a-z]{1,}\.[a-z]{1,}/";
    if (preg_match_All($pattern, $email)) {
        echo $email . "hợp lệ" . "<br>";
    } else {
        echo $email . "không hợp lệ" . "<br>";
    }
}
pregmatch($email1);
pregmatch($email2);
pregmatch($email3);
pregmatch($email4);
pregmatch($email5);
