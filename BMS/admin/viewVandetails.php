<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Catagory.php'; ?>


<div class="content">
        <div class="header">
		
		<div class="titleleft">
		   <ul class="breadcrumb">
            <li><a href="index.html"><span class="glyphicon glyphicon-home"></span>Home</a> </li>
            <li class="active">View Van Details</li>
        </ul>
		</div>
		   
		
		<div class="titleright">
		 <h1 class="page-title">VanDetails Information</h1>
		
		</div>
     </div>
	 
	 
 <div class="main-content">
            
           <div class="row">
		   
		   <div class="form-group">
		      <div class="addsearch_left">
			     <a  class="form-control" href="addVandetails.php"><span class="glyphicon glyphicon-plus-sign"></span>VanDetails</a>
			  </div>
			  
			  
		    </div>
			 
		   
            <div class="col-xs-11">
	        		 <div class="table-responsive">
	        		 	<?php 
                if (isset($_GET['delid'])) {
                	$delid=$_GET['delid'];
                	$delquery="delete from vandetails where van_id ='$delid'";
                	$deldmsg=$db->delete($delquery);
                }
                 ?>
		 <table style="margin-left:40px;" class="table table-striped table-bordered table-hover">
		     <thead>
			     <tr class="active">
				   <th style="text-align:center;background-color:#583535;color:white;">Licence</th>
					<th style="text-align:center;background-color:#583535;color:white;">Van Description</th>
					<th style="text-align:center;background-color:#583535;color:white;">Buying Place</th>
					<th style="text-align:center;background-color:#583535;color:white;">Total price</th>
					<th style="text-align:center;background-color:#583535;color:white;">Date</th>
				    <th style="width:150px;text-align:center;background-color:#583535;color:white;">Action</th>
				  </tr>
				  <tbody>
				  <?php 
					$query="select * from vandetails";
					$msg=$db->select($query);
					if ($msg) {
						$i=0;
						while ($result=$msg->fetch_assoc()) {
							$i++;
						
					 ?>
					 
					
				    <tr class="primary">
				    <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['van_lisence']) ;?></td>
					 <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['van_description']); ?></td>
					  <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['van_buying']) ;?></td>
					   <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['van_price']); ?></td>
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($fm->formatDate($result['van_date'])); ?></td>
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;height:40px;margin-top:10px;">
					
					<a onclick=" return confirm('Are you sue to delete msg from the seened box!');" style="padding:7px;background-color:red;border-radius:5px;text-decoration:none;color:white;height:40px;margin:5px;" href="viewVandetails.php?delid=<?php echo($result['van_id']); ?>"><span class="glyphicon glyphicon-trash"></span></a>
					
					
					
				
				
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