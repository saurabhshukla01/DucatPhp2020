<?php

$link = mysqli_connect("localhost","root","","ajax6");

if(!empty($_GET['catid']))
{
	$categoryid = $_GET['catid'];
	
	$result = mysqli_query($link,"select * from subcategory where cid='$categoryid'");
	
	echo "<option value='' hidden>Select</option>";
	
	while($arr = mysqli_fetch_assoc($result))
	{
		$sc = $arr['scname'];
		$id = $arr['id'];
		
		echo "<option value='$id'>$sc</option>";
	}
}



?>