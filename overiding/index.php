<?php 
class Book{
    public $name = "Ishan";

    public function author(){
        return "The author name is: ".$this->name;
    }
}

class newBook extends Book{
    //method overidning parent class function
    public function author(){
        return parent::author()."and madhawa";
    }
}
$book = new newBook;
echo $book->author();