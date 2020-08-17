<?php

extract($_POST);
if(isset($sub))

// if(isset($_POST['sub']))
{
    $num = $no;
    echo "User Input no is $num table is : <br>";
    for($i=1;$i<=10;$i++)
    {
        $t = $num * $i;
        echo $t."  ";
    }
}

?>