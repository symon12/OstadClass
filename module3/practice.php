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

//foreach loop dia array count kora========> 

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

// foreach($man as $key=> $value);

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

//assoc sohojogi

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







