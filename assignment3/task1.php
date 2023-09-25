<?php

$text=("THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG.");
$arrayReplace=str_replace("BROWN","RED",$text);
echo  "Replace 'RED': {$arrayReplace} <br/><br/>";

$lowerCase=strtolower($arrayReplace);
echo "Replace Lower Case : {$lowerCase}";
 