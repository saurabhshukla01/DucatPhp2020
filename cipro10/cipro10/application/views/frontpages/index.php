<script>

	$(document).ready(function()
	{
		
		getcartinfo();
		
		$('.addcart').click(function()
		{
			var mid = $(this).attr('mid');
			var mname = $(this).attr('mname');
			var mprice = $(this).attr('mprice');
			var mimage = $(this).attr('mimage');
			var mdiscount = $(this).attr('mdiscount');
			var mquan = $('.mquan').val();
			
			// add data in cart
			$.ajax({
				method : 'get',
				url : 'http://localhost/cipro10/Front/addtocart',
				data : {mid:mid,mname:mname,mprice:mprice,mimage:mimage,mdiscount:mdiscount,mquan:mquan},
				success : function(res)
				{
					alert(res);
					getcartinfo();
				},
				error : function()
				{
					alert('Not Working');
				}
			})
		})
		
		
		
		// get data from cart
		
		
		function getcartinfo()
		{
			$.ajax({
				method : 'get',
				url : 'http://localhost/cipro10/Front/getcartdata',
				success : function(res)
				{
					//alert(res);
					$('#cartinfoarea').html(res);
				},
				error : function()
				{
					alert('Not Working');
				}
			})
		}
	})


</script>


	<div class="span9">
	<?php include("slider.php") ?>
<!--
New Products
-->
	<div class="well well-small">
	
	
		<div class="row-fluid">
		  <ul class="thumbnails">
		  
		  <?php
			
			foreach($latestpro as $lp)
			{
		  
		  ?>
		  
			<li class="span4">
			  <div class="thumbnail">
				 
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="<?=base_url()?>Front/productdetails/<?=$lp['pid']?>/<?=$lp['price']?>"><img src="<?=base_url()?>uploads/product/<?=$lp['image']?>" alt="" width="70%"></a>
				<div class="caption cntr">
					<p><?=$lp['mobile_name']?></p>
					<p style="color:red; text-decoration:line-through;"><strong> Rs <?= $lp['price'] ?> /-</strong></p>
					<p style="color:blue;" ><strong><?= $lp['discount'] ?> %off</strong></p>
					<p style="color:green;"><strong> Rs <?= $lp['price'] - ($lp['price']*$lp['discount'])/100?> /-</strong></p>
					
					<input type="hidden" class="mquan" value="1" style="width:50%" placeholder="Enter Quantity">
					
					<h4><a class="shopBtn addcart" href="javascript:void()" title="add to cart" mid="<?=$lp['pid']?>" mname="<?=$lp['mobile_name']?>" mprice="<?=$lp['price']?>" mimage="<?=$lp['image']?>" mdiscount="<?=$lp['discount']?>"> Add to cart </a></h4>
					
					
					<br class="clr">
				</div>
			  </div>
			</li>
			
			<?php
			
			}
			
			?>
			
		  </ul>
		</div>
				<h1 align="center"><?=$pagelinks;?></h1>
	</div>
	
	</div>
	</div>
