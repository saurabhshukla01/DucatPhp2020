<?php

/*

0102030405
0607080910
1112131415
1617181920
2122232425

*/

$x = 1;
for($i=1;$i<=5;$i++)
{
    for($j=1;$j<=5;$j++)
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