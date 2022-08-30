<?php
//The compiler performs a process called binding when an object is assigned to an object variable.
// The early binding (static binding) refers to compile time binding and late binding 
//(dynamic binding) refers to runtime binding.
// class Book{
//     public $name = "Ishan";
//     public function author(){
//         return "The author name is:".$this->name;
//     }
//     public function getAuthor(){//depends upon object
//         echo $this->author();
//     }
// }
//  class NewBook extends Book{
//     public function author(){
//         return "The authors name are:".$this->name." and Madhawa";
//     }
//  }
// // early binding(binding berofre every thing runing whic means complie time)
// //  $book = new NewBook();
// //  echo $book->author();

// // late binding,runtime binding
// $book = new NewBook();
// echo $book->getAuthor();


// problem with late binding,runtime binding
class Book{
    public static $name = "Ishan";
    public static function author(){
        return "The author name is:".self::$name;
    }
    public static function getAuthor(){//depends upon object
        echo self::author();
    }
}
 class NewBook extends Book{
    public static function author(){
        return "The authors name are:".self::$name. " and Madhawa";
    }
 }
 //not getting expected result reson for that no object and sataic property
NewBook::getAuthor();// result The author name is Ishan