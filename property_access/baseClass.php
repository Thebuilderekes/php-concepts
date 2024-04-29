<?php

class checkWallet 

{
     private $balance = 3000;    
     public $coin = 200;

    public function getBalance($balance){
        $this->balance = $balance;
        return $this->balance;
    }
}

 
