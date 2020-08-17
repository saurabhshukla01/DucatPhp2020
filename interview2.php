<?php

/*

     1
    2 2
   3 4 3
  4 5 6 4
 5 7 8 9 5

*/

$b = 4;
for($i=1;$i<=5;$i++)
{
    for($z=1;$z<=5-$i;$z++)
    {
        echo "&nbsp&nbsp";
    }
    for($j=1;$j<=$i;$j++)
    {
        if($j==$i || $j == 1)
        {
            echo $i."&nbsp&nbsp";
        }
        else
        {
            echo "$b &nbsp&nbsp";
            $b++;
        }
    }
    echo "<br>";
}


?>