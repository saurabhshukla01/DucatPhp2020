<?php

/*

    1
   22
  333
 4444
55555

*/

for($i=1;$i<=5;$i++)
{
    for($x=$i;$x<=4;$x++)
    {
        echo "&nbsp&nbsp";
    }
    for($j=1;$j<=$i;$j++)
    {
        echo $i;
    }
        echo "<br>";
}
?>