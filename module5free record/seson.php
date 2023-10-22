<?php
// if($_SERVER["REQUEST_METHOD"]=="POST"){
// $StringData=file_get_contents("php://input");
// $json=json_decode($StringData,true);
//  session_start();
//  $_SESSION["user"]=$json["username"];
//  echo "they are exit";
// }

if($_SERVER["REQUEST_METHOD"]=="DELETE"){
    $StringData=file_get_contents("php://input");
    $json=json_decode($StringData,true);
     session_start();
     unset($_SESSION["user"]);
     session_destroy();
     echo "delete";
    }

