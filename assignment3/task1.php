<?php
echo "Task 1: String Manipulation \n ";


function modifyText($text){
    $lowerCase=strtolower($text);
    $modifiedText=str_replace("BROWN","RED",$lowerCase);
    echo $modifiedText;
}
$text = "THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG.";

modifyText($text);



