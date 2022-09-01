<?php
include './mobile.php';
include './laser.php';
//include './projecter.php';
class Galaxy extends Mobile{
     use Laser;//Projecter{
    //     Laser::power insteadof Projecter;
    //     Projecter::power as Ppower;
    // }
    public function power(){
        echo "I am from Index";
    }
}
$obj = new Galaxy;

$obj->power();
// echo '<br>';
// $obj->battery();
// echo '<br>';
// $obj->range();