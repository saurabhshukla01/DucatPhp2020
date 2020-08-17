	<?php
	@session_start();
	?>
	<div class="wrap">
		<!----start-Header---->
		<div class="header">
			<div class="search-bar">
				<form method="post" action="search.php">
					<input type="text" name="ser" required><input type="submit" name="sub" value="Search" />
				</form>
			</div>
			<div class="clear"> </div>
			<div class="header-top-nav">
				
				<ul>
					<?php
					if(isset($_SESSION['useremail']))
					{
					?>
						<li><a href="register.php"><img src="users/<?=$_SESSION['userimage']?>" style='height:25px; border-radius:50%;'></a></li>
						<li style='color:blue'>Welcome : <?= $_SESSION['username'] ?></li>
						<li><a href="logout.php">Logout</a></li>
						<li><a href="#">My account</a></li>
					<?php
					}
					else
					{
					?>
						<li><a href="register.php">Register</a></li>					
						<li><a href="login.php">Login</a></li>
					<?php
					}
					
					?>
					
					
					<li><a href="#">Delivery</a></li>
					<li><a href="#">Checkout</a></li>
					
					<li><a href="#"><span>shopping cart&nbsp;&nbsp;: </span></a><label> &nbsp;noitems</label></li>
				</ul>
			</div>
			<div class="clear"> </div>
		</div>
		</div>