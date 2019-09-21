<?php ob_start(); ?>
<?php include("inc/header.php"); ?>
<?php
$login= Session::get("userlogin");
if ($login==true) {
   header("Location:order.php");
}
 ?>
 <?php
    if ($_SERVER['REQUEST_METHOD']=='POST'&&isset($_POST['login'])) {
     $userLog=$ur->userLogin($_POST);
       }

  ?>
  <style>
div.relative {
	padding: 2px;
    position: relative;
     top: 30px;
     left: 400px;
    width: 600px;
    height: 400px;
    border: 3px solid #73AD21;
} 
.panel-heading a:hover{text-decoration: none;}

/*div.absolute {
    position: absolute;
    top: 80px;
    right: 0;
    width: 200px;
    height: 100px;
    border: 3px solid #73AD21;
}*/
</style>
<!--header-->
		<!--banner-->
		<div class="banner1">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>Login</span></h3>
			</div>
		</div>
	<!--banner-->

    <div class="content">
    	 <div class="login">
             <div class="main-agileits">
            <div class="form-w3agile">
			<h3>Login To Bakery Shop</h3>
			
			<div class="alert alert-danger" role="alert">
								   <?php 
                if (isset($userLog)) {
                    echo($userLog);
                }
                 ?>
						</div>
						
			
         
             
         
            <!-- /panel-heading -->
           
                
                <form class="form-horizontal" action="" method="post"  id="getOrderReportForm">
                  <div class="form-group">
                   
                    <div class="col-sm-12">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                          <input id="email" type="email" class="form-control" name="email" placeholder="Enter Your Email">
                        </div>
                    <!--  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="email"   name="email"  class="form-control" id="startDate"  placeholder="Enter Your Email" /> -->
                    </div>
                  </div>
                  <div class="form-group">
                    
                    <div class="col-sm-12">
                     <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                      <input id="password" type="password" class="form-control" name="password" placeholder="Enter Your Password">
                    </div>
                     <!--  <input type="password"  name="password"   class="form-control" id="startDate"  placeholder="Enter Your Password" /> -->
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-12">
                      <input type="submit" class="btn btn-success" name="login" id="generateReportBtn"> 
		
                    </div>
                  </div>
				  <div class="forg">
						<a href="forgetpass.php" class="forg-left">Forgot Password</a>
						<a href="registered.html" class="forg-right">Register</a>
					<div class="clearfix"></div>
					</div>
                </form>
               
          
            <!-- /panel-body -->
        </div>
    </div>
    <!-- /col-dm-12 -->
</div>
    </div>
 
<?php include("inc/foote.php"); ?>
 <?php ob_end_flush(); ?>