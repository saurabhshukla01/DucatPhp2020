<?php
	
// wap to store two numbers in two variables. swap the numbers of variables with eachother

$a = 5;
$b = 3;


// with the help of 3rd variables
//$c = $a;	//5
//$a = $b;	//3
//$b = $c;	//5



// without help of 3rd varibale
//$a = $a+$b;	//8
//$b = $a-$b;	//5	
//$a = $a-$b;	//3


// In a single line
$a = ($a+$b) - ($b=$a);

echo "value of a = ".$a;
echo "<br>value of b = ".$b;
	

?>