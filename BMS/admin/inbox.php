<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Catagory.php'; ?>
<div class="content">
        <div class="header">
		
		<div class="titleleft">
		   <ul class="breadcrumb">
            <li><a href="index.html"><span class="glyphicon glyphicon-home"></span> Home</a> </li>
            <li class="active">Order</li>
        </ul>
		</div>
		   
		
		<div class="titleright">
		 <h1 class="page-title">Customer Order Information</h1>
		
		</div>
     </div>
	 
	 
 <div class="main-content">
            
           <div class="row">
		   
		   
            <div class="col-xs-11">
	        		 <div class="table-responsive">
	        		 	<?php 
                if (isset($_GET['delid'])) {
                	$delid=$_GET['delid'];
                	$delquery="delete from contact where contactid='$delid'";
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
					<th style="text-align:center;background-color:#583535;color:white;">Telephone</th>
					<th style="text-align:center;background-color:#583535;color:white;">Message</th>
					<th style="text-align:center;background-color:#583535;color:white;">Date</th>
				    <th style="width:150px;text-align:center;background-color:#583535;color:white;">Action</th>
				  </tr>
				  <tbody>
				  <?php 
					$query="select * from contact";
					$msg=$db->select($query);
					if ($msg) {
						$i=0;
						while ($result=$msg->fetch_assoc()) {
							$i++;
						
					 ?>
				  
				    <tr class="primary">
				    <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['name']) ;?></td>
					 <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['email']); ?></td>
					  <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['mobileNo']) ;?></td>
					   <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['body']); ?></td>
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($fm->formatDate($result['date'])); ?></td>
					
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;height:40px;margin-top:10px;">
					
					 <a onclick=" return confirm('Are you sue to delete msg from the seened box!');" style="padding:7px;background-color:green;border-radius:5px;text-decoration:none;color:white;height:40px;margin:5px;" href="?delid=<?php echo($result['contactid']); ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
					 <a style="padding:7px;background-color:green;border-radius:5px;text-decoration:none;color:white;height:40px;margin:5px;" href="replaymsg.php?rmsgid=<?php echo($result['contactid']); ?>"><span class="glyphicon glyphicon-send"></span></a>
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