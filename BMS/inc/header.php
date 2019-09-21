<?php 
include 'lib/Session.php'; 
Session::init();
include_once 'lib/Database.php';
include_once 'helpers/Format.php'; 

spl_autoload_register(function($class){
include_once"classes/".$class.".php";
});
$db=new Database();
$fm=new Format();
$pd=new Product();
$cat=new Catagory();
$ct=new Cart();	
$ur=new User();
 ?>
<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Bakery Management System</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/own.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bakery Shop" />

<script src="js/jquery.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!--search jQuery-->
	<script src="js/main.js"></script>
<!--search jQuery-->
<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
 </script>
 <!--mycart-->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
 <!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/imagezoom.js"></script>
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
  <!--start-rate-->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!--//End-rate-->

		<style>
  .toptobuttom{
  background:url("images/top.png")no-repeat scroll 0 0;
	bottom:50px;
	right:10px;
	position:fixed;
	width:50px;
	height:50px;
	cursor:pointer;
	}
.alignemnt{
	width:200px;
	bottom:0px;
	margin-right:0px;
	right:10px;
	position:fixed;
	text-align:center;
	height:40px;
	border-radius:4px;
	cursor:pointer;
	border-top:4px solid white;
	border-right:1px solid white;
	border-left:1px solid white;
	border-bottom:1px solid #532113;
	background:#532113;
	}  
	.margin_alignment{margin-left:20px;height:45px;}
	
</style>

</head>
<body>
	<!--header-->
		<div class="header">
			<div class="header-top">
				<div class="container">
					 <div class="top-left">
						<a href="#"> Help  <i class="glyphicon glyphicon-phone" aria-hidden="true"></i> +0123-456-789</a> 
						<a href="#"><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Store Locator</a>
					</div>
					<?php 
			      if (isset($_GET['uid'])) {
			      	$userid= Session::get("userId");
			      	$deldata=$ct->delUserCart();
			      	$delCom=$pd->delCompareData($userid);
			      	Session::destroy();
			      }

			       ?>
					<div class="top-right">
					<ul>
						<?php 
						if (Session::get("userId")) {
						 ?>
						<li><a href=""><i class="fa fa-user"></i> <?php echo(Session::get("userName")); ?></a></li>
						<?php } ?>
						<?php  
						$ckCart=$ct->checkCartTable();
	  if ($ckCart) {?>
	  <li><a href="cart.php"><i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>Cart</a></li>
	  <li><a href="payment.php"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i>Payment</a></li>
	  <?php } ?>
	  <?php 
	  $uid= Session::get("userId");
	  $ckOrder=$ct->checkOrder($uid);
	  if ($ckOrder) {?>
		<li><a href="orderdetails.php"><i class="glyphicon glyphicon-eye-open" aria-hidden="true"></i>Checkout</a></li>
		<?php } ?>
						<?php
         $login= Session::get("userlogin");
        if ($login==false) {?>
             <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
             <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <?php }else{?>
      <li><a href="?uid=<?php echo(Session::get('userId')) ; ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
             
       <?php } ?>
					</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="heder-bottom">
				<div class="container">
					<div class="logo-nav">
						<div class="logo-nav-left">
							<h1><a href="index.php"><img src="images/h.jpg" alt=" "/>Bakery <span>Management System</span></a></h1>
						</div>
						<div class="logo-nav-left1">
							<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="index.php" class="act">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
									<li><a href="contact.php">Customer Feedback</a></li>
									<!-- Mega Menu -->
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Product<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="col-sm-3  multi-gd-img">
													<ul class="multi-column-dropdown">
														<?php 
											$getCat=$cat->getAllCat();
											if ($getCat) {
												while ($result=$getCat->fetch_assoc()) {?>
										      <li><a href="productbycat.php?catId=<?php echo($result['catId']); ?>"><?php echo($result['catName']); ?></a></li>
										      <?php }} ?>
														
													</ul>
												</div>
											</div>
										</ul>
									</li>
							    </ul>
							</div>
							</nav>
						</div>
						
						<div class="logo-nav-right">
							<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
							</ul> <!-- cd-header-buttons -->
							<div id="cd-search" class="cd-search">
								<form action="ss.php" method="post" class="navbar-form navbar-right">
				    <div class="input-group">
				    	<input type="text" class="form-control" name="search" placeholder="Search keyword..."/>
				    	 <div class="input-group-btn">
				    	<input type="submit" class="btn btn-info" name="submit" value="Search"/>
				    	 </div>
				    	 </div>
				    </form>
							</div>	
						</div>
						
						<div class="header-right2">
							<div class="cart box_1">
								<a href="checkout.html">
									<h3> <div class="total">
										<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
										<img src="images/bag.png" alt="" />
									</h3>
								</a>
								<p><a href="javascript:;" class="simpleCart_empty">
									<?php 
								$getData=$ct->checkCartTable();
								if ($getData) {
									$sum=session::get("sum");
									$qty=session::get("qty");
								echo("Tk.".$sum."  Qty: ".$qty);
								}else{
									echo("(Empty Cart)");
								}
								
								 ?>
								</a></p>
								<div class="clearfix"> </div>
							</div>	
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		
		
		<!--header-->