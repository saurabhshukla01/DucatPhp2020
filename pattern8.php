<?php

/*

   *********
    *******
     *****
      ***
       *

*/


for($i=1;$i<=5;$i++)
{
    for($j=1;$j<=$i;$j++)
    {
        echo "&nbsp&nbsp";
    }
    for($j=1;$j<=6-$i;$j++)
    {
        echo "*";
    }
    for($j=2;$j<=6-$i;$j++)
    {
        echo "*";
    }
        echo "<br>";
}


?>