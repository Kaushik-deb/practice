<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","e"=>"blue");

$result=array_diff_assoc($a1,$a2);
print_r($result);


// Syntax
// array_diff_assoc(array1,array2,array3...)
// compares both key and values
// Parameter Values
// Parameter	Description
// array1	Required. The array to compare from
// array2	Required. An array to compare against
// array3,...	Optional. More arrays to compare against


?>