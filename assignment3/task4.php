<?php
/*
Task 3: Array Sorting  

Create an array called $grades with the following values: 85, 92, 78, 88, 95. Write a PHP function which takes "$grades" as an argument to sort the array in descending order and print the sorted grades as array.
*/


$studentGread = array(
    array(
            "Math" => 82,
            "English" => 56,
            "Science" => 96
        ),
    array(
        "Math" => 75,
        "English" => 33,
        "Science" => 74
    ),
    array(
        "Math" => 85,
        "English" => 65,
        "Science" => 67
    ));

function calculatorAveragesNumber($grade){
    foreach($grade as  $studentNumber){
        $AdditionNum=array_sum($studentNumber);
        $countNum=count($studentNumber);
        $AveragesNum= $AdditionNum / $countNum;
        echo "Average Grade for : $AveragesNum \n";
    }
}
calculatorAveragesNumber($studentGread);



