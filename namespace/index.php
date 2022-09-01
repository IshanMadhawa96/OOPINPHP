<?php
//namespace second;
include './fristnamespace.php';
include './secondnamespace.php';
use second\A as NewA;
//$object = new second\A; // qulified class name
$object = new NewA ; //un qulified class name
$object = new \A; 
