<?php
// php class mathod opp

// class addition{
//     public $name="number addition";
//     public function addTwo($num1,$num2){
//         echo $num1+$num2;
//     }
// }
// $obj= new addition();
// //$obj->addTwo(3,4);
// echo $obj->name;

//class ar betor a call kora ba print kora

// class addition{
//     public $name="number addition";
//     public function demo(){
//     echo $this->name;
//  }
// }
// $obj= new addition();
// $obj->demo();

//constructor ba aka music mathod bola === ata nega neaga ka call kora ==============>>

// class name{
//     public function __construct(){
        
//         echo  "hello my name is symon";;
//     }
// }
// new name();

//constructor method ===============>

// class bio{
//     public $name;
//     public $age;
//     public $country;
//     public function __construct($nameValu,$ageValu,$countryValu)
//     {
//         $this->name=$nameValu;
//         $this->age=$ageValu;
//         $this->country=$countryValu;
//     }
//     public function bios(){
//         echo "my name is $this->name and my age $this->age and my country $this->country";
//     }
// }
// $bioObj =new bio("symon","21","Bangladesh");
// $bioObj->bios();

// //ai baba o kora jai

// class bio{
//     public function bios($name,$age){
//         echo "my name is $name my age $age ";
//     }
// }
// $obj= new bio();
// $obj->bios("symon","21");

//Inheritance holo 2ta class nela akta class modda popatice gulo arak class excess nea jai

// final class symon{
// public function addnum(){
//     for($i=0;$i<20;$i++){
//         echo $i ."\n";
//     }
// }
// }

// $obj= new symon();
// $obj->addnum();

//overriding mathod=========>

// class ahad extends symon{
// public function bekre(){
//     for($i=0;$i<50;$i++);
//     echo $i."\n";
// }
// }
// $willChange= new ahad();
// $willChange->bekre();

// //abstract mana parent class ka Inheritance kora

// abstract class symon{
//     public function addnum(){
//         for($i=0;$i<20;$i++){
//             echo $i ."\n";
//         }
//     }
//     }
    
//     //overriding mathod=========>
    
//     class ahad extends symon{
//     public function addnum(){
//         for($i=0;$i<50;$i++);
//         echo $i."\n";
//     }
//     }
//     $willChange= new ahad();
//     $willChange->addnum();

//constructor for Inheritance=========>

// class fater{
//     public function __construct()
//     {
//        echo "father construct"; 
//     }
// }
// class son extends fater{

//     public function __construct()
//     {
//         fater:: __construct();
//         echo "son construct \n" ;
//     }
// }
// new son();

// class abir extends son{

// }
// new abir();

//static function hocca class ar properties satha somro-kka cenno kora class satha somro-kko tori kora

// class myClass{
//     static public function stat(){
//         echo "my name is symon \n";
//     }
//    static public function FunctionName(){
//         echo "hello ahad";
//     }
// }
// $obj=new myClass();
// $obj->stat();
// $obj->FunctionName();

//child properties

// myClass::stat();
// myClass::FunctionName();

//self keyword class betor properties gullo call korar jonno all properties gullo static korta hoba call korar jonno self key word ========>

// class myclass{
//     public static $name="my name is symon";
//    static public function names(){
//     echo self::$name;
//     }
// }

// $obj=new myclass();
// $obj->names();
