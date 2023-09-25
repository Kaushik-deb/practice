<?php
//heredoc

$longText= <<<ABCD
name: kaushik deb
roll: 10
section: b
ABCD;
echo $longText;

//nowdoc

$name= "kaushik deb";
$roll= 10;
$longText= <<<'ABCD'
name: $name
roll: $roll
section: b
ABCD;
echo $longText;


?>