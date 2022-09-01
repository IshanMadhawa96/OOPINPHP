<?php
include './projecter.php';
//php not support multiple inheritance therefor we can use traits,Triats cant create instance
trait Laser{
    use Projecter;
    public function power(){
        echo '10mW';
    }
}