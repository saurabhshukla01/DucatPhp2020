<?php


$a = 5;
$b = 9;
$c = 90;


if($a>$b && $a>$c)
{
	echo "A is greater than b and c";
}
elseif($b>$a && $b>$c)
{
	echo "B is greater than a and c";
}
elseif($c>$a && $c>$b)
{
	echo "C is greater than a and b";
}
else
{
	echo "More than one numbers are same";
}





?>