<?php
 class Account {
    public $accountNumber;
    public $balance;
    public function deposit($amount){
        echo "this is $amount amount\n ";   
    }
    public function withdraw($amount){
            echo "this is withdraw $amount amount \n";
    }
    public function getBalance(){
       return $this->balance;
    }
 }
