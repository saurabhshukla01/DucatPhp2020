<?php
/*
Find the calculate fine of late submitted book in collage library.

first 5 day fine 1 rs./day
next 5 day fine 2 rs./day
next 5 day fine 3 rs./day
next 5 day fine 4 rs./day
if student after 20 days than membership canceled.

*/

$day = 12;
if ($day<=5){
    $fine = ($day)*1;
    echo "Student pay this fine is ".$fine;
}
elseif($day>5 && $day <=10){
    $day = $day - 5;
    $fine = ($day)*2 + 5;
    echo "Student pay this fine is ".$fine;
}
elseif($day>10 && $day <=15){
    $day = $day - 10;
    $fine = ($day)*3 + 15;
    echo "Student pay this fine is ".$fine;
}
elseif($day>5 && $day <=20){
    $day = $day - 15;
    $fine = ($day)*4 + 30;
    echo "Student pay this fine is ".$fine;
}
else{
    echo "Student membership canceled";
}
?>