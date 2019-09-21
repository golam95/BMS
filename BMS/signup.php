<?php ob_start(); ?>
<?php include("inc/header.php"); ?>
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
<!--header-->
		<!--banner-->
		<div class="banner1">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>Sign Up</span></h3>
			</div>
		</div>
	<!--banner-->
 
    <div class="content">
    	              
                    <?php
                        if ($_SERVER['REQUEST_METHOD']=='POST'&&isset($_POST['register'])) {
                         $userReg=$ur->userRegtration($_POST);
                            }

                     ?>
    	<div class="row">
              <div class="col-md-12">
              <div class="panel panel-default">
              
            <div class="panel-heading" style="text-align: center; font-size: 24px;">
               
            </div>
            <!-- /panel-heading -->
            <div class="panel-body">
                 
               <h1>Register New Account</h1>

           <div class="alert alert-danger" role="alert">
								   <?php 
                if (isset($userReg)) {
                    echo($userReg);
                }
                 ?>
						</div>
			
                <form  action="" method="post"  id="getOrderReportForm">
                  <div class="form-group" class="all-sizable">
				  <div class="col-xs-5">
				    <label for="email">Name:</label>
				    <input  type="text" class="form-control" name="name" placeholder="Your Name" id="email">
				  </div>
				  </div>
				  <div class="form-group">
				  <div class="col-xs-5">
				    <label for="pwd">Country:</label>
				    <input type="text" class="form-control" name="country" placeholder="Your Country" id="pwd">
				  </div>
                </div>
                <div class="form-group">
				  <div class="col-xs-5">
				    <label for="email">City:</label>
				    <input type="text" class="form-control" name="city" placeholder="Your City" id="email">
				  </div>
				  </div>
				  <div class="form-group">
				  <div class="col-xs-5">
				    <label for="pwd">Phone:</label>
				    <input type="text" class="form-control" name="phone" placeholder="Your Phone" id="pwd">
				  </div>
                </div>
                <div class="form-group">
				  <div class="col-xs-5">
				    <label for="email">Zip:</label>
				    <input type="text" class="form-control" name="zip" placeholder="Your Zip-Code" id="email">
				  </div>
				  </div>
				  <div class="form-group">
				  <div class="col-xs-5">
				    <label for="pwd">Email:</label>
				    <input type="email" class="form-control" name="email" placeholder="Email"  id="pwd">
				  </div>
                </div>
                <div class="form-group">
				  <div class="col-xs-5">
				    <label for="email">Address:</label>
				    <input type="text" class="form-control" name="address" placeholder="Your Address" id="email">
				  </div>
				  </div>
				  <div class="form-group">
				  <div class="col-xs-5">
				    <label for="pwd">Password:</label>
				    <input type="password" class="form-control" name="password" placeholder="Password" id="pwd"><br>
				  </div>
                </div>
                  <div class="form-group">
                    <div class="col-xs-5">
                      <button type="submit" class="btn btn-success" name="register" id="generateReportBtn"> <i class="glyphicon glyphicon-ok-sign"></i> Create Account</button>
                    </div>
					
                  </div>
				  <div class="form-group">
                    <div class="col-xs-5">
                      <button type="submit" class="btn btn-success" name="backtologin" id="generateBackloginbutton"> <i class="glyphicon glyphicon-ok-sign"></i>Back To LogIn</button>
                    </div>
					
                  </div>
                </form>
                
          
            <!-- /panel-body -->
        </div>
    </div>
    <!-- /col-dm-12 -->
</div>
       <div class="clear"></div>
    </div>
 </div>
  
  
   
   
   
   </div>
<?php include("inc/foote.php"); ?>
 <?php ob_end_flush(); ?>