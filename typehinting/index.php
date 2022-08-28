<?php
include './person.php';
class Book{
    public $price;
    public $authors;
    public function price(int $price){
        $this->price = $price;
    }

    public function authors(Person $person){
        $this->authors = $person->names();
    }
}

$books =  new Book;
$author = new Person;
$books->price(20);
$books->authors($author);
echo $books->price;
echo '<br>';
print_r( $books->authors);
//important to minimize error handeling type and give calid data type