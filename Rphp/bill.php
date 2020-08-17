<?php

/*
Q wap that will calculate the bill of an electric meter based on some condition.
	Monthly Rent = Rs 250			
	first 100 units = Rs 4			
	next 100 units = Rs 6			
	next 100 units = Rs 8			
	rest units = Rs 10
*/



$unit = 250;

if($unit <= 100)
{
	$bill = ($unit*4) + 250;
	echo "User Bill = ".$bill;
}
elseif($unit>100 && $unit<=200)
{
	$unit = $unit - 100;
	$bill = ($unit*6) + 650;
	echo "User Bill = ".$bill;
}
elseif($unit>200 && $unit<=300)
{
	$unit = $unit - 200;
	$bill = ($unit*8) + 1250;
	echo "User Bill = ".$bill;
}
else
{
	$unit = $unit - 300;
	$bill = ($unit*10) + 1950;
	echo "User Bill = ".$bill;
}




?>