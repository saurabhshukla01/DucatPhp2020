<?php


$pass = 1234;
$accbalance = 200000;
$withdraw = 25000;


if($pass == 1234)
{
	if($withdraw <= $accbalance)
	{
		$accbalance = $accbalance - $withdraw;
		echo "Withdraw Successfully";
		echo "<br>Remaining Balance = ".$accbalance;
	}
	else
	{
		echo "Insufficient Account Balance";
	}
}
else
{
	echo "Enter Correct Password";
}




?>