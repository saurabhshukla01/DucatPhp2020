<?php

/*
Type 1 :

  n=3

  {*}
     {{*}}
          {{{*}}}

  n=4
  {*}
     {{*}}
          {{{*}}}
                  {{{{*}}}}


============================================================
Type 2 :


      1{*}
            1{*}2{*}
                  1{*}2{*}3{*}
                        1{*}2{*}3{*}4{*}



*/

//Type 1 :


// type 2 :

$n = 4;
for($i=1;$i<=$n;$i++)
{
    $b = 1;
    for($z=1;$z<=$i;$z++)
    {
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
    }
    for($j=1;$j<=$i;$j++)
    {
        echo $b."{*}";
        $b++;
    }
        echo "<br>";
}




echo "<br><br><br>";



$n = 4;
for($i=1;$i<=$n;$i++)
{
    $b = 1;
    for($z=1;$z<=$i;$z++)
    {
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
    }
    for($j=1;$j<=$i;$j++)
    {
        echo $b."{*}";
        $b++;
    }
        echo "<br>";
}



?>