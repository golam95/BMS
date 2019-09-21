<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Catagory.php'; ?>


<?php 
		$id = $_GET['delid'];
		$db = new database();
		$query = "SELECT * FROM warehouse WHERE ware_id =$id";
		$getData = $db->select($query)->fetch_assoc();
		$date = date('Y-m-d');

if ($_SERVER['REQUEST_METHOD']=='POST'&&isset($_POST['updateWarehouse'])) {
		
		$warehouse_product=$fm->validation($_POST['inputProduct']);
		$warehouse_month=$fm->validation($_POST['month']);
		$warehouse_year=$fm->validation($_POST['inputYear']);
		$warehouse_cost=$fm->validation($_POST['inputcostamount']);
		
		$warehouse_product=mysqli_real_escape_string($db->link,$warehouse_product);
		$warehouse_month=mysqli_real_escape_string($db->link,$warehouse_month);
		$warehouse_year=mysqli_real_escape_string($db->link,$warehouse_year);
		$warehouse_cost=mysqli_real_escape_string($db->link,$warehouse_cost);
		$date = date('Y-m-d');
        $error="";
			
	if (empty($warehouse_product)||empty($warehouse_month)||empty($warehouse_year)||empty($warehouse_cost)) {
	    $error="Field must not be Empty!!!";
	 }elseif (!filter_var($warehouse_product,FILTER_SANITIZE_SPECIAL_CHARS)) {
	 	$error="Invalid Name!";
	}else{
	$query = "UPDATE warehouse
				SET
				ware_description = '$warehouse_product',
				ware_month = '$warehouse_month',
				ware_year = '$warehouse_year',
				ware_cost = '$warehouse_cost',
				ware_date ='$date'
				WHERE ware_id = $id";
				$update = $db->update($query);
				 if ($update) {  
				   $msg="Update the Customer Information!!" ;  
				  }else {   
				  $error="Opps,Sorry Not Update Customer Information!!" ;  
				 }  
	        }
	 } 
 ?>
 
<div class="content">
        <div class="header">
		
		<div class="titleleft">
		   <ul class="breadcrumb">
            <li><a href="index.html"><span class="glyphicon glyphicon-home"></span>Home</a> </li>
            <li><a href="viewWarehouse.php"><span class="glyphicon glyphicon-arrow-left"></span> Warehouse</a> </li>
			<li class="active">Add Warehouse</li>
        </ul>
		</div>
		   
		<div class="titleright">
		 <h1 class="page-title">Add Warehouse Details</h1>
		
		</div>
     </div>
	 
	 
 <div class="main-content">
            
           <div class="row">
		   
		   <div class="col-xs-8">
		       
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
		 
		 <div class="form-group">
			  <label for="inputUserName">Product Description</label>
			  <input class="form-control" type="text" name="inputProduct" value="<?php echo $getData['ware_description']?>"/>
			 </div>
			 
			 <div class="form-group">
				  <label for="employee">Select Month</label>
				  <select class="form-control" name="month">
					<option>January</option>
					<option>February</option>
					<option>March</option>
					<option>April</option>
					<option>May</option>
					<option>June</option>
					<option>July</option>
					<option>Aguest</option>
					<option>September</option>
					<option>October</option>
					<option>November</option>	
					<option>December</option>
				</select>
				</div>
			 
			  <div class="form-group">
			   <label for="inputdesingation">Enter Current Year</label>
			  <input class="form-control"  type="text" name="inputYear" value="<?php echo $getData['ware_year']?>"/>
			 </div>
			 
			  <div class="form-group">
			   <label for="inputdesingation">Total Cost Amount</label>
			  <input class="form-control"  type="text" name="inputcostamount" value="<?php echo $getData['ware_cost']?>"/>
			 </div>
			 <br/>
			<div class="form-group">
                <button class="form-control"  type="submit" name="updateWarehouse" class="btn"><span class="glyphicon glyphicon-plus-sign">Update</button>
				
		  </form>
		   
		   
		   </div>
		   
		   </div>
		   
        </div>		
		  
<?php include 'inc/footer.php';?>