<?php

/*
01
0203
040506
07080910
1112131415

*/

$x = 1;
for($i=1;$i<=5;$i++)
{
    for($j=1;$j<=$i;$j++)
    {
        if($x<10)
        {
            echo "0".$x++;
        }
        else
        {
            echo $x++;
        }
    }
        echo "<br>";
}
?>