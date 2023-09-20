<?php

$num = 0;  
$n1 = 0;  
$n2 = 1; 
echo $n1.", ".$n2.", ";
while ($num <11 )  
{  
    
    $n3 = $n2 + $n1;  
    if($n3 > 100){
        break;
    }
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num+1;
    
  
}

