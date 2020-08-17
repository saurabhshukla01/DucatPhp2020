<?php

$link = mysqli_connect("localhost","root","","ajax6");

if(!empty($_GET['uv']))
{
	$uservalue = trim($_GET['uv']);

	if(!empty($uservalue))
	{
	
		$result = mysqli_query($link,"select * from product where name like '$uservalue%'");
		
		if(mysqli_num_rows($result) > 0)
		{
		
			while($arr = mysqli_fetch_assoc($result))
			{
				echo $arr['name']."<br>";
			}
		
		}
		else
		{
			echo "No Result Found";
		}
	
	}
}


?>