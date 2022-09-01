<?php
include './projecter.php';
//php not support multiple inheritance therefor we can use traits,Triats cant create instance
trait Laser{
    use Projecter;//we can use traits inside oter traits
    public $name = "Ishan";
    public function power(){
        echo '10mW';
    }

    abstract function abc();
}