<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);


//syntax
// array_diff(array1, array2, array3, ...)
//only values will be compared
// Parameter	Description
// array1	Required. The array to compare from
// array2	Required. An array to compare against
// array3,...	Optional. More arrays to compare against

?>