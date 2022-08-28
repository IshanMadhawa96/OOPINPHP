<?php 
class User{

     static public $name = "Ishan Madhawa";
     static public $number;   
    static public function getName(){
        //return 'Ishan';
        return self::$name ;
    }

    static public function incr(){
        self::$number+=1;
    }
}

echo User::getName();
echo '<br>';
User::incr();
echo User::$number;
echo '<br>';
User::incr();
echo User::$number;
// <?php 
// class User{

//      static public $name = "Ishan Madhawa";

//     static public function getName(){
//         //return 'Ishan';
//         return self::$name ;
//     }
// }
// echo User::getName();