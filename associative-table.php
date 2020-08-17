<html>
	<head>
		<title>Array</title>
	</head>

	<body>

		<table border="1" align="center">
			<tr>
				<th>S.No.</th>
				<th>Country</th>
				<th>Capital</th>
				<th>Currency</th>
				<th>Employee</th>
			</tr>

			<?php

			$arr = ['India'=>['capital'=>'Delhi','currency'=>'Ruppee','employee'=>20000],
			        'USA'=>['capital'=>'Washington','currency'=>'Dollar','employee'=>90000],
			        'Pakistan'=>['capital'=>'Islamabad','currency'=>'Ruppee','employee'=>5000],
			        'India 1'=>['capital'=>'Delhi','currency'=>'Ruppee','employee'=>90000],
			        'USA 1'=>['capital'=>'Washington','currency'=>'Dollar','employee'=>10000],
			        'India 2'=>['capital'=>'Delhi','currency'=>'Ruppee','employee'=>1000000],
			        'USA 2'=>['capital'=>'Washington','currency'=>'Dollar','employee'=>8000000]];

			$sn = 1;
			foreach($arr as $i=>$v)
			{
				echo "<tr>";
					echo "<td>$sn</td>";
					echo "<td>$i</td>";

					foreach($v as $a=>$b)
					{
						echo "<td>$b</td>";
					}
				echo "</tr>";

				$sn++;
			}

			?>

		</table>

	</body>
</html>