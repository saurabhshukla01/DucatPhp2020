<?php

/*

    1
   12
  123
 1234
12345

*/

for($i=1;$i<=5;$i++)
{
    for($x=$i;$x<=4;$x++)
    {
        echo "&nbsp&nbsp";
    }
    for($j=1;$j<=$i;$j++)
    {
        echo $j;
    }
        echo "<br>";
}
?>