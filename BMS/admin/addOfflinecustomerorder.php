<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Catagory.php'; ?>

<style>
.form-group{width:265px;margin-left:0px;}
.form-control{height:30px;}
.onekjamala{width:500px;margin-top:20px;height:35px;border-radius:5px;margin-left:280px;}
.upper_alignment{margin-left:40px;}
.second_alignment{margin-left:120px;margin-top:20px;}
.margintop_fixed{margin-top:40px;margin-bottom:20px;}
.titlefixed{margin-left:350px;width:500px;}
</style>




<?php 
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		
		$Order_CustomerName=$fm->validation($_POST['customerName']);
		$Order_ServiceName=$fm->validation($_POST['servieName']);
		$Order_monthName=$fm->validation($_POST['monthName']);
		$Order_year=$fm->validation($_POST['inpuYear']);
		$Order_description=$fm->validation($_POST['inputProductdes']);
	    $Order_Price=$fm->validation($_POST['productPrice']);
	    $Order_Status=$fm->validation($_POST['inputStatus']);
	    $or_deliverydate=$fm->validation($_POST['inputDelivery']);
		
		$Order_CustomerName=mysqli_real_escape_string($db->link,$Order_CustomerName);
		$Order_ServiceName=mysqli_real_escape_string($db->link,$Order_ServiceName);
		$Order_monthName=mysqli_real_escape_string($db->link,$Order_monthName);
		$Order_year=mysqli_real_escape_string($db->link,$Order_year);
		$Order_description=mysqli_real_escape_string($db->link,$Order_description);
	    $Order_Price=mysqli_real_escape_string($db->link,$Order_Price);
	    $Order_Status=mysqli_real_escape_string($db->link,$Order_Status);
        $or_deliverydate=mysqli_real_escape_string($db->link,$or_deliverydate);
		
	    $date = date('Y-m-d');
        $error="";
	   
	 if (empty($Order_year)||empty($Order_description)||empty($Order_Price)) {
	    $error="Field must not be Empty!!!";
	 
	}else{
		
		 $query = "INSERT INTO order_offline(or_shopkeepername,or_servicename ,or_month,or_year,or_prodes,or_dueprice,or_totalprice,or_status,or_date,or_deliverydate )   
           VALUES('$Order_CustomerName','$Order_ServiceName','$Order_monthName','$Order_year','$Order_description','$Order_Price','$Order_Price','$Order_Status','$date','$or_deliverydate')"; 
 
		  $inserted_rows = $db->insert($query);    
          if ($inserted_rows) {  
           $msg="Add a New Position!!" ;  
          }else {   
          $error="Not Add a New Position!!" ;  
          }
			
		}
	
	 } 
 ?>


<div class="content">

 <div class="header">
 
        <div class="titleright titlefixed">
		 <h1 class="page-title">Add Order Details Information</h1>
		</div>
		
		<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:20px;border:4px solid #DAB776;" href=""><span class="glyphicon glyphicon-home" ></span> Home</a>
		
		<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:20px;border:4px solid #DAB776;" href="viewOfflineorder.php"><span class="glyphicon glyphicon-home" ></span> View</a>
		
		<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:20px;border:4px solid #DAB776;" href=""><span class="glyphicon glyphicon-print" ></span> Print</a>
	</div>

 <div class="main-content">
            
           <div class="row">
		   
    <form action="" method="post">
	
	<div class="form-group titlefixed">
	       <?php 
				if (isset($error)) {
					
					echo("<span style='color: red;margin-left:90px;font-weight:bold;'>$error</span>");
				}
				if (isset($msg)) {
					
					echo("<span style='color: green;margin-left:50px;font-weight:bold;'>$msg</span>");
				}
			  ?>
	   </div>
	  
	  <div class="col-xs-12">
	        <div class="col-md-4">
				  <div class="form-group upper_alignment">
					  <label for="sel1">Select Shopkepper Name</label>
					  <select style="height:35px;" class="form-control" name="customerName">
					    <option></option>
						
					<?php 
				    $query = "SELECT * FROM customerInfo";
					$msg=$db->select($query);
					if ($msg) {
						while ($result=$msg->fetch_assoc()) {
							
						
					 ?>
						<option value="<?php echo($result['cus_name']) ?>"><?php echo($result['cus_name']) ?></option>
						 <?php }}else{
							 
							 echo 'Not Found!!!';
							 
						 } ?>
						
					 </select>
					  
					</div>
			</div>
			 
			<div class="col-md-4">
				  <div class="form-group upper_alignment">
					  <label for="sel1">Select ServiceProvider Name</label>
					  <select style="height:35px;" class="form-control" name="servieName">
					    <option></option>
						<?php 
                    $query="select emp_name from employeeinfo where emp_designation='External Employee'";
					$msg=$db->select($query);
					if ($msg) {
						while ($result=$msg->fetch_assoc()) {
							
						
					 ?>
						<option value="<?php echo($result['emp_name']) ?>"><?php echo($result['emp_name']) ?></option>
						 <?php }}else{
							 
							 echo 'Not Found!!!';
							 
						 } ?>
						</select>
					</div>
			 </div>
			<div class="col-md-4">
				 <div class="form-group upper_alignment">
					  <label for="sel1">Select Month</label>
					  <select style="height:35px;" class="form-control" name="monthName">
					    <option></option>
						<option>January</option>
						<option>February</option>
						<option>March</option>
						<option>April</option>
						<option>May</option>
						<option>June</option>
						<option>July</option>
						<option>Aguest</option>
					  </select>
					</div>
			 </div>
	  </div>
	 
	 
	 <div class="col-xs-12 margintop_fixed">
	    
		<div class="col-md-6">
		 <div class="form-group second_alignment">
			  <label for="inputUserName">Enter Year</label>
			</div>
	         <div class="form-group second_alignment">
			  <label for="inputUserName">Product Description</label>
			</div>
			<div class="form-group second_alignment">
			  <label for="inputUserName">Total Price</label>
			</div>
			<div class="form-group second_alignment">
			  <label for="inputUserName">Delivery Date</label>
			</div>
			
			<div class="form-group second_alignment">
			  <label for="inputUserName">Status</label>
			</div>
		</div>
	        
		<div class="col-md-6">
		<div class="form-group second_alignment">
			     <input class="form-control" type="text" name="inpuYear" placeholder="Follow the formate (2018)"/>
			 </div>
	         <div class="form-group second_alignment">
			     <input class="form-control" type="text" name="inputProductdes"/>
			 </div>
			 <div class="form-group second_alignment">
			     <input class="form-control" type="text" name="productPrice"/>
			 </div>
			 
			  <div class="form-group second_alignment">
			     <input class="form-control" type="text" name="inputDelivery" placeholder="Follow the formate(2018-03-18)"/>
			 </div>
			 
			 
			 
			   <div class="form-group second_alignment">
					 <select class="form-control" name="inputStatus">
					    <option></option>
						<option>Due</option>
						<option>Paid</option>
					 </select>
					</div>
		     </div>
		</div>
	  	 
	 <div class="col-xs-12">
	        <div class="col-md-12">
			<div class="form-group">
			    <button style="background-color:#4E2614;border:4px solid #DAB776;text-align:center;" class="onekjamala" type="submit"><span style="color:white;" class="glyphicon glyphicon-plus-sign"><span style="font-weight:bold;color:white;">Add</span></button>
			</div>
			</div>
		</div>

</form>
		   
		   </div>
		   
		</div>		

<?php include 'inc/footer.php';?>