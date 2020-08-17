<?php

/*



1   1   1   1   1
  2   2   2   2
    3   3   3
      4   4
        5


          1 
       2    2 
    3    3     3  
  4   4    4    4 
5  5     5    5    5  

*/


for($x=1;$x<=5;$x++)
{
    for($z=1;$z<$x;$z++){
        echo "&nbsp&nbsp";
    }
    for($y=1;$y<=6-$x;$y++)
    {
        echo "$x &nbsp&nbsp";
    }

        echo "<br>";
}


echo"<br>";
echo "==============================================================================================";
echo"<br>";



for($x=1;$x<=5;$x++)
{
    for($z=1;$z<=6-$x;$z++){
        echo "&nbsp&nbsp";
    }
    for($y=1;$y<=$x;$y++)
    {
        echo "$x &nbsp&nbsp";
    }

        echo "<br>";
}



?>