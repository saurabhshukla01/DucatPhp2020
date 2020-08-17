<?php
$link = mysqli_connect("localhost","root","","ajax6");
?>
<html>
	<head>
		<title>Ajax</title>

		<script src="jquery-3.5.1.min.js"></script>

		<script>

			$(document).ready(function()
			{
				$('#subcategoryspan').hide();

				$('#category').change(function()
				{
					c = $(this).val();

					$.ajax({
						url : "ddapi.php",
						method : "get",
						data : {catid:c},
						success : function(res)
						{
							//alert(res);
							$('#subcategory').html(res);
							$('#subcategoryspan').show();
						},
						error : function()
						{
							alert('Not Working');
						}
					})
				})
			})

		</script>
	</head>

	<body>

		Category <select id="category">
					<option value="" hidden>Select</option>
					<?php
					$result = mysqli_query($link,"select * from category");

					while($arr = mysqli_fetch_assoc($result))
					{
					?>
						<option value="<?=$arr['id']?>"><?= $arr['cname'] ?></option>
					<?php
					}
					?>
				</select>




		<span id="subcategoryspan">

		Sub-Category <select id="subcategory">
					<option value='' hidden>Select</option>
				</select>

		</span>


	</body>
</html>