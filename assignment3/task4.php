<?php

echo "Task 4: Multidimensional Array \n";

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


