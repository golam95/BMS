<?php ob_start(); ?>
<?php include("inc/header.php"); ?>
<?php 
if (!isset($_GET['pid'])||$_GET['pid']==NULL ||$_GET['pid']!=$_GET['pid']) {
    echo "<script>window.location = '404.php';</script>";
}else{
    // $id=$_GET['catid'];
    $id=preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['pid']);
}
if ($_SERVER['REQUEST_METHOD']=='POST'&&isset($_POST['submit'])) {
    $quantity=$_POST['quantity'];
    $addCart=$ct->addToCart($quantity,$id);
}
 ?>
<!--banner-->
		<div class="banner1">
			<div class="container">
				<h3><a href="index.php">Home</a> / <span>view product</span></h3>
			</div>
		</div>
	<!--banner-->
	<!--content-->
		<div class="content">
			<!--single-->
			<div class="single-wl3">
				<div class="container">
					<div class="single-grids">
					
				<?php 
				$getPd=$pd->getSingleProduct($id);
				if ($getPd) {
					while ($result=$getPd->fetch_assoc()) {
					
				 ?>	
						<div class="col-md-9 single-grid">
							<div clas="single-top">
								<div class="single-left">
									<div class="flexslider">
										<ul class="slides">
											<li data-thumb="images/si.jpg">
												<div class="thumb-image"> <img height="200px"  src="admin/<?php echo($result['image']); ?>" alt="" data-imagezoom="true" class="img-responsive"> </div>
											</li>
											
										 </ul>
									</div>
								</div>
								<div class="single-right simpleCart_shelfItem">
									<h4><?php echo($result['productName']); ?></h4>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<p class="price item_price"><?php echo($result['price']); ?> TK</p>
									<div class="description">
										<p><span>Description : </span> <?php echo($result['body']); ?></p>
									</div>
									<div class="color-quality">
										<h6>Quality :</h6>
										<?php
					if (isset($addCart)) {
					 	echo($addCart);
					 } 
					 ?>
											<div class="quantity"> 
						<form action="" method="post">
						<input type="number" class="buyfield" name="quantity" value="1"/>
						<input type="submit" class="buysubmit" name="submit" value="Buy Now"/>
					</form>	
											</div>
												<!--quantity-->
														<script>
														$('.value-plus1').on('click', function(){
															var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
															divUpd.text(newVal);
														});

														$('.value-minus1').on('click', function(){
															var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
															if(newVal>=1) divUpd.text(newVal);
														});
														</script>
													<!--quantity-->
									</div>
									<div class="women1">
									  <div class="cartitembutton">
									     
									 </div>
									</div>
									
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						
						<?php }} ?>
						
						<div class="col-md-3 single-grid1">
							<h3>Recent Products</h3>
							<?php 
	      $getFpd=$pd->getFeaturedProduct();
	      if ($getFpd) {
	      	while ($result=$getFpd->fetch_assoc()) {
	      		
	      
	       ?>
							<div class="recent-grids">
								<div class="recent-left">
									<a href="viewproduct.php?pid=<?php echo($result['productId']); ?>"><img class="img-responsive " src="admin/<?php echo($result['image']); ?>"  alt=""></a>	
								</div>
								<div class="recent-right">
									<h6 class="best2"><a href="viewproduct.php?pid=<?php echo($result['productId']); ?>"><?php echo($result['productName']); ?></a></h6>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<span class=" price-in1"><?php echo($result['price']); ?> TK</span>
								</div>	
								<div class="clearfix"> </div>
							</div>
							<?php }} ?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<!--Product Description-->
				
				
				</div>	
			<!--new-arrivals-->
		</div>
		<!--content-->
	<?php include("inc/foote.php"); ?>
	<?php ob_end_flush(); ?>