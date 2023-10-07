<?php
require "index.php";
class subAccount extends Account{
    public function transfer($amount){
        echo "transfer amount for account $amount";
    }
    // public function allDetails(){

    // }
}

$amounts= new subAccount();
// $amounts->amount();
$amounts->deposit(30);
$amounts->withdraw(90);
$amounts->transfer(29);

