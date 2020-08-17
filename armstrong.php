<?php

// write a programm to check that given number is palindrome or not. $no = 121;

$n = 141;
$t = $n;
$arm = 0;
while($n > 0)
{
    $rem = $n % 10;
    $arm = $arm + $rem ** 3;
    $n = $n/10;
}
//echo  $arm;
if($t == $arm)
{
    echo "$t , Given Number is armstrong.";
}
else
{
    echo "$t , Given Number is not armstrong.";
}
?>