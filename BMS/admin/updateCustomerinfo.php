<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Catagory.php'; ?>



<?php 
$id = $_GET['updatecustomerinfo'];
$db = new database();
$query = "SELECT * FROM customerinfo WHERE cus_id =$id";
$getData = $db->select($query)->fetch_assoc();
$date = date('Y-m-d');

if ($_SERVER['REQUEST_METHOD']=='POST'&&isset($_POST['updateCustomer'])) {
	
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
	}else{
		
		$query = "UPDATE customerinfo
		SET
		cus_name = '$customer_Name',
		cus_email   = '$customer_Email',
		cus_nid = '$customer_Nid',
		cus_contactno = '$customer_phone',
		cus_shopname ='$customer_shopName',
		cus_shoplocation = '$customer_Steetno',
		cus_address  = '$customer_Address',
		cus_sex = '$customer_Gender',
		cus_date = '$date'
		WHERE cus_id = $id";
		$update = $db->update($query);
		 if ($update) {  
           $msg="Update the Customer Information!!" ;  
          }else {   
          $error="Opps,Sorry Not Update Customer Information!!" ;  
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
	 
	 <div class="col-md-6">
	   <div class="form-group">
			  <label for="inputUserName">UserName</label>
			  <input class="form-control" type="text" name="inputUserName" value="<?php echo $getData['cus_name']?>"/>
			 </div>
			 
			 <div class="form-group">
			  <label for="inputUserName">Email</label>
			  <input class="form-control" type="text" name="inputEmail" value="<?php echo $getData['cus_email']?>"/>
			 </div>
			
			  <div class="form-group">
			  <label for="inputUserName">NID</label>
			  <input class="form-control" type="text" name="inputNid" value="<?php echo $getData['cus_nid']?>"/>
			 </div>
			 <div class="form-group">
			  <label for="inputUserName">Shop Name</label>
			  <input class="form-control" type="text" name="inputShopName" value="<?php echo $getData['cus_shopname']?>"/>
			 </div>
			 
			  
	 
	 </div>
	 
	 <div class="col-md-6">
	         
	 <div class="form-group">
			  <label for="inputUserName">Contact No</label>
			  <input class="form-control" type="text" name="inputPhoneNo" value="<?php echo $getData['cus_contactno']?>"/>
			 </div>
	 
	 <div class="form-group">
			  <label for="inputUserName">Shop Location</label>
			  <input class="form-control" type="text" name="inputSteetNo" value="<?php echo $getData['cus_shoplocation']?>"/>
			 </div>
			  <div class="form-group">
			   <label for="inputdesingation">Customer Address</label>
			  <input class="form-control"  type="text" name="inputAddress" value="<?php echo $getData['cus_address']?>"/>
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
			    <button class="form-control button_access"  name="updateCustomer" type="submit" class="btn"><span class="glyphicon glyphicon-plus-sign">Update</button>
				
		  </form>
		   
		   
		   </div>
		   
		   </div>
		   
        </div>		
	
<?php include 'inc/footer.php';?>