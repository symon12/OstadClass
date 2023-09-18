<?php
// $num = 10;
// $num2= 10;

// if($num==$num2){
//     echo "they are true";  //dabule equal means valu same hota hoba nahola false asba
// }else{
//     echo "they are folase";
// }

// $num = 10;
// $num2= "10";

// if($num===$num2){             //triple equal means data type same hota hoba and valu same thakta hoba;
//     echo "they are true";
// }else{
//     echo "they are folase";
// }

//logic gate ========>

// $age =10;
// if($age>=9 && $age<=10){    // && and operator HOLO 2ta valu true hota haba tahola true part print hoba
//     echo "you are true";
// }else{
//     echo "you are false";
// }

// $age =10;
// if($age>=11 || $age<=12){    // || or operator HOLO 2ta valu true hola  true part print hoba abr 1ta valu true hola  true part print hoba

//     echo "you are true";
// }else{
//     echo "you are false";
// }


// $age =10;
// if(!($age>=11 )){    // ! logical not  operator HOLO if jodi ture hoi not logical ai operator false kora dai

//     echo "you are true";
// }else{
//     echo "you are false";
//}

//xor operator kaj hocca 2ta valu true hola false hoi abr 2ta valu false hola false hoi abr jodi akta valu true hoi tahola xor operator take true kora dai



// $number=33;
// $number2=14;

// $motNumber= $number<$number2? "the number is large".$number:($number2>$number?"the number is large2".$number2:"the number is equal");
// echo $motNumber;


//today class date 13/09/2023======================================>>>


// for($x=0;$x<11;$x++){
//     echo "$x hey name is symon  <br/> ";
// }

// $i=0;

// while($i<10){
//     echo "$i my name is symon <br/>";
//     $i++;
// }

// $i=10;
// do{
//     $i--;
//     echo "$i my name is symon <br/>";
// }while($i>0);

// $name=array("ahad","fahad","symon","rumpa");
// foreach($name as $allname){
//     echo "$allname<br/>";
// }

//entry control loop
// for($x=1;$x<101;$x=$x+33){
//     echo "$x my name is symon <br>";
// }

// for($x=1;$x<=10;$x++){
//      echo $x;
     
//  }

//exit control loop
// $i=0;
//  while($i<=10){
//     echo "$i <br/>";
//     $i++;
//  }

// $i=0;
// do{
// echo $i;
// $i++;
// }
// while ($i<=10);

// $colors =array("red", "yellow", "green", "black");
// foreach($colors as $eachItem){
//     echo "$eachItem <br/>";
// }

//string a koi ta akkor aca ata=========>

// $name= "shrower  hossen symon ";
// $word=strlen($name);               
// echo $word;

 // user define funtion=====>
 
// function add(){
//     $x = 10;
//     $y =12;
//     echo  "<br> $x+$y";
// }
// add() ;
// add();
// add();

//funtion paramiter pass kora========>

// function add($x,$y){
    
//     echo   $x+$y;
// }
// add(1,4) ;
// add(2,4) ;
// add(3,4) ;

//function default valu --> single / multiply /all =====>

// function add($x,$y,$c ,$d=100){
    
//     echo   $x+$y+$c+$d;
// }
// add(1,4,3) ;

//function paramiter data type float/int/bolean/string ======>

// function twonumbr( int $number, string $name){
//     echo "hey my old is $number and my name is $name ";
// }
// twonumbr(30 , "symon");

//function strict mode=======>  php Multi params data type -> hinting=========>

// declare(strict_types =1); //php 1mens true 0 in false

// function myself( int $number, string $name){
//     echo "hey my old is $number and my name is $name ";
// }
// myself("30" , "symon"); //strict mode on

// for($x=1; $x<=5 ;$x++){
//     echo $x . PHP_EOL  ;
// }
// for($i=1; $i<=2; $i++){
//     echo "Namta :$i <br />";
//     for($j=1; $j<=10; $j++ ){
//         $num= $i*$j ;
//         echo "$i x $j =$num <br>";
//         // exit;
//     }
//     echo "<br />";
// }

//php type null===============>

// function symon(?string $text){
//     echo $text;
// }
// symon("samir");
// symon(null);

//variadic function===========>

// function sum(...$sum1){
//     echo array_sum($sum1);
// }
// sum(1, 2, 3,4 ,5);

//php select funtion

// function sum(...$sum1){
//     echo $sum1[1];  //sum a okkor gulu select kora 0 hola 1 okkor 1hola 2 okkor
// }
// sum(1, 2, 3,4 ,5);

//num vehin funtion anonymous funtion ======>

// (function () {
//     $age =1;
//     $age2= 2;
//     echo $age +$age2;

// }
// )
// ();

// $fun=(function () {
//     $age =1;
//     $age2= 2;
//     echo $age +$age2;

// }
// )
// $fun();

//arrow funtion

// $bada= fn($x,$y)=>$x +$y;

// echo $bada(10,20);

//fruntion  retun=======>

// function symon($x , $y):float|int|bool|string{    //void lekla sa kicu retun korba na
//     $sum = ($x+$y)/2;
//     return $sum;
// }
// echo symon(12,12)+10;

//null retun type and smart way================>

// function symon($s,$k):?int{
//     $sum= ($s+$k)/2;
//     return $sum;
// }
// echo symon(12,12)+20;



//today class date 17/09/2023==================================>>>


//scop===> local scop | global scop


function FunctionName(){
    $mes= "hello would";
    echo $mes;
}
FunctionName();

$name="my name is symon";

function varr(){
    global $name;
    echo $name;
}
varr();

//call back function=========>






    

