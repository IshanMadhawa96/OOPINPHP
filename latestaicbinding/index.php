<?php


class Book{
    public static $name = "Ishan";
    public static function author(){
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

NewBook::getAuthor()