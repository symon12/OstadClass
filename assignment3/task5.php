<?php
echo "Task 5: Password Generator \n";

function passwordGenerate($length){
    $passwordCreate="ABCDEFijklmnopqrst789!@#uvwxyzGHIJKLMNOPQRSTUabcdefghVWXYZ0123456%^&*()_+'";
    $password ='';
    for($p=0;$p<$length;$p++){
        $randomIndex=rand(0,strlen($length)-1);
        $password .=$passwordCreate[$randomIndex];

    }
    return $password;
}
$GeneratePassword=passwordGenerate(12);
echo "Your Password : $GeneratePassword";






