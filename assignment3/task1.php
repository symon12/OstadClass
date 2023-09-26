<?php
echo "Task 1: String Manipulation \n ";


function modifyText($manipulation){
    $lowerCase=strtolower($manipulation);
    $replace=str_replace("brown","red",$lowerCase);
    return $replace;
}
$text = "The quick brown fox jumps over the lazy dog.";

$result = modifyText($text);
echo $result;



