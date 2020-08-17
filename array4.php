<?php
//  Multidiemantion array  :
// print foreach loop data using key with data :

$arr = [
        "India"=>['company'=>90 , 'Econamy'=>"220$ crore"],
        "USA"=>['company'=>1090 , 'Econamy'=>"12220$ Trilion"],
        "Pakistan"=>['company'=>10 , 'Econamy'=>"20$ crore"]
        ];

foreach($arr as $x=>$v)
{
    echo $x."<br>";
}

echo "<br>";

// Print the key with multi dimention array data using foreach loop then use this on :

$arr = [
        "India"=>['company'=>90 , 'Econamy'=>"220$ crore"],
        "USA"=>['company'=>1090 , 'Econamy'=>"12220$ Trilion"],
        "Pakistan"=>['company'=>10 , 'Econamy'=>"20$ crore"]
        ];

foreach($arr as $x)
{
    foreach($x as $y=>$v)
    {
        echo "$y is ".$v."<br>";
    }
}
?>