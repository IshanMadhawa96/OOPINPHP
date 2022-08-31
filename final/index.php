<?php

//final key word is used to restric overiding or inhertance in class or method
final class Book{
    public static $name = "Ishan";
    final public static function author(){
        return "The author name is:".self::$name;
    }
    public static function getAuthor(){//depends upon object
        echo static::author();
    }
}
 class NewBook extends Book{
    public static function author(){
        return "The authors name are:".self::$name. " and Madhawa";
    }
 }

NewBook::getAuthor();