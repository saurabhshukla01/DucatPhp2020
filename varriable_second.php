<?php

// sign the varriable commbination of charter (a-zA-Z0-9_) & not used this commbination (0-9a-A-Z_)

$z = 8;
$y = 9;
echo "value of z is".$z."Value of y is ".$y."<br>";

/*
Example define varriable in php .
$a = 5;
$_a = 5;
$A = 5;
$0A = 5 ;  (wrong)
$1 = 7;   (wrong)
$char122 = 7;

*/

$a = 1900;
echo $a."<br>";
$z = "Ram";
echo $z;
$b = "India";
echo $b."<br>";

$p = 10;
echo "value of p = ".$p."<br>";
// (value of p is 8) 
echo "value of p = $p"."<br>";
// (value of p is 8) 
echo 'value of p = $p';
// (value of p is $p) 


?>