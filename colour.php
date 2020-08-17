<?php

if(isset($_POST['sub']))
{
	$c = $_POST['col'];

}
else
{
	$c = "white";
}


?>
<html>
	<head>
		<title>Sum</title>
	</head>


	<body bgcolor="<?php echo $c; ?>">

		<form method="post">

			<h3> Backagroun Colour is : </h3>
			<select name="col">
				<option value="" hidden>Select</option>
				<option value="red">Red</option>
				<option value="green">Green</option>
				<option value="blue">Blue</option>
				<option value="Yellow">Yellow</option>
				<option value="Orange">Orange</option>
				<option value="Skyblue">Skyblue</option>
			</select>

			<input type="submit" name="sub" value="Submit">

		</form>

	</body>
</html>
