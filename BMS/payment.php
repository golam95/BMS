<?php ob_start(); ?>
<?php include("inc/header.php"); ?>
<?php
$login= Session::get("userlogin");
if ($login==false) {
   header("Location:login.php");
}
 ?>

 
 
   
<div class="banner1">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>Payment Option</span></h3>
			</div>
</div>

 <div class="main">
    <div class="content">
       <div class="section group">
       <div class="payment">
       <h2>Choose payment option</h2>
	   	
           <a href="paymentOffline.php"><i class="glyphicon glyphicon-phone-alt" aria-hidden="true"></i> Offline payment</a>
           <a href="paymentOnline.php"><i class="glyphicon glyphicon-phone-alt" aria-hidden="true"></i> Online payment</a>
		   <a href="paymentOnline.php"><i class="glyphicon glyphicon-phone-alt" aria-hidden="true"></i> Bykash payment</a>
		   <a href="paymentOnline.php"><i class="glyphicon glyphicon-phone-alt" aria-hidden="true"></i> Datchbangla Rocket</a>
       </div>	
       <div class="back">
           <a href="cart.php"><i class="glyphicon glyphicon-arrow-left" aria-hidden="true"></i> Back To Cart</a>
       </div>
      </div>
   </div>
	</div>
   <?php include("inc/foote.php"); ?>
 <?php ob_end_flush(); ?>