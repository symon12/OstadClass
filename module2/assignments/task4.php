<?php


function fibonacci($series){
    $num = 0;  
    $n1 = 0;  
    $n2 = 1;   
    echo $n1.", ".$n2.", ";
    for($i=0; $i<$series; $i++){
        $n3 = $n2 + $n1;  
        echo $n3.', ';  
        $n1 = $n2;  
        $n2 = $n3;  
        
        $num = $num+1;
    }
    
}

fibonacci(15);