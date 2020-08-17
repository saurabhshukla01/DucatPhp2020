<?php

$a = 6;
$b = 6;
$c = "6";
$d = "6";

if ($a>$b)
{
    echo "a is greater than b";
}
elseif($a<$b)
{
    echo "a is smallest than b";
}
elseif($a=$b)
{
    echo "a is equal to b";
}

else
{
    echo "Invalid value";
}
?>