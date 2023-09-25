<?php
$string= "agdum bagdum ghoradum saje jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj";
// echo strlen($string);
// echo PHP_EOL;
// echo substr($string,2,5);  //(string, startingpoint, character needed)
// echo PHP_EOL;

// //strpos()
// $find=strpos($string,"ok");
// if($find!==false){
//     echo "agdum is found";
// }
// else{echo "no agdum";}

//strreplace

// $newString= str_replace("agdum","fagdum",$string,$i);
// echo $newString;
// echo PHP_EOL;
// echo "replacements:$i";



//str_repeat

// echo str_repeat($string,2);


//explode
// $newString=explode(" ",$string);
// print_r($newString);

// implode
// echo implode(" ",$newString)


// echo str_split($string,2);


// echo wordwrap($string,10,"\n");

echo base64_decode($string);





?>