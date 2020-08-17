<?php

/*

        *
       ***
      *****
     *******
    *********

*/


for($i=1;$i<=5;$i++)
{
    for($z=1;$z<=5-$i;$z++)
    {
        echo "&nbsp&nbsp";
    }
    for($x=1;$x<=$i;$x++)
    {
        echo "*";
    }
        for($x=2;$x<=$i;$x++)
    {
        echo "*";
    }
        echo "<br>";
}





?>