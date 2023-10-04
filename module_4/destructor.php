<?php

class fruits{
    public $name;
    public $color;
    function __construct($name,$color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct()
    {
        return "the name is $this->name \nthe color is $this->color"; //gave return here
    }
}
$name = new fruits("banana","yellow");
echo $name->__destruct();


class fruit{
    public $name;
    public $color;
    function __construct($name,$color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct()
    {
        echo "the name is $this->name \nthe color is $this->color"; //give echo here
    }
}
$name = new fruit("banana","yellow");










?>