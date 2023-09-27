<?php
/*
Task 5: Password Generator

Create a PHP function called generatePassword($length) that generates a random password of the specified length. The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 characters using this function and print the password.
*/ 

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






