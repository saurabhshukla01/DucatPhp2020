<?php

$n = 4;

for($i=1;$i<=$n;$i++)
{
	for($j=1;$j<=$i;$j++)
	{
		echo "{";
	}
	echo "*";
	for($j=1;$j<=$i;$j++)
	{
		echo "}";
	}
	echo "<br>";


}

?>