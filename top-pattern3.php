<?php

/*

Q write a program to print table till given number.
$no = 4;
1........
2........
3........
4........

*/

$n = 4;
echo "User choice is $n now print all table till to $n numbers....<br><br>";
for($i=1;$i<=$n;$i++)
{
    $a = $i;
    for($j=1;$j<=10;$j++)
    {
        $t = $a * $j;
        echo "&nbsp&nbsp".$t."&nbsp&nbsp";
    }
        echo "<br>";

}

?>