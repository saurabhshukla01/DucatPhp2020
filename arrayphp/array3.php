<?php

// wap to store 5 numbers in array. calculate the sum of array elements also find the largest number in array.

$arr = [4,8,2,9,3];
$sum = 0;
$largest = $arr[0];

for($i=0; $i<sizeof($arr); $i++)
{
	if($largest < $arr[$i])
	{
		$largest = $arr[$i];
	}
	
	$sum = $sum + $arr[$i];
}

echo "Sum = ".$sum;
echo "<br> Largest = ".$largest;





?>