<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

$result=array_diff_key($a1,$a2);
print_r($result);

// Compare the keys of two arrays, and return the differences:
// Syntax
// array_diff_key(array1, array2, array3, ...)
// Parameter Values
// Parameter	Description
// array1	Required. The array to compare from
// array2	Required. An array to compare against
// array3,...	Optional. More arrays to compare against











?>