<?php
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

//function strict mode=======>

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

// function symon(?string $text){
//     echo $text;
// }
// symon("samir");
// symon(null);

// function sum(...$sum1){
//     echo array_sum($sum1);
// }
// sum(1, 2, 3,4 ,5);

// function sum(...$sum1){
//     echo $sum1[1];  //sum a okkor gulu select kora 0 hola 1 okkor 1hola 2 okkor
// }
// sum(1, 2, 3,4 ,5);

//num vehin funtion

// (function () {
//     $age =1;
//     $age2= 2;
//     echo $age +$age2;

// }
// );
// ();

// $fun=(function () {
//     $age =1;
//     $age2= 2;
//     echo $age +$age2;

// }
// );
// $fun();

//arrow funtion

// $bada= fn($x,$y)=>$x +$y;

// echo $bada(10,20);

//fruntion  retun

// function symon($x , $y):float|int|bool|string{    //void lekla sa kicu retun korba na
//     $sum = ($x+$y)/2;
//     return $sum;
// }
// echo symon(12,12)+10;

//null retun type and smart way

// function symon($s,$k):?int{
//     $sum= ($s+$k)/2;
//     return $sum;
// }
// echo symon(12,12)+20;

