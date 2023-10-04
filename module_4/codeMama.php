<?php
function checkAnagram($A,$B){
    if(strlen($B)!=strlen($A)){
        echo "NO";
    }
    else{
    $split_A= str_split($A);
    $split_B= str_split($B);
    $sort_A=sort($split_A);
    $sort_B=sort($split_B);
    if($sort_B!==$sort_A){
        echo "NO";
    }
    else{echo "YES";}
}
}
checkAnagram("ab","db")











?>