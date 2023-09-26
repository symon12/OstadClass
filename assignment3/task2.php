<?php
echo "Task 2: Array Manipulation <br/><br/>";

function isEven($num){
return $num%2!==0;
}
$numbers=[1,2,3,4,5,6,7,8,9,10];
$evenNumber=array_filter($numbers,"isEven");
print_r($evenNumber);

