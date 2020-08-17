<?php

$a = 15;
$b = 7;
$c = 9;

if ($a>$b && $a>$c)
{
    echo "a is greater than b and c";
}
elseif ($b>$a && $b>$c)
{
    echo "b is greater than a and c";
}
elseif ($c>$a && $c>$b)
{
    echo "c is greater than a and b";
}
elseif ($a>$b || $a>$c)
{
    echo "a is greater than b or c";
}
elseif ($b>$a || $b>$c)
{
    echo "b is greater than a or c";
}
elseif ($c>$a || $c>$b)
{
    echo "c is greater than a or b";
}
else
{
    echo "Enter Valid number";
}

echo "<br>";
echo "==============================================================";
echo "<br>";


$x = 15;
$y = 7;
$z = 9;


if ($x>$y || $x>$z)
{
    echo "x is greater than y or z";
}
elseif ($y>$x || $y>$z)
{
    echo "y is greater than x or z";
}
elseif ($z>$x || $z>$y)
{
    echo "z is greater than x or y";
}
else
{
    echo "Enter Valid number";
}


?>