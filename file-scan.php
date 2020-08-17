<?php

// using scandir()  function is used then scan all directory scan using data images ..
$sc = scandir('images');
// print_r($sc);

foreach ($sc as $v)
{
    if($v != "." && $v != ".." && $v != "thumb.db")
    {
        echo "<img src='images/$v' width='100' height='100'>";
    }

}

?>