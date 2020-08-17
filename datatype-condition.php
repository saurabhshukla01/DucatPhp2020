<?php

// data type and value check condition (===) ,  only use data value with compare than value is (==)

$a = "7";
$c = 6;
$d = "string";

if($a==$c)
{
    echo "a is equal to c (check value data type)";
}
elseif($a=$c)
{
    echo "a is not equal c as compare to data type (check value data type)";
}
elseif($a===$c)
{
    echo "a is equal c as compare to data type and value (check value data type)";
}
else
{
    echo "a is equal to d (check value data type and value)";
}

?>