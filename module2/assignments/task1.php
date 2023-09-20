<?php 
 

function getEvenNumberByFor($starting, $ending) {
    for ($i=($starting-1); $i <= $ending ; $i+=2) { 
        if ($i%2==0) {
            echo "The even number is: ".$i."<br>";
        }
    }
}



function getEvenNumberByWhile($starting1, $ending1) {
    $j= ($starting1-1);
    while($j <= $ending1 ) {         
        if ($j%2==0) {
            echo "The even number is: ".$j."<br>";
        }
        $j+=2;
    }
}


function getEvenNumberByDoWhile($starting2, $ending2) {
    $k= ($starting2-1);
    do{
        
        if ($k%2==0) {
            echo "The even number is: ".$k."<br>";
        }
        $k+=2;
    }while ($k<=$ending2);
        
    }
    echo "<br/>Even By For Loop :<br><br/>";
getEvenNumberByFor(1,20);


    echo "<br/>Even By While Loop :<br><br/>";
getEvenNumberByWhile(1,20);

      echo "<br/>Even By Do While Loop :<br/><br/>";
getEvenNumberByDoWhile(1,20);


