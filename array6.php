<?php

/*

Write a program Let be a array , user input a variable of single digit , after check the varriable abilevel in array or not,
if varriable abilevel in array , so count how many times its will come in array .

*/

$arr = [2,3,4,5,2,4,2,5,6,3,2];
$n = 3;
$digit_count = 0;
for($i=0;$i<count($arr);$i++)
{
    if($arr[$i]==$n)
    {
        $digit_count = $digit_count +1;
    }
}
if($digit_count == 0)
{
    echo "Given no $n is not in Given array<br>";
}
else
{
    echo "Given no $n is in Given array $digit_count times coming <br>";
}
echo "Given no $n in array ".$digit_count." times coming <br>";
?>
