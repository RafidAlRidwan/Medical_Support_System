<?php 
//session_start();

?>

<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">


				<li><a href="#"><i class="icon fa fa-user"></i>Welcome - {{ Auth::user()->name }}</a></li>
				

					<li><a href="{{route('admincategory.edit', $object3->id)}}"><i class="icon fa fa-user"></i>My Account</a></li>
					
					<li><a href="my-cart.php"><i class="icon fa fa-shopping-cart"></i>Request List</a></li>
					<li><a href="track-orders.php"><i class="icon fa fa-key"></i>Track</a></li>
                    <li><a href="my-wishlist.php"><i class="iicon fa fa-heart"></i>WishList</a></li>
					
<li><a href=""><i class="icon fa fa-sign-in"></i>Login</a></li>

else{ ?>
	
				<li><a href=""><i class="icon fa fa-sign-out"></i>Logout</a></li>
				
				</ul>
			</div><!-- /.cnt-account -->

<!-- <div class="cnt-block">
				<ul class="list-unstyled list-inline">
					<li class="dropdown dropdown-small">
						<a href="admin/index.php" class="dropdown-toggle" ><span class="key">Admin</b></a>
						
					</li>

				
				</ul>
			</div> -->
			
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->