<?php
// $n=1;
// $name=[
//     "symon",
//     "rumpa",
//     123,
//     "tumpa",
// ];
// // $counts[2]="mitu";
// $n=count($name);
// for($i=0;$i<$n;$i=$i+1){
//     echo $name [$i];
// }

// for ($x=1; $x<=5; $x=$x+1)   
// {  
//   $factorial = $x * $x; 
//   echo $factorial; 
// }  

// function getFactorial($number){
//     if ($number >= 0 && filter_var($number, FILTER_VALIDATE_INT)) {
//         $factorial = 1;
//         for ($i = 1; $i <= $number; $i++) {
//             $factorial *= $i;
//         }
    
//         return "The factorial number is: $factorial";
//     }else{
//         return "The number is invalid";
//     }


// }
// echo getFactorial(5);


//call back funtion ======>

// function add($x1,$x2){
//     echo  $x1,$x2;
// }
// function add2($d1,$d2){
//     echo $d1,$d2;
// }

// function process($n1,$n2,$cb){
//     if(is_callable($cb)){
//         $cb( $n1,$n2);
//     }else{
//         echo "It's not function";
//     }

//     // is_callable($cb);
//     // $cb($n1,$n2);

// }
// process(10,30,"add2");


// $number=array(1,2,3,4,5,6,7,8);

// function isEven($n) {
// return $n%2==0  ;  
// }
// $arrayfilt=array_filter($number,"isEven");
// print_r($arrayfilt);

// $number=array(1,2,3,4,5,6,7,8);

// function isEven($n) {
// if($n%2==1){
//     return true;
// } else{
//     return false;
// } 
// }
// $arrayfilt=array_filter($number,"isEven");
// print_r($arrayfilt);

// $person=[
// ["name"=>"s","gander"=>"m"],
// ["name"=>"t","gander"=>"f"],
// ["name"=>"a","gander"=>"m"],
// ["name"=>"m","gander"=>"f"]
// ];

// function isMale($person){
//     if($person["gander"]=="m"){
//         return true;
//     }
//         return false;

// }

// function isfemale($person){
//     if($person["gander"]=="f"){
//         return true;
//     }
//         return false;
// }

// $search=array_filter( $person, "isMale");
// $search=array_filter( $person, "isfemale");
// print_r($search);

// $name="symon";

// function change(&$name){  //& hocca name pass kora 
// $name ="new name";
// }
// change($name);
// echo $name;

$number=[1,2,3,4,5,6,7];
// function squre($n){
//     return $n*$n;
// }
// function qub($n){
// return $n*$n*$n;
// }

///pora korbo=====

// $number=1;

// for($i=0;$i<count($number);$i=$i+1){
//         $number=$i*$i;
//         echo $number[$i];
// }

$student=[
    "symon",
    "tumpa",
    "rumpa",
    123

];


// $student[3]="mitu";

// $students=array_shift($student);
// $students=array_pop($student);
// array_push($student,"jamal");
// array_unshift($student,"kabir");
// $student[]="ahad";
// array_splice($student,1,2,array("imran","jabed"));

// $students=array_slice($student,1,2);
// print_r($students);

//====================================>>>>

for($i=0;$i<count($student);$i=$i+1){
echo $student[$i]."\n";
}




