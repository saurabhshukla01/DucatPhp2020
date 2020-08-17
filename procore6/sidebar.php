<div class="content-sidebar">
		    		<h4>Categories</h4>
						<ul>
						
						<?php
							// database connect on index.php
							$result = mysqli_query($link,"select * from category");
							
							while($arr = mysqli_fetch_assoc($result))
							{
							?>
								<li><a href="category.php?cid=<?=$arr['id']?>&&cn=<?=$arr['cname']?>"><?=$arr['cname']?></a></li>
							<?php
							}
						
						?>
						
						
							
							
						</ul>
		    	</div>