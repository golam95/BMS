<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>



<div class="content">
        <div class="header">
		
		<div class="titleleft">
		   <ul class="breadcrumb">
            <li><a href="index.html"><span class="glyphicon glyphicon-home"></span>Home</a> </li>
            <li class="active">View Order</li>
        </ul>
		</div>
		   
		<div class="titleright">
		 <h1 class="page-title">View Order Information</h1>
		</div>
     </div>
	 
	 
 <div class="main-content">
            
           <div class="row">
		   
		   <div class="form-group">
		      <div class="addsearch_left">
			     <a  class="form-control" href="addOfflinecustomerorder.php"><span class="glyphicon glyphicon-plus-sign"></span> Add Order</a>
			  </div>
			  
			  <div class="addsearch_right">
			       <input  class="form-control" placeholder="Search..." type="search" id="inputUserName"/>
			  </div>
		    </div>
			 
		   
            <div class="col-xs-11">
	        		 <div class="table-responsive">
	        		 	<?php 
                if (isset($_GET['delid'])) {
                	$delid=$_GET['delid'];
                	$delquery="delete from order_offline where or_id='$delid'";
                	$deldmsg=$db->delete($delquery);
                }
                 ?>
		 <table style="margin-left:40px;" class="table table-striped table-bordered table-hover">
		     <thead>
			     <tr class="active">
				   <th style="text-align:center;background-color:#583535;color:white;">ShopKeeper Name</th>
					<th style="text-align:center;background-color:#583535;color:white;">Service provider Name</th>
					<th style="text-align:center;background-color:#583535;color:white;">Month</th>
					<th style="text-align:center;background-color:#583535;color:white;">Year</th>
					<th style="text-align:center;background-color:#583535;color:white;">Product Description</th>
					<th style="text-align:center;background-color:#583535;color:white;">price</th>
					<th style="text-align:center;background-color:#583535;color:white;">Due</th>
					<th style="text-align:center;background-color:#583535;color:white;">Paid</th>
					<th style="text-align:center;background-color:#583535;color:white;">Status</th>
					<th style="text-align:center;background-color:#583535;color:white;">Date</th>
					<th style="text-align:center;background-color:#583535;color:white;">Delivery Date</th>
				    <th style="width:150px;text-align:center;background-color:#583535;color:white;">Action</th>
				  </tr>
				  <tbody>
				  <?php 
				    $query = "SELECT * FROM order_offline";
					$msg=$db->select($query);
					if ($msg) {
						$i=0;
						while ($result=$msg->fetch_assoc()) {
							$i++;
						
					 ?>
					<tr class="primary">
				    <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['or_shopkeepername']) ;?></td>
					 <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['or_servicename']); ?></td>
					  <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['or_month']) ;?></td>
					   <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['or_year']); ?></td>
					   <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['or_prodes']); ?></td>
					
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo(($result['or_totalprice']));?></td>
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo(($result['or_dueprice'])); ?></td>
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo(($result['or_updateprice'])); ?></td>
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo(($result['or_status'])); ?></td>
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo(($result['or_date'])); ?></td>
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo(($result['or_deliverydate'])); ?></td>
					
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;height:40px;margin-top:10px;">
					
					<a style="padding:7px;background-color:green;border-radius:5px;text-decoration:none;color:white;height:40px;margin:5px;" href="updateOfflineorder.php?updateinfo=<?php echo($result['or_id']); ?>"><span class="glyphicon glyphicon-pencil"></span></a>
					
					 <a onclick=" return confirm('Do you want to delete this item!!!');" style="padding:7px;background-color:red;border-radius:5px;text-decoration:none;color:white;height:40px;margin:5px;" href="?delid=<?php echo($result['or_id']); ?>"><span class="glyphicon glyphicon-trash"></span></a>
					
				</td>
					 
				  </tr>
				  
				  
				  <?php }} ?>
				  
				  </tbody>
				</thead>
		 </table>
		 
         </div>
	</div>
   </div> 
   </div>

<?php include 'inc/footer.php';?>