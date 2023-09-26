<?php
echo "Task 5: Password Generator \n";

function passwordGenerate($length){
    $passwordCreate="ABCDEFijklmnopqrst789!@#uvwxyzGHIJKLMNOPQRSTUabcdefghVWXYZ0123456%^&*()_+'";
    $password ='';
    for($p=0;$p<$length;$p++){
        $password.=$passwordCreate[rand(0,strlen($passwordCreate)-1)];
    }
    return $password;
}
$GeneratePassword=passwordGenerate(12);
echo "Your Password : $GeneratePassword";






