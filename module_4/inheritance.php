<?php
class fruit{
    public $name;
    public $color;
    public function __construct($name,$color)
    {
    $this->name = $name;
    $this->color = $color;        
    }
    
}
class banana extends fruit{
    public function __destruct()
    {
        echo "the name is {$this->name}";
    }

}
$banana = new banana("banana","yellow");





?>