<?php

/*

        1
      2  2
    3  4  3
  4  5  6  4
5  6  7  8  5

*/


for($i=1;$i<=5;$i++)
{
    $a = $i;
    for($z=1;$z<=5-$i;$z++)
    {
        echo "&nbsp&nbsp";
    }
    for($j=1;$j<=$i;$j++)
    {
        if($j==$i)
        {
            echo $i."&nbsp&nbsp";
        }
        else
        {
            echo $a."&nbsp&nbsp";
            $a++;
        }
    }
    echo "<br>";
}


?>