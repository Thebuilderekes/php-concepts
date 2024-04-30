<?php

class Wallet 

{
     public int $balance;     
     public int $amount;
      
     public $coin = 200;

     public function setBalance($balance){
        $this->balance = $balance;
    }
     public function withdraw($amount){

        $this->balance -= $amount; 
     }


     public function deposit($amount){
       $this->balance += $amount; 
     }


    public function getBalance(){
        return $this->balance;
    } 
}

 
