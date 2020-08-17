
	<div class="span9">
    <ul class="breadcrumb">
    <li><a href="index.html">Home</a> <span class="divider">/</span></li>
    <li><a href="products.html">Items</a> <span class="divider">/</span></li>
    <li class="active">Preview</li>
    </ul>	
	<div class="well well-small">
	<div class="row-fluid">
			<div class="span5">
			<div id="myCarousel" class="carousel slide cntr">
                <div class="carousel-inner">
                  <div class="item active">
                   <a href="#"> <img src="<?=base_url()?>uploads/product/<?=$product->image?>" alt="" style="width:70%"></a>
                  </div>
                
                </div>
               
            </div>
			</div>
			<div class="span7">
				<h3><?= $product->mobile_name ?></h3>
				<hr class="soft"/>
				
				<form class="form-horizontal qtyFrm">
				  <div class="control-group">
					<label class="control-label"><span>Rs <?=$product->price - ($product->price * $product->discount)/100?></span></label>
					<div class="controls">
					<input type="number" class="span6" placeholder="Qty.">
					</div>
				  </div>
				
				  <div class="control-group">
					<label class="control-label"><span>Color</span></label>
					<div class="controls">
					  <select class="span11">
						  <option>Red</option>
						  <option>Purple</option>
						  <option>Pink</option>
						  <option>Red</option>
						</select>
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label"><span>Materials</span></label>
					<div class="controls">
					  <select class="span11">
						  <option>Material 1</option>
						  <option>Material 2</option>
						  <option>Material 3</option>
						  <option>Material 4</option>
						</select>
					</div>
				  </div>
				  <h4><?=$product->quantity?> items in stock</h4>
				  <p>Nowadays the lingerie industry is one of the most successful business spheres.
				  Nowadays the lingerie industry is one of ...
				  <p>
				  <button type="submit" class="shopBtn"><span class=" icon-shopping-cart"></span> Add to cart</button>
				</form>
			</div>
			</div>
				<hr class="softn clr"/>


            <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
              <li class=""><a href="#profile" data-toggle="tab">Related Products </a></li>
              
            </ul>
            <div id="myTabContent" class="tab-content tabWrapper">
            <div class="tab-pane fade active in" id="home">
			  <h4>Product Information</h4>
                <table class="table table-striped">
				<tbody>
				<tr class="techSpecRow"><td class="techSpecTD1">Color:</td><td class="techSpecTD2"><?=$product->colour?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Ram:</td><td class="techSpecTD2"><?=$product->ram;?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Season:</td><td class="techSpecTD2">spring/summer</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Usage:</td><td class="techSpecTD2">fitness</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Sport:</td><td class="techSpecTD2">122855031</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Brand:</td><td class="techSpecTD2">Shock Absorber</td></tr>
				</tbody>
				</table>
				

			</div>
			<div class="tab-pane fade" id="profile">
			
			<?php
				foreach($relatedpro as $pro)
				{
			?>
			
			<div class="row-fluid">	  
			<div class="span2">
				<a href="<?=base_url()?>Front/productdetails/<?=$pro['pid']?>/<?=$pro['price']?>"><img src="<?=base_url()?>uploads/product/<?=$pro['image']?>" alt=""></a>
			</div>
			<div class="span6">
				<h5><?=$pro['mobile_name']?></h5>
				<p>
				Nowadays the lingerie industry is one of the most successful business spheres.
				We always stay in touch with the latest fashion tendencies - 
				that is why our goods are so popular..
				</p>
			</div>
			<div class="span4 alignR">
			<form class="form-horizontal qtyFrm">
			<h3> Rs <?= $pro['price'] - ($pro['price']*$pro['discount'])/100?></h3>
			<label class="checkbox">
				<input type="checkbox">  Adds product to compair
			</label><br>
			<div class="btn-group">
			  <a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
			  <a href="product_details.html" class="shopBtn">VIEW</a>
			 </div>
				</form>
			</div>
		</div>
		
			<hr class="soften"/>
			
			<?php
				}
				?>
			
				</div>
            </div>

</div>
	
	</div>
	</div>
