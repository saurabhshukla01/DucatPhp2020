<?php

extract($_POST);

if(isset($sub))
{
	echo "Data Insert";
}

?>
<html>
	<head>
		<title>Validation</title>
		
		
	</head>

	
	<body>
		
		<form name="myform" method="post">
			Name <input type="text" name="un" pattern="[a-zA-Z]+" title="User Name Only Support Alphabets" required>
			<br>
			Email <input type="text" name="em" pattern="[a-zA-Z0-9_]+@[a-zA-Z]+\.[a-zA-Z]{2,3}" title="Enter Valid Email" required>
			<br>
			Mobile <input type="text" name="mn" pattern="[6-9]{1}[0-9]{9}" title="Enter Valid Mobile Number" required>
			<br>
			<input type="submit" name="sub">
		</form>
		
		
	</body>
</html>