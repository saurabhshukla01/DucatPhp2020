
	<div class="span9">

<!--
New Products
-->
	<div class="well well-small">
	<h4><?= $categoryname ?> Products</h4>
	
		<div class="row-fluid">
		  <ul class="thumbnails">
		  
		  <?php
			
			foreach($product as $lp)
			{
		  
		  ?>
		  
			<li class="span4">
			  <div class="thumbnail">
				 
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="product_details.html"><img src="<?=base_url()?>uploads/product/<?=$lp['image']?>" alt="" width="70%"></a>
				<div class="caption cntr">
					<p><?=$lp['mobile_name']?></p>
					<p style="color:red; text-decoration:line-through;"><strong> Rs <?= $lp['price'] ?> /-</strong></p>
					<p style="color:blue;" ><strong><?= $lp['discount'] ?> %off</strong></p>
					<p style="color:green;"><strong> Rs <?= $lp['price'] - ($lp['price']*$lp['discount'])/100?> /-</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			
			<?php
			
			}
			
			?>
			
		  </ul>
		</div>
	</div>
	
	</div>
	</div>
