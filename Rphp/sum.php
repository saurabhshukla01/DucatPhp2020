<?php
	
// write a program to store 3 digit number in a varaible. Calculate the sum of digits of a number also find the reverse of a number.

$no = 345;
$sum = 0;
$reverse = 0;

$rem = $no%10;		//5
$sum = $sum+$rem;	//5
$reverse = ($reverse*10)+$rem;	//5
$no = $no/10;	//34

$rem = $no%10;	//	4
$sum = $sum+$rem;	//9	
$reverse = ($reverse*10)+$rem;	//54
$no = $no/10;	//3

$rem = $no%10;	//3
$sum = $sum+$rem;	//12
$reverse = ($reverse*10)+$rem;	//543
$no = $no/10;	

echo "Sum = ".$sum;	
echo "<br>Reverse = ".$reverse;
	
	

?>