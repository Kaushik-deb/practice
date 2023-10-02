<?php

class fruits{
    public $name;
    function set_name($name){
        $this->name= $name;
    }
    function get_name(){
        return $this->name;
    }
}
$fruitName= new fruits();
$fruitName->set_name("guava");
echo $fruitName->get_name();
















?>