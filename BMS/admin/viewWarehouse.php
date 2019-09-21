<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Catagory.php'; ?>


<div class="content">
        <div class="header">
		
		<div class="titleleft">
		   <ul class="breadcrumb">
            <li><a href="index.html"><span class="glyphicon glyphicon-home"></span>Home</a> </li>
            <li class="active">View Warehouse Details</li>
        </ul>
		</div>
		   
		
		<div class="titleright">
		 <h1 class="page-title">Warehouse Information</h1>
		
		</div>
     </div>
	 
	 
 <div class="main-content">
            
           <div class="row">
		   
		   <div class="form-group">
		      <div class="addsearch_left">
			     <a  class="form-control" href="addWarehouse.php"><span class="glyphicon glyphicon-plus-sign"></span> Warehouse</a>
			  </div>
			  
			  <div class="addsearch_right">
			       <input  class="form-control" placeholder="Search..." type="search" id="inputUserName"/>
			  </div>
		    </div>
			 
		   
            <div class="col-xs-11">
	        		 <div class="table-responsive">
	        		 	<?php 
                if (isset($_GET['rmsgid'])) {
                	$delid=$_GET['delid'];
                	$delquery="delete from warehouse where ware_id ='$delid'";
                	$deldmsg=$db->delete($delquery);
                	
                }
                 ?>
		 <table style="margin-left:40px;" class="table table-striped table-bordered table-hover">
		     <thead>
			     <tr class="active">
				   <th style="text-align:center;background-color:#583535;color:white;">Description</th>
					<th style="text-align:center;background-color:#583535;color:white;">Month</th>
					<th style="text-align:center;background-color:#583535;color:white;">Year</th>
					<th style="text-align:center;background-color:#583535;color:white;">Cost</th>
					<th style="text-align:center;background-color:#583535;color:white;">Date</th>
				    <th style="width:150px;text-align:center;background-color:#583535;color:white;">Action</th>
				  </tr>
				  <tbody>
				  <?php 
					$query="select * from warehouse";
					$msg=$db->select($query);
					if ($msg) {
						$i=0;
						while ($result=$msg->fetch_assoc()) {
							$i++;
						
					 ?>
					 
					
				    <tr class="primary">
				    <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['ware_description']) ;?></td>
					 <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['ware_month']); ?></td>
					  <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['ware_year']) ;?></td>
					   <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['ware_cost']); ?></td>
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($fm->formatDate($result['ware_date'])); ?></td>
					
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;height:40px;margin-top:10px;">
					
					 <a style="padding:7px;background-color:green;border-radius:5px;text-decoration:none;color:white;height:40px;margin:5px;" href="updateWarehouse.php?delid=<?php echo($result['ware_id']); ?>"><span class="glyphicon glyphicon-pencil"></span></a>
					
				

					<a onclick=" return confirm('Do you Want to delete!');" style="padding:7px;background-color:red;border-radius:5px;text-decoration:none;color:white;height:40px;margin:5px;" href="replaymsg.php?rmsgid=<?php echo($result['ware_id']); ?>"><span class="glyphicon glyphicon-trash"></span></a>
				
				
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