<?php
// parent class
class Fruits{
    public $name;

    public function setName($name){
        $this->name = $name;
    }
}
// child class use extend key word to get parent class futuers
class Apple extends Fruits{

    public function Juice(){
        echo 'This is Apple Juice';
    }

}

class Mango extends Fruits{

}

$apple = new Apple();
$apple->setName('ishans apple');
echo $apple->name;
echo '<br>';
echo '<br>';
$mango = new Mango();
$mango->setName('ishans Mango');
echo $mango->name;
