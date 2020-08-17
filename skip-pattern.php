<?php

/*

****
    *
***
    *
****


*/


for($i=1;$i<=5;$i++)
{
    for($j=1;$j<=5;$j++)
    {
        if($i==1 || $i ==3 || $i ==5)
        {
            if($j==5)
            {
                continue;
            }
            echo "*";
        }
        if($i==2 || $i ==4)
        {
            if($j==5)
            {
                echo "*";
            }
            echo "&nbsp&nbsp";
        }
    }
            echo "<br>";
}


?>