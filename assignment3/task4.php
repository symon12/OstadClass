<?php

echo "Task 4: Multidimensional Array \n";
$studentGrade=array(
    "student1"=>array(
        "Math"=>85,
        "English"=>92,
        "science"=>70
    ),
    "student2"=>array(
        "Math"=>91,
        "English"=>87,
        "science"=>95
    ),
    "student3"=>array(
        "Math"=>67,
        "English"=>66,
        "science"=>77
    ),
);

function calculatorAveragesNumber($grade){
    foreach($grade as  $studentName =>$studentNumber){
        $AdditionNum=array_sum($studentNumber);
        $countNum=count($studentNumber);
        $AveragesNum= $AdditionNum / $countNum;
        echo "Average Grade for $studentName : $AveragesNum \n";
    }
}
calculatorAveragesNumber($studentGrade);


