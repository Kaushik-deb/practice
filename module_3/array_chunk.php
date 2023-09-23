<?php
//Syntax
//array_chunk(array, size, preserve_key)
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
$chunk= array_chunk($cars,3,false);
print_r($chunk);

//preserve_key	Optional. Possible values:
//true - Preserves the keys
//false - Default. Reindexes the chunk numerically


//Return Value:	Returns a multidimensional indexed array, starting with zero, with each dimension containing size elements


?>