<html>
	<head>
		<title>Search</title>
		
		<script src="jquery-3.5.1.min.js"></script>
		
		<script>
			
			$(document).ready(function()
			{
				$('#ser').keyup(function()
				{
					d = $(this).val();
					
					$.get("searchapi.php",{uv:d},function(res)
					{
						//alert(res);
						$("#target").html(res);
					});
					
				})
			})
			
		</script>
	</head>

	<body>
		
		<input type="text" id="ser" autocomplete="off">
		
		<div id="target"></div>
		
	</body>
</html>