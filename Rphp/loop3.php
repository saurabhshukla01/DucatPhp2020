<?php

// wap to calculate sum of digit of a given number also find the reverse of a given number.

$no = 250;
$sum = 0;
$reverse = 0;

while($no>=1)
{
	$rem = $no%10;
	$sum = $sum+$rem;
	$reverse = ($reverse * 10) + $rem;
	$no = $no/10;
}

echo "Sum = ".$sum;
echo "<br>Reverse = ".$reverse;

	

?>