<?php
 include './autoload.php';
 //include './geometryInterface.php';
//implement more interfaces
class Traingle implements ShapeInterface,geometryInterface{
   // overiding interface methods
    public function getArea(){
        echo 'trangle Area';
    }
    public function getCircumference($lenth,$breadth){
        echo $lenth+$breadth;
    }
}

class Rectangle implements ShapeInterface {
    public function getArea(){
        echo 'rectangle Area';
    }
}

$trangle = new Traingle;
$trangle->getArea();
echo '<br>';
$trangle->getCircumference(5,10);
echo '<br>';
$rectrangle = new Rectangle;
$rectrangle->getArea();