<?php
// require "index.php";
// class subAccount extends Account{
//     public function transfer($amount){
//         echo "transfer amount for account $amount";
//     }
//     // public function allDetails(){

//     // }
// }

// $amounts= new subAccount();
// // $amounts->amount();
// $amounts->deposit(30);
// $amounts->withdraw(90);
// $amounts->transfer(29);

// class human{
//     public $name;
//     public  function __construct($name)
//     {
//         $this->name=$name;
        
//     }
//     public  function getName(){
//         echo "my name is {$this->name} " ;
        

//     }

// }


// class human2 extends human{
//     public $Nname;
// public function __construct($name,$Nname)
// {
//     human::__construct($name);
//     $this->Nname=$Nname;
// }
// public function gets(){
//     return"my name is {$this->Nname}";
// }
// public function output(){
//     echo $this->gets();
//     echo $this->getName();
// }
// }
// $objs=new human2("symon","ahad");
// $objs->output();

class name1{
        
    use myName;
}
class name2{

}
class name3{}

trait myName{
    public function names1(){
        echo "symon";
    }
    public function names2(){
        echo "ahad";
    }
    public function names3(){
        echo "montacir";
    }
}
$obj=new name1();
$obj->names1();
$obj->names2();

