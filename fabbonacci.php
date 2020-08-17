<?php
 // write a programm to print fibonacci series upto 10 numbers. 0 1 1 2 3 5 8 ........

$n = 10;
$a = 0;
$b = 1;
$c = $a + $b;
$i = 1;
echo "This is fabbonacci Series is <br>";
echo $a." ";
echo $b." ";
while($i<=$n-2)
{
    $a = $b;
    $b = $c;
    $c = $a + $b;
    echo $c." ";
    $i++;
}

?>