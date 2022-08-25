<?php
class User{
    public $name = 'ishan';
    private $password = '123456';
    protected $email = 'ish@gmail.com';

    public function getPassword(){
        return $this->password;
    }
}

class Admin extends User {
    function __construct(){
        echo $this->email;
    }
}

$user = new User;
echo $user->getPassword();
echo '<br>';
echo '<br>';
$admin = new Admin;

