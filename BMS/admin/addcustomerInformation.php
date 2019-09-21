<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Catagory.php'; ?>



<?php 
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		
		$customer_Name=$fm->validation($_POST['inputUserName']);
		$customer_Email=$fm->validation($_POST['inputEmail']);
		$customer_Nid=$fm->validation($_POST['inputNid']);
		$customer_phone=$fm->validation($_POST['inputPhoneNo']);
		$customer_shopName=$fm->validation($_POST['inputShopName']);
		$customer_Steetno=$fm->validation($_POST['inputSteetNo']);
		$customer_Address=$fm->validation($_POST['inputAddress']);
		$customer_Gender=$fm->validation($_POST['gender']);
		 
		 $customer_Name=mysqli_real_escape_string($db->link,$customer_Name);    
		 $customer_Email=mysqli_real_escape_string($db->link,$customer_Email);     
		 $customer_Nid=mysqli_real_escape_string($db->link,$customer_Nid);     
		 $customer_phone=mysqli_real_escape_string($db->link,$customer_phone);     
		 $customer_shopName=mysqli_real_escape_string($db->link,$customer_shopName);     
		 $customer_Steetno=mysqli_real_escape_string($db->link,$customer_Steetno);     
		 $customer_Address=mysqli_real_escape_string($db->link,$customer_Address);
		 $customer_Gender=mysqli_real_escape_string($db->link,$customer_Gender);     
		 $date = date('Y-m-d');    
		 $error="";
		 
		
	 if (empty($customer_Name)||empty($customer_Email)||empty($customer_Nid)||empty($customer_phone)||empty($customer_shopName)||empty($customer_Steetno)||empty($customer_Address)) {
	    $error="Field must not be empty";
	 }elseif (!filter_var($customer_Name,FILTER_SANITIZE_SPECIAL_CHARS)) {
	 	$error="Invalid Name!";
	 }else if(strlen($customer_phone) < 11){
		 $error="Sorry, Invalid COntact Number";
	 }else if (!filter_var($customer_Email, FILTER_VALIDATE_EMAIL)) {
         $error = "Invalid email format"; 
	}else{
		$query = "SELECT cus_nid FROM customerinfo WHERE cus_nid = '$customer_Nid'";
		$check_NID = $db->select($query);
		if($check_NID){
			 $error="Sorry, The Customer NID Is Already Exist!!!" ; 
		}else{
		    $query = "INSERT INTO customerinfo(cus_name,cus_email,cus_nid,cus_contactno,cus_shopname,cus_shoplocation,cus_address,cus_sex,cus_date)   
           VALUES('$customer_Name','$customer_Email','$customer_Nid','$customer_phone','$customer_shopName','$customer_Steetno','$customer_Address','$customer_Gender','$date')"; 
		   
		  $inserted_rows = $db->insert($query);    
          if ($inserted_rows) {  
           $msg="Add a New Position!!" ;  
          }else {   
          $error="Not Add a New Position!!" ;  
          }
			
		}
		
	 }
	 } 
 ?>


<style>
.form-group{width:400px;margin-left:60px;}
.button_access{margin-left:270px;}

</style>

<div class="content">
        <div class="header">
		
		<div class="titleleft">
		   <ul class="breadcrumb">
            <li><a href="index.html"><span class="glyphicon glyphicon-home"></span>Home</a> </li>
            <li><a href="viewCustomerinformation.php"><span class="glyphicon glyphicon-arrow-left"></span> ViewCustomer</a> </li>
			<li class="active">Customer</li>
        </ul>
		</div>
		<div class="titleright">
		 <h1 class="page-title">Add Customer Information</h1>
		</div>
     </div>
	 
	 
 <div class="main-content">
            
           <div class="row">
		   
		   <div class="col-xs-12">
		       
	 <form action="" method="post">
	 
	 <div class="col-md-6">
	 
	  <div class="form-group">
	       <?php 
				if (isset($error)) {
					
					echo("<span style='color: red;margin-left:90px;font-weight:bold;'>$error</span>");
				}
				if (isset($msg)) {
					
					echo("<span style='color: green;margin-left:50px;font-weight:bold;'>$msg</span>");
				}
			  ?>
	   </div>
	 
	        <div class="form-group">
			  <label for="inputUserName">UserName</label>
			  <input class="form-control" type="text" name="inputUserName"/>
			 </div>
			 
			 <div class="form-group">
			  <label for="inputUserName">Email</label>
			  <input class="form-control" type="text" name="inputEmail"/>
			 </div>
			
			  <div class="form-group">
			  <label for="inputUserName">NID</label>
			  <input class="form-control" type="text" name="inputNid"/>
			 </div>
			 <div class="form-group">
			  <label for="inputUserName">Phone No</label>
			  <input class="form-control" type="text" name="inputPhoneNo"/>
			 </div>
			 
	</div>
	 
	 <div class="col-md-6">
	         
	 <div class="form-group">
			  <label for="inputUserName">Shop Name</label>
			  <input class="form-control" type="text" name="inputShopName"/>
			 </div>
	 
	 <div class="form-group">
			  <label for="inputUserName">Shob Location</label>
			  <input class="form-control" type="text" name="inputSteetNo"/>
			 </div>
			  <div class="form-group">
			   <label for="inputdesingation">Customer Address</label>
			  <input class="form-control"  type="text" name="inputAddress"/>
			 </div>
			 
			 <div class="form-group">
				  <label for="gender">Sex</label>
				  <select class="form-control" name="gender">
					<option>Male</option>
					<option>Female</option>
				</select>
				</div>
		</div>
		 
		<div class="form-group">
                  <label for="gender"></label>
			     
			    <button class="form-control button_access"  type="submit" class="btn"><span class="glyphicon glyphicon-plus-sign">Add</button>
				
		  </form>
		  
		</div>
		   
	   </div>
		   
      </div>		

<?php include 'inc/footer.php';?>