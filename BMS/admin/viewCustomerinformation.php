<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Catagory.php'; ?>

<style>
.prinoption{margin-bottom:10px;margin-top:10px;}

</style>
<div class="content">
        <div class="header">
		
		<div class="titleleft">
		   <ul class="breadcrumb">
            <li><a href="index.html"><span class="glyphicon glyphicon-home"></span>Home</a> </li>
            <li class="active">View CustomerInformation</li>
        </ul>
		</div>
		   
		
		<div class="titleright">
		 <h1 class="page-title">Customer Information</h1>
		
		</div>
     </div>
	 
	 
 <div class="main-content">
            
           <div class="row">
		   
		   <div class="form-group">
		   
		      <div class="addsearch_left">
			     <a  class="form-control" href="addcustomerInformation.php"><span class="glyphicon glyphicon-plus-sign"></span> Add Customer</a>
				 
				 <div class="prinoption">
				 <a style="padding:5px;background-color:#286090;color:white;font-weight:bold;text-align:center;margin-top:5px;border-radius:5px;" href="#"><span class="glyphicon glyphicon-print"></span>Print Customer</a>
				 
				 </div>
				
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
                	$delquery="delete from customerinfo where cus_id='$delid'";
                	$deldmsg=$db->delete($delquery);
                	if ($deldmsg) {
                       echo("<span class='success'> message deleted successfully!</span>"); 
                    }else{
                       echo("<span class='success'> message not deleted !</span>"); 
                    }
                }
                 ?>
		 <table style="margin-left:40px;" class="table table-striped table-bordered table-hover">
		     <thead>
			 
			     <tr class="active">
				   <th style="text-align:center;background-color:#583535;color:white;">Name</th>
					<th style="text-align:center;background-color:#583535;color:white;">Email</th>
					<th style="text-align:center;background-color:#583535;color:white;">NID</th>
					<th style="text-align:center;background-color:#583535;color:white;">Contact No</th>
					<th style="text-align:center;background-color:#583535;color:white;">Shop Name</th>
					<th style="text-align:center;background-color:#583535;color:white;">Shop Location</th>
					<th style="text-align:center;background-color:#583535;color:white;">Date</th>
				    <th style="width:150px;text-align:center;background-color:#583535;color:white;">Action</th>
				  </tr>
				  
				  
				  <tbody>
				  <?php 
					$query="select * from customerinfo";
					$msg=$db->select($query);
					if ($msg) {
						$i=0;
						while ($result=$msg->fetch_assoc()) {
							$i++;
						
					 ?>
					 
					
				    <tr class="primary">
				    <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['cus_name']) ;?></td>
					 <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['cus_email']); ?></td>
					  <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['cus_nid']); ?></td>
					  <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['cus_contactno']) ;?></td>
					   <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['cus_shopname']); ?></td>
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['cus_shoplocation']); ?></td>
					
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($fm->formatDate($result['cus_date'])); ?></td>
					
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;height:40px;margin-top:10px;">
					
					 <a onclick=" return confirm('Are you sue to delete msg from the seened box!');" style="padding:7px;background-color:red;border-radius:5px;text-decoration:none;color:white;height:40px;margin:5px;" href="?delid=<?php echo($result['cus_id']); ?>"><span class="glyphicon glyphicon-trash"></span></a>
					
					<a style="padding:7px;background-color:green;border-radius:5px;text-decoration:none;color:white;height:40px;margin:5px;" href="updateCustomerinfo.php?updatecustomerinfo=<?php echo($result['cus_id']); ?>"><span class="glyphicon glyphicon-pencil"></span></a>
				
				
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