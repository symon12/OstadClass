<?php
// $array1=array("symon","tumpa");
// echo $array1[1]."\n";
// $arra2=["symon","kabir"];
// echo $arra2[1];

// $acount=array("symon","tumpa","rumpa");
// echo count($acount);
// for($i=0;$i<count($acount);$i++){
//     echo $i;
// }
// foreach($acount as $valu){
//     echo $valu ."\n";
// }

// $associative=array("name1"=>"Rumpa bada","name2"=>"Boss symon","name3"=>"ms tumpa");
// // echo $associative["name1"];
// foreach($associative as $key=>$value){
//     echo "$key : $value \n";
// };

//  $array=[
//     ['a','b','c'],
//     ['d','e','f'],
//     ['g','h','i'],
// ];

// // print_r($array);
// // echo $array[2][1];
// foreach($array as $child){
//     foreach($child as $key=>$value){
//         echo $value ."\n";
//     }
// }

// $associative=array("name1"=>"Rumpa bada","name2"=>"Boss symon","name3"=>"ms tumpa");
// // $print=array_keys($associative);
// // print_r($print) ;
// // $print2=array_values($associative);
// // print_r($print2) ;

// $keys=array("a","b","c");
// $value=array("name1"=>"Rumpa bada","name2"=>"Boss symon","name3"=>"ms tumpa");
// $print3=array_combine($keys , $value);
// print_r($print3);

// $arrayAddition=array_fill(0,15,"Rumpa Bada");
// print_r($arrayAddition)."<br/>";

// $name=array("symon","tumpa","rumapa");
// array_push($name,"mitu");
// print_r($name);

// $name=array("symon","tumpa","rumapa");
// array_pop($name);
// print_r($name);

// $name=array("symon","tumpa","rumapa");
// array_unshift($name,"kabir","rakib");
// print_r($name);

// $name=array("symon","tumpa","rumapa");
// array_shift($name);
// print_r($name);

// $name=array("symon","tumpa","rumapa");
// array_splice($name,1,2,array("montacir","fahad"));
// print_r($name);

// $name=array("symon","tumpa","rumapa");
// $slices=array_slice($name,0,2);
// print_r($slices);

// $addition=array(1,2,3,4,5,4);
// echo array_sum($addition);

// $addition=array(1,2,3,4,5,4);
// echo array_product($addition);

// $arrays=array(1,2,3,45,"symon");
// if(in_array("symon",$arrays)){
//     echo "this is here";
// }else{
//     echo "its not here";
// }

// $arrays=array(1,2,3,45,"symon");
// if(is_array($arrays)){
//     echo "this is here";
// }else{
//     echo "its not here";
// }

// $arrays=["frist_name"=>"shrower","last_name"=>"symon"];
// if(array_key_exists("frist_name",$arrays)){
//     echo "Key 'first' exists in the array.";
// }else{
//     echo "Key 'first' exists in not array.";
// }

// $arrays=["frist_name"=>"shrower","last_name"=>"symon"];
// if(array_search("shrower",$arrays)){
//     echo "value 'first' exists in the array.";
// }


// function sqr($s){
// return $s*$s;
// }
// $number=array(1,2,3,4,5);
// $squred=array_map("sqr",$number);
// print_r($squred);

// function sqr($s){
//     return $s%2==1;
//     }
//     $number=array(1,2,3,4,5);
//     $even=array_filter($number,"sqr");
//     print_r($even);

// $array1=["apple", "banana","stove"];
// $array2=["mango", "dragun","pineapple"];

// $addition=array_merge($array1,$array2);
// print_r($addition);

// $array_rep=array("mango","pineapple","stove");
// $arrayRep=array(0=>"apple",1=>"cily");
// $arrayFinal=array_replace($array_rep,$arrayRep);
// print_r($arrayFinal);

// $stringArray=explode(', ',"symon , rumpa , tumpa");
// var_dump($stringArray);
// echo $stringArray[1];

// $arrays=array("symon , rumpa , tumpa");
// $stringArray=implode(', ', $arrays);
// var_dump($stringArray);
// echo $stringArray;

// $unsets= [ "name"=>"apple","age"=>17,"country"=>"bangladesh"];

//  unset($unsets["name"]);
//  print_r($unsets);

// function addition($carry,$item){
//     $carry +=$item;
//     return $carry;
// }

// $a=array(1,2,3,4,5);
// print_r(array_reduce($a,"addition"));

// function calls($call,$callbale){
//   return  $call .",".$callbale;
    
// }

// $a=["symon","rumpa","tumpa"];
// print_r(array_reduce($a,"calls"));

// function calls($call,$callbale){
//     return  $call +$callbale;
      
//   }
  
//   $a=[1,2,3,4];
//   print_r(array_reduce($a,"calls"));

// $records = array(
//     array('id' => 2135, 'first_name' => 'John', 'last_name' => 'Doe'),
//     array('id' => 3245, 'first_name' => 'Sally', 'last_name' => 'Smith'),
//     array('id' => 5342, 'first_name' => 'Jane', 'last_name' => 'Jones')
// );

// $column=array_column($records,'first_name','last_name');
// print_r($column);

// $numbers=array(2,3,1,5,4,1);
// sort($numbers);

// foreach($numbers as $key=>$value){
// echo "number [$key]=$value \n";
// }

// $numbers=array(2,3,1,5,4,1);
// rsort($numbers);

// foreach($numbers as $key=>$value){
// echo "number [$key]=$value \n";
// }

// $numbers=array("key1" => "lemon", "key2" => "orange", "key3" => "banana");
// asort($numbers);

// foreach($numbers as $key=>$value){
// echo "number [$key]=$value \n";
// }

// $numbers=array(2,3,1,5,4,1);
// asort($numbers);

// foreach($numbers as $key=>$value){
// echo "number [$key]=$value \n";
// }

// $numbers=array(2,3,1,5,4,1);
// arsort($numbers);

// foreach($numbers as $key=>$value){
// echo "number [$key]=$value \n";
// }

// $numbers=array("d" => "lemon", "a" => "orange", "b" => "banana");
// ksort($numbers);

// foreach($numbers as $key=>$value){
// echo "number [$key]=$value \n";
// }

// $numbers=array("d" => "lemon", "a" => "orange", "b" => "banana");
// krsort($numbers);

// foreach($numbers as $key=>$value){
// echo "number [$key]=$value \n";
// }

// $numbers=array("img1.png", "img10.png", "img12.png", "img2.png");
// natsort($numbers);

// foreach($numbers as $key=>$value){
// echo "number [$key]=$value \n";
// }

// $numbers=array("peter"=>35,"jack"=>50);
// function addition($a,$b){
//     return $a -=$b;
// }
// $addition=uasort($numbers,"addition");
// print_r($addition);


// foreach($numbers as $key=>$value ){
// echo "number [$key]=$value \n"
// }

// $names = ["Tina", "Bob", "Alice"];
// $ages  = [28, 22, 25];
// $fruits=["apple","banana","stovrey"];
// array_multisort($names,$ages,$fruits);
// print_r($names);
// print_r($ages);
// print_r($fruits);

// $array1=["symon","tumpa",1,3,"e"];
// $array2=["tumpa","e"];
// $arraydif=array_diff($array1,$array2);
// print_r($arraydif);

// $array1=["name"=>"symon","name2"=>"tumpa"];
// $array2=["name"=>"symon"];
// $arraydif=array_diff_assoc($array1,$array2);
// print_r($arraydif);

// $array1 = ["blue" => 1, "red" => 2, "green" => 2];
// $array2 = ["green" => 4, "yellow" => 7];
// $diffs=array_diff_key($array1,$array2);
// print_r($diffs);

// $array1 = ["a","b","c"];
// $array2 = ["a","c"];
// $diffs=array_intersect($array1,$array2);
// print_r($diffs);

// $array1 = ["a" => "green", "b" => "brown", "c" => "blue","d"=>"dark"];
// $array2 = ["a" => "green", "b" => "yellow", "c" => "blue","d"=>"dark"];
// $inAssos=array_intersect_assoc($array1,$array2);
// print_r($inAssos);

// $array1 = ["blue" => 1, "red" => 2, "green" => 3];
// $array2 = ["green" => 4, "yellow" => 7];
// $result=array_intersect_key($array1,$array2 );
// print_r($result);

// $input=[1,2,3,4,3,2,2,3,4,3,6,7];
// $output=array_unique($input);
// print_r($output);
d
// $input=[1,2,3,4,5];
// $output=array_reverse($input);
// print_r($output);

// $input=[1,2,3,4,5];
// shuffle($input);
// print_r($input);

// $input=range(0,70);
// shuffle($input);
// print_r($input);

// $input=range("a","z");
// print_r($input);

// $input=range(1,11,3);
// print_r($input);

// $name = "Alice";
// $age = 25;
// $country = "Wonderland";
// $result=compact("name","age","country");
// print_r($result);

$data = [
    "firstName" => "Bob",
    "lastName" => "Builder",
    "age" => 30
];
extract($data);
echo "$firstName $lastName $age";