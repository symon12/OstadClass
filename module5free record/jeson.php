<?php

header("content-type: application/json");
/*
$AssocArray=["name"=>"symon","age"=>21,"study"=>12];
$json=json_encode($AssocArray);
echo $json;
*/

/*
$AssocArray=[
    ["name"=>"symon","age"=>21,"study"=>12],
    ["name2"=>"ahad","age"=>19,"study"=>12],
    ["name3"=>"rumpa","age"=>19,"study"=>12],
];

$json=json_encode($AssocArray);
echo $json;
*/

// if($_SERVER["REQUEST_METHOD"]=="POST"){
//     echo "my name is symon";
// }


// if($_SERVER["REQUEST_METHOD"]=="GET"){
//     echo "my name is symon";
// }


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $stringData=file_get_contents("php://input");
    $phJsonArray=json_decode($stringData,true);
    print_r($phJsonArray);
    // echo "i am here";
}

