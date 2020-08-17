<?php

// empty() ==>  this function is count 0 is empty , but all no is not empty . 0 is also empty no  (1,2,3 ...) is not empty .
// isset() ==>  this function is count 0 is counting all no is isset () method .  (0,1,2,3 ...)
// empty()  ==>    check empty or not, it consider 0 as no data
// isset()  ==>   check data availaible or not, it consider 0 as data


// $x = "";
// $x = 0;
$x = 5;
echo "Check data is empty or not : <br>";
if(empty($x))
{
    echo "Any data is not Avilable <br>";
}
else
{
    echo "Any data is Avilable <br>";
}

echo "<br>--------------------------------------</br>";

$x = 0;
echo "Check data is set or not : <br>";
if(isset($x))
{
    echo "Any data is not Avilable <br>";
}
else
{
    echo "Any data is Avilable <br>";
}


?>