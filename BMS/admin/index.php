<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
	
<?php	
		$sql = "SELECT * FROM employeeinfo";
		$query = $db->select($sql);
		$countEmployee = $query->num_rows;
		
		$sql = "SELECT * FROM customerinfo";
		$query = $db->select($sql);
		$countCustomer = $query->num_rows;
		
		$sql = "SELECT * FROM product";
		$query = $db->select($sql);
		$countProduct = $query->num_rows;
		
		$sql = "SELECT * FROM contact";
		$query = $db->select($sql);
		$countContact = $query->num_rows;
		
		$sql = "SELECT * FROM cus_order";
		$query = $db->select($sql);
		$countCustomerOrder = $query->num_rows;
		
		
?>


  
	
	

    <div class="content">
      
		   <a style="background:#4E2614;padding:10px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:60px;border:4px solid #DAB776;" href="inbox.php"><span class="glyphicon glyphicon glyphicon-bell" ></span>Customer Feedback<span class="badge"> <?php echo $countContact; ?></span></a>
		   <a style="background:#4E2614;padding:10px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:40px;border:4px solid #DAB776;" href="orderlist.php"><span class="glyphicon glyphicon glyphicon-bell" ></span>Customer Order<span class="badge"> <?php echo $countCustomerOrder;?></span></a>
		   <a style="background:#4E2614;padding:10px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:40px;border:4px solid #DAB776;" href="productlist.php"><span class="glyphicon glyphicon glyphicon-bell" ></span>Stock Notification<span class="badge">
		  
		  <?php 
		$lowStockSql = "SELECT * FROM product WHERE quantity <= 5";
	    $lowStockQuery = $db->select($lowStockSql);
		$lowstocknotification = $lowStockQuery->num_rows;
		
		if($lowstocknotification <=5){
			
			
			
			echo $lowstocknotification;
		
		}else{
			
			echo '0';
			
		}
		
		
		 ?>
		   </span></a>
		   <a style="background:#4E2614;padding:10px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:40px;border:4px solid #DAB776;" href="expiredatenotification.html"><span class="glyphicon glyphicon glyphicon-bell" ></span>Expiredate Notification<span class="badge"> 10</span></a>
        
          <div class="imageslider">
		    <img src="images/title.png" alt="Smiley face"/>
		  </div>  
		  
		  <div class="listofitem">
		  <div class="container">
		    <div class="row">
			   <div class="col-md-3">
						 <div class="customDiv">
						    <h2>Total Employee</h2>
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
							<h1><?php echo $countEmployee; ?></h1>
						   <h3><a href="viewEmp.php">View Details</a></h3>
						 </div>
		               </div>
					   <div class="col-md-3">
						 <div class="customDiv">
						    <h2>Total Customer</h2>
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
							<h1><?php echo $countCustomer; ?></h1>
						   <h3><a href="viewCustomerinformation.php">View Details</a></h3>
						 </div>
						</div>
					   <div class="col-md-3">
						 <div class="customDiv">
						    <h2>Total Products</h2>
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
							<h1><?php echo $countProduct; ?></h1>
						   <h3><a href="productlist.php">View Details</a></h3>
						 </div>
		               </div>
					   
		       </div>
		  </div>
		  
		  </div>	  

   

<?php include 'inc/footer.php';?>
