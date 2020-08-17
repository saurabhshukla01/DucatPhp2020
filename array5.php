<?php

/*
Write a program to find the largest no of given array value so find the sum of all given number :
$arr = [5,6,1,30,20,202,210,209]
o/t =   largest no =  210
        sum = 683

*/

$arr = [5,6,1,30,20,202,210,209];
// $l = sizeof($arr);
$l = count($arr);
$sum = 0;
$largest = $arr[0];
for($i=0;$i<$l;$i++)
{
    // echo $arr[$i]."<br>";
    if($largest < $arr[$i])
    {
        $largest = $arr[$i];
    }
        $sum = $sum + $arr[$i];
}
echo "Array of largest no is ".$largest."<br>";
echo "Array of sum is ".$sum;


?>