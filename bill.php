<?php

class Bill{
    public $diner=20;
    public $desserts=5;
    public $coolDrink=3;
    public $bill;

    // constructer EVERY TIME WE CALLED OBJECT INSTANCE CONSTRUCTER CALLED AUTO MATICALLY
    public function __construct(){ 
        $this->bill = 3;
    }

    public function dinner($person){
        $this->bill += $this->diner * $person;
        return $this;
    }

    public function dessert($person){
        $this->bill += $this->desserts * $person;
        return $this;
    }

    public function drink($person){
        $this->bill += $this->coolDrink * $person;
        return $this;
    }
    // oposite of the construcer this function load when we have ervry thing else
    public function __destruct(){ 
        echo $this->bill ;
    }
}

$bill = new Bill();
//echo $bill->dinner(2)->dessert(2)->drink(1)->bill;
$bill->dinner(2)->dessert(2)->drink(1)->bill;