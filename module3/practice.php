<?php
//INDEX ARRAY==============>

// $arry1=array("mitu","tumpa","symon","rumpa");
// $arry2=["mitu","tumpa","symon","rumpa"];
// echo $arry1[0].PHP_EOL;
// echo $arry2[2];

//loop array====>

// $arry1=array("mitu","tumpa","symon","rumpa");
// $arry2=["mitu","tumpa","symon","rumpa"];

// for($i=0;$i<count($arry1);$i++){
//     echo $arry1[$i] ."<br/>";
// }

//foreach loop ""array ar jonno"" dia array count kora========> 

// $arry1=array("mitu","tumpa","symon","rumpa");
// $arry2=["mitu","tumpa","symon","rumpa"];

// foreach($arry1 as $value){
//     echo $value."<br/>";
// }

//Associative arrays====>

// $man= array("fristName"=>"symon","lastName"=>"hossen");
// $man1= ["fristName"=> "samir", "lastName"=>"ahmed"];

// //accessing array====>

// echo $man["fristName"];

// foreach($man as $key=> $value){
//     echo "$key : $value \n";
// };

//multidimensional array======>

//  $array=[
//     ['a','b','c'],
//     ['d','e','f'],
//     ['g','h','i'],
// ];
// print_r($array);
// // echo $array[1][2];

// $array=[
//     ["frist_name"=>"shrower" , "frist_name"=>"hossen","last_name"=>"symon"],
//     ["frist_name"=>"ahad" , "frist_name"=>"jaman","last_name"=>"neloy"],
//     ["frist_name"=>"imam" , "frist_name"=>"uddin","last_name"=>"nahid"],
// ];
// // echo $array[2]["frist_name"]."<br/>".$array[1]["last_name"];

// // echo $array[2]["frist_name"];
// // echo $array[2]["last_name"];

// foreach($array as $child){
// foreach($child as $key=>$valu){
//     echo "<br/>".$valu ; 
// }

// }

// $users = array(
//     "john" => array(
//         "age" => 25,
//         "email" => "john@example.com"
//     ),
//     "jane" => array(
//         "age" => 30,
//         "email" => "jane@example.com"
//     )
// );

// echo $users["john"]["email"];

// $user= array(
//     "john"=> array(
//         "age"=>25,
//         "email"=>"mdsymon703@gmail.com"
//     ),
//     "symon1"=>array(
//         "age"=> 4,
//         "email"=>"mdsymon703@gmail.com"
//     )
//     );
//     echo $user["john"]["age"];

// $arrays =array('a'=>'apple','b'=>'ball','c'=>'cat');
// $values=array_values($arrays);

//assoc 

// $assoc = array("a" => "apple", "b" => "banana", "c" => "cherry");
// $values = array_values($assoc);
// print_r($values);


// $assoc = array("a" => "apple", "b" => "banana", "c" => "cherry");
// $values = array_keys($assoc);
// print_r($values);

// $keys= array("a","b","c");
// $values= array("apple","banana","cherry");
// $combined=array_combine($keys , $values);
// print_r ($combined);

//array unlimited jog kora kora==========>

// $filled=array_fill(0,8,"symon");
// print_r ($filled);

//array last element jog kora===========>

// $name=array("symon","tumpa","rumapa");
// array_push($name,"mitu");
// print_r($name);

//array last element muca fela ba beog  kora===========>

// $name=array("symon","tumpa","rumapa","mity");
// $last_name=array_pop($name);
// print_r ($name);

//array frist element jog kora===========>

// $name=array("symon","kashem","rogena");
// array_unshift($name,"rumpa","tumpa");
// print_r($name);

//array frist element muca fela ba beog  kora===========>

// $fruits=array("banana","apple","stove","malta");
// $r_fruits=array_shift($fruits);
// print_r($fruits);

//array replace kora=======>

// $fruits=array("banana","apple","malta");
// $fruits_jog=array_splice($fruits,1,2,array("dragun","cerry"));
// print_r($fruits);
// var_dump($fruits);

//array slice kora print kora=======>

// $fruits=array("banana","carry","apple","stove","dragun");
// $fruits=array_slice($fruits,1,2);
// print_r($fruits);

// ==========================================
// Array Information Functions

//number count korba=======>

// $count_num=array(1,2,3,4);
// echo count($count_num);

// $sizof_num=array(1,2,3,4,5,6,8);
// echo sizeof($sizof_num);

//array jog kora ========>

// $arrays=array(1,2,3,4,5,3,7);
// echo array_sum($arrays);

//array gun kora========>>

// $arrays=array(1,2,3,4);
// echo array_product($arrays);

//array count kora ata 1 thaka count kora---------------->>>>

// $counts=array(1,2,3,4,5,"symon","tumpa","rumpa");
// echo sizeof($counts);

//array vetora kono number aca kina ta chek korba =========>

// $numbers=array(1,2,3,4,5,6);
// if(in_array(3,$numbers)){
//     echo "the number is here";
// }

// $fruits=array("banana","carry","apple","stove","dragun");
// if(in_array("boy",$fruits,)){
//     echo "the fruits is here";
// }else{
//     echo "the number is not here";
// }

//is array hocca parent array ka check kora==================>>>

// $name=array("symon","tumpa","rumapa","mity");
// $names=array("symon","tumpa","rumapa","mity");

// if(is_array($names)){
//     echo "It's array";
// }

// $arrays=["frist_name"=>"shrower","last_name"=>"symon"];
// if(array_key_exists("last_name",$arrays)){
//     echo "Key 'first' exists in the array.";
// }else{
//     echo "Key 'first' not exists in the array.";
// }

// function defined_fun($arrays){
    
//     echo "the frist name is $arrays";
// }
// defined_fun(array_key_exists("shrower",$arrays));


// $arrays=["frist_name"=>"shrower","last_name"=>"symon"];
// if(array_search("shrower",$arrays)){
//     echo "valus 'first' exists in the array.";
// }

// =============================================
// Array Transformation Functions

//number a square kora=========>

// function squareds($n){
//     return $n*$n;
// }
// $arrays=array(1,2,3,4);
// $squred_num=array_map('squareds',$arrays);
// print_r($squred_num);

//array filter hocca jor number define kora=======>


// function is_even($n){
//     return $n%2==0;

// }
// $numbers=array(1,2,3,4,5,6,8,9,10);
// $evenNumber=array_filter($numbers,"is_even");
//  print_r($evenNumber);

//array jog kora==========>>

// $array1=["apple", "banana","stove"];
// $array2=["mango", "dragun","pineapple"];

// $array_jog=array_merge($array1,$array2);
// print_r($array_jog);

//array name replace kora onno name bosano=========>

// $array_rep=array("mango","pineapple","stove");
// $arrays_replac=array(2=>"banana",0=>"dragun");
// $array_replacement=array_replace($array_rep,$arrays_replac);
// print_r($array_replacement);

// for ($x=1; $x<=5; $x=$x+1)   
// {  
//   $factorial = $x * $x; 
//   echo $factorial; 
// }  

// $sum = 0;
// for($i=0; $i<10; $i++){
//     $sum += $i*$i;
//     $avarage=$sum/$i;
//     echo $avarage;
// }

//string ka array ta convert============>

// $name=explode(', ',"symon, tumpa, rumpa");

// var_dump($name);
// echo $name[1];

//array ka string convert kora=============>>

// $arrays=array("symon , rumpa , tumpa");
// $stringArray=implode(', ', $arrays);
// var_dump($stringArray);
// echo $stringArray;

// $name=explode(', ',"symon, tumpa, rumpa");
// $nameString=join(", ",$name);
// echo $nameString;

// $name=preg_split('/(,|,)/',"symon, tumpa, rumpa, mitu,karim,habib, karim");
// $nameString=join(", ",$name);
// // print_r($nameString);
// echo $nameString;

//unset variable hocca kono jai variable declared korba seta bada ar sob valu thakba

// $unsets= [ "name"=>"apple","age"=>17,"country"=>"bangladesh"];
// unset($unsets["age"]);
// print_r($unsets);

//neumaric arrays========================>

// $defined=["flower","fish","fruts"];
// echo $defined[2];

//array reduce means call back funtion============>

// function call_back($call,$calls){
//     return $call ." , " .$calls;

// }
// $a=array("docts","cat","fox");
// print_r(array_reduce($a,"call_back"));



// ❎❎=================================================================❎❎
// ❎❎=================================================================❎❎
// ❎❎=================================================================❎❎
// ❎❎=================================================================❎❎


// ❎Handling Sting 

// $name="shrower hossen symon";
// $upperCase=strtoupper($name);
// echo $upperCase;

// $name="SHROWER HOSSEN SYMON";
// $lowerCase=strtolower($name);
// echo $lowerCase;

//ata mana hocca 'hossen' position koto word pora aca oi ta ar korba=========> 

// $leanth="Shrower hossen symon";
// $leanth_position=strpos($leanth,"hossen");
// print_r($leanth_position) ;

// $frist_word="hello ,symon";
// $sub_string=substr($frist_word,6,5);
// echo $sub_string;

// $join="Hello, My, Name, Is, Symon";
// $join_string_array=explode(",",$join);
// print_r($join_string_array)  ;

// $name1="shrower";
// $name2="hossen";
// $fullName=$name1." ".$name2;
// echo $fullName;

//trim hocca frist a kono space thakle oita remove korba;


// $name="    shrower hossen";
// $hight_space=trim($name);
// echo $hight_space;

//select korta hoba akhana "would" dia diclear kora ar pora univers dia would replace kora============>

// $text="hello would";
// $newLine=str_replace("would","univers" ,$text);
// echo $newLine;

//word olta baba lekha==============>

// $name="nomys nessoh reworhs ";
// $replace=strrev($name);
// echo $replace;

//Password Generator====================<>

// function genaratorPassword($leanth){
// $character="1234567890_-+=!'£$%^&*(){}[]qwertyuiopasdfghjkl;:@'~#|\zxcvbnm,.?/QWERTYUIOPASDFGHJKL";
// $passowrd="";
// for($i=0;$i<$leanth;$i=$i+1){
//     $passowrd .=$character[rand(0,strlen($character)-1 )];
// }
// return $passowrd;
// }
// echo genaratorPassword(15);
//string ka array word convert kora================> 


// $name="symon, rumpa, abir";
// $strSpi=str_split($name);
// print_r($strSpi);

// 24/9/2023=======================>🏛️

//heredoc onak gula array jog kora=================>

// $fristName="shrower";
// $middleName="hossen";
// $lastName="symon";
// $longText= <<<ABCD
// Frist Name:{$fristName} 
// Middle Name:{$middleName}
// Last Name: {$lastName}
// Designation: Developer
// ABCD;
// echo $longText;

// $longText= <<<ABCD
// {$fristName} {$middleName} {$lastName} 

// Designation: Developer

// ABCD;

// echo $longText;

// $string="hello would";
//  $fruits=["apple","banana" ,"cerry"];
//  echo $fruits[1]."\n";
// //  echo substr($string,0,8);
//  echo substr($string,0)."\n";
//  echo substr($string,-6)."\n";
//  echo strlen($string),"\n";

//  $strings="my name is symon ";
//  $len=strlen($strings);
//  for($i=0;$i<$len;$i++){
//     echo $len ."\n";
//  }

//  //kothai obosthan korba kon number position a ava============>

//  $name="who are you";
// //  echo strpos($name,"you"."\n" );
// //  echo strpos($name,"e",6);

// if(strpos($name,"who")!==false){
// echo "found";
// }else{
//     echo "not pound";
// }
// echo "$name \n";

// //line replace korba ba sentence replace korba===============>

// $name1="symon hossen shrower";
// $age= "symon";
// $country="abir";

// $replace=str_replace($age,$country,$name1);
// echo $replace ."\n";

// //and aro sohoj upai replace sentence============>

// $name2="md abir islam";
// $replaceName=strtr($name2,[
// "md"=>"shrower",
// "abir"=>"hossen",
// "islam"=>"symon"
// ]
// );
// echo $replaceName ."\n";

// //word repat kora==========>

// $repet="!";
// // for($i=0;$i<10;$i++){
// //     echo $repet;
// // }
// // echo str_repeat($repet,4);

// for($i=10;$i>0;$i--){
//     echo str_repeat($repet,$i)."\n";
// }







