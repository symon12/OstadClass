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

$user= array(
    "john"=> array(
        "age"=>25,
        "email"=>"mdsymon703@gmail.com"
    ),
    "symon1"=>array(
        "age"=> 4,
        "email"=>"mdsymon703@gmail.com"
    )
    );
    echo $user["john"]["age"];









