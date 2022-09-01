<?php
include './mobile.php';
include './laser.php';
include './projecter.php';
class Galaxy extends Mobile{
    use Laser,Projecter;
}
$obj = new Galaxy;

$obj->power();
echo '<br>';
$obj->battery();
echo '<br>';
$obj->range();