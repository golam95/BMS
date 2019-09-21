
<?php include("inc/header.php"); ?>
<?php include("inc/slider.php"); ?>
	<?php 
	if (!isset($_POST['search'])||$_POST['search']==NULL) {
		header("Location: 404.php");
	}else{
		$searchid=$_POST['search'];
		
	}
 ?>
			<!--content-->
		<div class="content">
			<!--new-arrivals-->
				<div class="new-arrivals-w3agile">
					<div class="container">
						<h2 class="tittle">Search Products</h2>
						
						<div class="arrivals-grids">
		<?php 
	      $getFpd=$pd-> searchProduct($searchid);


	      if ($getFpd) {
	      	while ($result=$getFpd->fetch_assoc()) {
	      		
	      
	       ?>
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal4">
												<div class="grid-img">
													<img height="200px" src="admin/<?php echo($result['type']); ?>" alt="" />
												</div>
												<div class="grid-img">
													<img height="200px"  src="admin/<?php echo($result['type']); ?>" alt="" />
												</div>			
											</a>		
										</figure>	
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><?php echo($result['productName']); ?> </h6>
										<p ><del>$100.00</del><em class="item_price">$<?php echo($result['price']); ?> </em></p>
										<a href="viewproduct.php?pid=<?php echo($result['productId']); ?>" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
									</div>
								</div>
							</div>
							<?php }}else{ ?>
							 <p>Your search query not found</p>
				  <?php } ?>
							<div class="clearfix"></div>
						</div>
						
					</div>
					
					
					
					
					
					
				</div>
			<!--new-arrivals-->
				<!--accessories-->
			<div class="accessories-w3l">
				<div class="container">
					<h3 class="tittle">View All</h3>
					<span>Discount Products</span>
					<div class="button">
						<a href="#" class="button1"> Shop Now</a>
						<a href="#" class="button1"> Quick View</a>
					</div>
				</div>
			</div>
			
			
			
			<!--accessories-->
			<!--Products-->
				
				
				
				
				
				
				
				
			<!--Products-->
			
				
			<!--new-arrivals-->
		</div>
		<!--content-->
		<?php include("inc/footer.php"); ?>