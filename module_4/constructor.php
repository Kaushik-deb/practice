<?php

class fruits{
    public $name;
    public $color;
    function __construct($name,$color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function get_name()
    {
        return $this->name."\n";
    }
    function get_color()
    {
        return $this->color;
    }
}
$info = new fruits("jackfruit","yellow");
echo $info->get_name();
echo $info->get_color();













?>