<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Catagory.php'; ?>


<?php 
$id = $_GET['updateinfo'];
$db = new database();
$query = "SELECT * FROM order_offline WHERE or_id =$id";
$getData = $db->select($query)->fetch_assoc();
$date = date('Y-m-d');

if ($_SERVER['REQUEST_METHOD']=='POST'&&isset($_POST['updateofflineorder'])) {
	
	    $Order_shopkeepter=$fm->validation($_POST['inputShopkeeper']);
		$Order_service=$fm->validation($_POST['inputService']);
        $Order_month=$fm->validation($_POST['month']);
	
	    $Order_Year=$fm->validation($_POST['inputYear']);
		$Order_description=$fm->validation($_POST['inputDescription']);
		$order_Totalprice=$fm->validation($_POST['inputTotalprice']);
		$Order_updateprice=$fm->validation($_POST['inputUpdateprice']);
		$Order_duePrice=$fm->validation($_POST['inputDueprice']);
		$Order_Status=$fm->validation($_POST['status']);
		$Order_Delivery=$fm->validation($_POST['inputDelivery']);
		
		$Order_shopkeepter=mysqli_real_escape_string($db->link,$Order_shopkeepter);
		$Order_service=mysqli_real_escape_string($db->link,$Order_service);
        $Order_month=mysqli_real_escape_string($db->link,$Order_month);
			 
		$Order_Year=mysqli_real_escape_string($db->link,$Order_Year);
		$Order_description=mysqli_real_escape_string($db->link,$Order_description);
		$order_Totalprice=mysqli_real_escape_string($db->link,$order_Totalprice);
		$Order_updateprice=mysqli_real_escape_string($db->link,$Order_updateprice);
		$Order_duePrice=mysqli_real_escape_string($db->link,$Order_duePrice);
		$Order_Status=mysqli_real_escape_string($db->link,$Order_Status);
		$Order_Delivery=mysqli_real_escape_string($db->link,$Order_Delivery);
		
		$date = date('Y-m-d');
        $error="";
		if (empty($Order_description)||empty($order_Totalprice)||empty($Order_shopkeepter)||empty($Order_service)||empty($Order_month)) {
				$error="Field must not be Empty!!!";
			}else{
		      $query = "UPDATE order_offline
				SET
				or_shopkeepername='$Order_shopkeepter',
				or_servicename='$Order_service',
				or_month='$Order_month',
				or_year = '$Order_Year',
				or_prodes = '$Order_description',
				or_updateprice = '$Order_updateprice',
				or_dueprice = '$Order_duePrice',
				or_totalprice ='$order_Totalprice',
				or_status  = '$Order_Status',
				or_date  = '$date',
				or_deliverydate  = '$Order_Delivery'
                WHERE or_id = $id";
			
			 
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
.form-group{width:265px;margin-left:0px;}
.form-control{height:30px;}
.onekjamala{width:500px;margin-top:20px;height:35px;border-radius:5px;margin-left:280px;}
.upper_alignment{margin-left:40px;}
.second_alignment{margin-left:120px;margin-top:20px;}
.margintop_fixed{margin-top:40px;margin-bottom:20px;}
.titlefixed{margin-left:350px;width:500px;}
</style>

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
	  
	  <div class="col-xs-12">
	  
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
	   
	        <div class="col-md-4">
				  <div class="form-group upper_alignment">
					  <label for="sel1">Select Shopkepper Name</label>
					  <select style="height:35px;" class="form-control" name="inputShopkeeper">
					    <option></option>
						<option>Golam</option>
						<option>Sager</option>
					  </select>
					</div>
			</div>
			 
			<div class="col-md-4">
				  <div class="form-group upper_alignment">
					  <label for="sel1">Select ServiceProvider Name</label>
					  <select style="height:35px;" class="form-control" name="inputService">
					    <option></option>
						<option>Sheikh</option>
						<option>Nafian</option>
					  </select>
					</div>
			 </div>
			 
			<div class="col-md-4">
				 <div class="form-group upper_alignment">
					  <label for="sel1">Select Month</label>
					  <select style="height:35px;" class="form-control" name="month">
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
			  <label for="inputUserName">Update Price</label>
			</div>
			
			<div class="form-group second_alignment">
			  <label for="inputUserName">Due Price</label>
			</div>
			<div class="form-group second_alignment">
			  <label for="inputUserName">Status</label>
			</div>
	         <div class="form-group second_alignment">
			  <label for="inputUserName">Delivery Date</label>
			</div>
			
		</div>
	
		<div class="col-md-6">
	         <div class="form-group second_alignment">
			     <input class="form-control" type="text" name="inputYear" value="<?php echo $getData['or_year']?>"/>
				</div>
			 <div class="form-group second_alignment">
			     <input class="form-control" type="text" name="inputDescription" value="<?php echo $getData['or_prodes']?>"/>
			 </div>
			  <div class="form-group second_alignment">
			     <input class="form-control" type="text" name="inputTotalprice" value="<?php echo $getData['or_totalprice']?>"/>
			 </div>
			  <div class="form-group second_alignment">
			     <input class="form-control" type="text" name="inputUpdateprice" value="<?php echo $getData['or_updateprice']?>"/>
			 </div>
			
			  <div class="form-group second_alignment">
			     <input class="form-control" type="text" name="inputDueprice" value="<?php echo $getData['or_dueprice']?>"/>
			 </div>
			   <div class="form-group second_alignment">
					 <select class="form-control" name="status">
					    <option></option>
						<option>Due</option>
						<option>Paid</option>
					 </select>
					</div>
			  <div class="form-group second_alignment">
			     <input class="form-control" type="text" name="inputDelivery" value="<?php echo $getData['or_deliverydate']?>"/>
			 </div>
		     </div>
		</div>
	  	 
	 <div class="col-xs-12">
	        <div class="col-md-12">
			<div class="form-group">
			    <button style="background-color:#4E2614;border:4px solid #DAB776;text-align:center;" class="onekjamala" name="updateofflineorder" type="submit"><span style="color:white;" class="glyphicon glyphicon-plus-sign"><span style="font-weight:bold;color:white;">Update</span></button>
			</div>
			</div>
		</div>

           </div>
		   
		</div>		

<?php include 'inc/footer.php';?>