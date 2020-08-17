<?php

$a = 5;
$b = 7;
$choice = "rem";

switch ($choice) {
    case "add":
        $c = $a + $b;
        echo $c;
        break;
    case "mul":
        $c = $a * $b;
        echo $c;
        break;
    case "div":
        $c = $a / $b;
        echo $c;
        break;
    case "rem":
        $c = $a % $b;
        echo $c;
        break;

    default:
        echo "Enter Valid choice";
}

?>