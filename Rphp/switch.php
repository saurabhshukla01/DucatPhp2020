<?php
// multidecision making statement
// processing fast

$a = 5;
$b = 2;
$choice = "add";

switch($choice)
{
	case 'add' : $c = $a + $b;
				echo $c;
				break;
				
	case 'mul' : $c = $a * $b;
				echo $c;
				break;
				
	default : echo "Enter Valid Choice";
}

?>