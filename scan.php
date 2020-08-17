<?php

// write a program to display all the images of directory on web page.


$sc = scandir("images");

//echo "<pre>";
//print_r($sc);
//echo "</pre>";




foreach($sc as $v)
{
	if($v!="." && $v!=".." && $v!="thumbs.db")
	{
	echo "<img src='images/$v' height='50' width='100'>";
	}
}



?>