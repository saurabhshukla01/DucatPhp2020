<?php

//  palindrome 

$no = 121121;
$n2 = $no;
$reverse = 0;



while($no>=1)
{
	$rem = $no%10;
	$reverse = ($reverse * 10) + $rem;
	$no = $no/10;
}

if($n2 == $reverse)
{
	echo $n2." is palindrome";
}
else
{
	echo $n2." is not palindrome";
}




	

?>