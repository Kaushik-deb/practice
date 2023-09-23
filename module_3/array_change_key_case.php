<?php
$array=["a"=>"sumon","b"=>"Indrani","c"=>"kaUshik"];
$toUpperCase=array_change_key_case($array,CASE_UPPER);
print_r($toUpperCase); 


//works on only associated array keys//


$array1=["A"=>"sumon","B"=>"Indrani","C"=>"kaUshik"];
$toLowerCase=array_change_key_case($array,CASE_LOWER);
print_r($toLowerCase); 


//works on only associated array keys//


//Syntax
//array_change_key_case(array, case)
?>