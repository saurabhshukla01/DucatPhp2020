<?php

//  wap to check that given number is palindrome or not. $no = 121;

$n = 1331;
$t = $n;
$sum = 0;
$rev1 = 0;
while(intval($n) > 0)
{
    $rem = $n % 10;
    $rev1 = $rem + $rev1 * 10;
    $n = $n/10;
}
//echo "Sum is ".$sum."<br>";
//echo "Reverse is ".$rev1;

if($t == $rev1)
{
    echo "$t , Given No is palindrome .";
}
else
{
    echo "$t , Given No is not palindrome .";
}

// Ans is :  Sum is 0  , Reverse is 121
?>



<?php

//  wap to check that given number is palindrome or not. $no = 121;
/*
$n = 121;
$t = $n;
$sum = 0;
$rev1 = 0;
while($n > 0)
{
    $rem = $n % 10;
    $rev1 = $rem + $rev1 * 10;
    $n = $n/10;
}
echo "Sum is ".$sum."<br>";
echo "Reverse is ".$rev1;


// Ans is :  Sum is 0  , Reverse is INF

*/

?>

