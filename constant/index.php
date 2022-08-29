<?php
//Constants are like variables except that once they are defined they cannot be changed or undefined.
class Circle{
    const PI = 3.141592653589793;
    public function area($radius){
        return $radius = $radius*self::PI;
    }
}

$circle = new Circle;
echo $circle->area(10);
echo '<br>';
echo Circle::PI;