<?php

include("admin/config/database.php");

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Mobilestore Website Template | single :: W3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore iphone web template, Android web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
		<link href='//fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<script src="js/jquery.min.js"></script>
		<script src="js/jqzoom.pack.1.0.1.js" type="text/javascript"></script>
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
		<script src="js/imagezoom.js"></script>
		<!-- FlexSlider -->
					<script defer src="js/jquery.flexslider.js"></script>
					<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
					</script>
					<!----->
					<script>
		$(document).ready(function(){
			$(".menu_body").hide();
			//toggle the componenet with class menu_body
			$(".menu_head").click(function(){
				$(this).next(".menu_body").slideToggle(600); 
				var plusmin;
				plusmin = $(this).children(".plusminus").text();
				
				if( plusmin == '+')
				$(this).children(".plusminus").text('-');
				else
				$(this).children(".plusminus").text('+');
			});
		});
		</script>
		
		
		<style>
			table{width:100%;}
			table,tr,th,td{border:1px solid black; text-align:center; font-weight:bold;}
		</style>
	</head>
	<body>
		
		<?php include("header.php") ?>
		
		<div class="clear"> </div>
		<?php include("navbar.php") ?>
		<!----End-top-nav---->
		<!----End-Header---->
		
		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    	
			<?php
			
				$proid = $_GET['proid']; // get from url
				$result = mysqli_query($link,"select * from product where pid='$proid'");
				
				if(mysqli_num_rows($result) == 0)
				{
					// if record not found 
					header("location:404.php");
				}
				
				$arr = mysqli_fetch_assoc($result);
				//print_r($arr);
				extract($arr);
			
			?>
		    	
		    <div class="content-grids">
				
				<div class="details-page">
		    		<div class="back-links">
		    			<ul>
		    				<li><a href="#">Home</a><img src="images/arrow.png" alt=""></li>
		    				<li><a href="#">Product</a><img src="images/arrow.png" alt=""></li>
		    				<li><a href="#">Product-Details</a><img src="images/arrow.png" alt=""></li>
		    			</ul>
		    		</div>
		    	</div>
		    	<div class="detalis-image">
		    		<div class="flexslider">
						<ul class="slides">
							<li data-thumb="images/m11.jpg">
								<div class="thumb-image"> <img src="admin/images/product/<?=$image?>" data-imagezoom="true" class="img-responsive" alt="" style="width:70%;"/> </div>
							</li>
							
						</ul>
					</div>
		    	</div>
		    	<div class="detalis-image-details">
		    		
		    		<div class="brand-value">
		    			<h3><?=$mobile_name?></h3>
		    			<div class="left-value-details">
			    			<ul>
			    				<li>Price:</li>
			    				<li><span>Rs <?=$price?></span></li>
			    				<li><h5>Rs <?=$price - ($price * $discount)/100;?></h5></li>
			    				<br />
			    				<li><p>Not rated</p></li>
			    			</ul>
		    			</div>
		    			<div class="right-value-details">
							<?php
								if($quantity > 0)
								{
								?>
									<a href="#">Instock</a>
								<?php
								}
								else
								{
								?>
									<a href="#">Outofstock</a>
								<?php
								}
							?>
						
			    			
							
			    			<p>No reviews</p>
		    			</div>
		    			<div class="clear"> </div>
		    		</div>
		    		<div class="brand-history" style="width:100%;">
		    			<h3>Description :</h3>
		    			<br>
						
						<table>
							<tr>
								<th>Ram</th>
								<th><?=$ram?></th>
							</tr>
							
							<tr>
								<th>Camera</th>
								<th><?=$camera?></th>
							</tr>
							
							<tr>
								<th>Internal Memory</th>
								<th><?=$internal_memory?></th>
							</tr>
						</table>					
						
						<?php
							if($quantity > 0)
							{
							?>
								<a href="#">Addcart</a>
							<?php
							}
						?>
						
		    			
		    		</div>
		    		
		    		<div class="clear"> </div>
		    		
		    		</div>
		    		<div class="clear"> </div>
		    		
		    
		    	</div>
		    	<?php include("sidebar.php") ?>
		    </div>
		    <div class="clear"> </div>
		    </div>
			<?php include("footer.php") ?>
	</body>
</html>

