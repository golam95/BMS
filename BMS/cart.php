<?php ob_start(); ?>
<?php include_once("inc/header.php"); ?>
<?php 
if (isset($_GET['delPro'])) {
	$delId=preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['delPro']);
	$delProduct=$ct->delProductByCart($delId);
}

 ?>
<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $cartId=$_POST['cartId'];
    $quantity=$_POST['quantity'];
    $updateQuantity=$ct->updateCartQuantity($cartId,$quantity);
    if ($quantity<=0) {
    	$delProduct=$ct->delProductByCart($cartId);
    }
}
 ?>
 <?php 
 if (!isset($_GET['id'])) {
 	echo("<meta http-equiv='refresh' content='0;URL=?id=live'/>");
 }
  ?>

  
  
<div class="banner1">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>Cart</span></h3>
			</div>
</div>
    <div class="content">
    	<div class="cart-items">		
			<div class="container">
			    	<h2 style="text-align:center;font-weight:bold;font-size:22px;color:#C8A067;">Your Cart</h2>
			    	<?php 
			    	if (isset($updateQuantity)) {
			    		echo($updateQuantity);
			    	}
			    	if (isset($delProduct)) {
			    		echo($delProduct);
			    	}
			    	 ?>
						<table class="table">
						   <tr>
						     <th></th>
						     <th></th>
						     <th></th>
						     <th></th>
						     <th></th>
						     <th></th>
							 <th><a style="padding:5px;text-decoration:none;font-weight:bold;font-size:18px;background-color:#E45531;color:white;border-radius:5px;" href="payment.php"><i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i> Check Out</a></th>
						   </tr>
							<tr>
								<th class="t-head head-it">SL</th>
								<th class="t-head head-it ">Product Name</th>
								<th class="t-head head-it ">Image</th>
								<th class="t-head head-it ">Price</th>
								<th class="t-head head-it ">Quantity</th>
								<th class="t-head head-it ">Total Price</th>
								<th class="t-head head-it ">Action</th>
							</tr>
							<?php 
							 $getPd=$ct->getCartProduct();
							 if ($getPd) {
							 	$i=0;
							 	$sum=0;
							 	$qty=0;
							 	while ($result=$getPd->fetch_assoc()) {
							 		$i++;
							 
							 ?>
							<tr class="cross">
								<td class="ring-in t-data"><?php echo($i) ;?></td>
								<td class="ring-in t-data"><?php echo($result['productName']) ;?></td>
								<td class="ring-in t-data"><img width="100px" height="100px" src="admin/<?php echo($result['image']); ?>" alt=""/></td>
								<td class="ring-in t-data">Tk. <?php echo($result['price']); ?></td>
								<td class="ring-in t-data">
									<form action="" method="post">
									    <input type="hidden" name="cartId" value="<?php echo($result['cartId']); ?>"/>

										<input type="number" name="quantity" value="<?php echo($result['quantity']); ?>"/>
										<input type="submit" name="submit" value="Update"/>
									</form>
								</td>
								<td class="ring-in t-data">Tk. <?php 
								$total=$result['price']*$result['quantity'];
								echo($total); 
								?></td>
								<td class="t-data t-w3l"><a onclick="return confirm('Are you want to delete?');" href="?delPro=<?php echo($result['cartId']);?>">X</a></td>
							</tr>
							<?php 
							$qty=$qty+$result['quantity'];
							$sum=$sum+$total;
							Session::set("qty",$qty);
							Session::set("sum",$sum);
							 ?>
							
							<?php }} ?>
							
						</table>
						<?php 
						$getData=$ct->checkCartTable();
								if ($getData) {
						 ?>
						<table style="float:right;text-align:left;" width="40%">
							<tr>
								<th style="color:#C8A067;">Sub Total : </th>
								<td style="font-weight:bold;">Tk.<?php echo($sum) ;?></td>
							</tr>
							<tr>
								<th style="color:#C8A067;">VAT : </th>
								<td style="font-weight:bold;">10%</td>
							</tr>
							<tr>
								<th style="color:#C8A067;">Grand Total :</th>
								<td style="font-weight:bold;">Tk.<?php 
								$vat=$sum*.1;
								$gtotal=$sum+$vat;
								echo($gtotal);
								 ?> </td>
							</tr>
					   </table>
					   <?php }else{
					   	header("Location: index.php");
					   	// echo("Cart Empty! plz shop now");
					   	} ?>
					</div>
					<br/>
					
					<div class="shopping">
						<div class="shopleft">
							<a href="index.php"> <img src="images/shop.png" alt="" /></a>
						</div>
						
					</div>
    	</div>  	
       <div class="clear"></div>
    </div>

<?php include("inc/foote.php"); ?>
<?php ob_end_flush(); ?>