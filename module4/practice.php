<?php

//OOP==================================>>>>>>

// php class mathod opp

// class addition{
//     public $name="number addition";
//     public function addTwo($num1,$num2){
//         echo $num1+$num2;
//     }
// }
// $obj= new addition();
// $obj->addTwo(3,4);
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

//constructor ba aka masic mathod bola === ata neja neja ka call kora ==============>>

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

// $line1="apple";


// $find = [];
// $ruselt = "";
// for($i=0;$i<strlen($line1);$i++){
//     // print $line1[$i];
//     if($find [$line1[$i]]==false){
//     $find = [$line1[$i]]=true;
// }
// }
// print_r($find);

//oop type hint related problem=============>>>>

// class hints{
//     public ? int $number=null;
// }

// $obj=new hints();
// var_dump($obj->$number);

//static for class or constend sudu class access neta parba php ta ar kono jaigai access neta parbe na =======>

// class statics{
//     // public static int $name=89;
//     const MONTH_IN_YEAR=12;
// }

// $new_obj= new statics();
// print statics::$name ."\n";
// statics::$name++;
// print statics::$name;
// print statics::MONTH_IN_YEAR;

//destruct const ar moto ========>

// class gets{
//     private static $number=0;
//     public function __construct()
//     {
//         self::$number++;
//     }
//     public function __destruct()
//     {
//         self::$number--;
//     }
//     public function get_fun(){
//         return self::$number;
//     }
// }
// $obj=new gets();
// $obj2=new gets();
// unset($obj2);//ata dia property nai ba muca fela
// print $obj->get_fun();

//get or set public a class bira access neta parbo =============>>>>

// class gets{
//     private string $number;
//     public function __set($name,$value)
//     {
//         $this->$name=$value;
//     }
//     public function __get($name)
//     {
//         return $this->$name;
//     }
// }
// $obj=new gets();

//  $obj->number="123";
//  print $obj->number;

//to string hocca oop ta echo kora>>>>>>>>>>>>>>


// class gets{

//     public function __toString()
//     {
        
//         return "gets number :";
//     }
// }
// $obj=new gets();

//  echo $obj;

