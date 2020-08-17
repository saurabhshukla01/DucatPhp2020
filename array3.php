<?php

// associtative array using :

$arr=["india"=>"country","price"=>200];
echo $arr["india"];
echo "<br>";
echo $arr["price"];

echo "<br>";

$arr=["india"=>"country","price"=>200];
foreach($arr as $v)
{
    echo $v."<br>";
}

?>