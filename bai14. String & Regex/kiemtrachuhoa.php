<?php
function isFirstLetterUpperCase($str)
{
    $regexp = '/^[A-Z]/';
    if (preg_match($regexp, $str)) {
        echo ("String's first character is uppercase");
    }else {
        echo ("string's first character is not uppercase");
    }
}
isFirstLetterUpperCase('Codegym');
isFirstLetterUpperCase('cdegym');
