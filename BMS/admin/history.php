<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Catagory.php'; ?>


<div class="content">
        <div class="header">
		
		<div class="titleleft">
		   <ul class="breadcrumb">
            <li><a href="index.html"><span class="glyphicon glyphicon-home"></span>Home</a> </li>
            <li class="active">History</li>
        </ul>
		</div>
		   
		
		<div class="titleright">
		 <h1 class="page-title">View All History</h1>
		</div>
     </div>
	 
	 
 <div class="main-content">
            
           <div class="row">
		   
		   <div class="form-group">
		       
			   <?php 

				 if (isset($_GET['delidall'])) {
                	$delid=$_GET['delidall'];
                	$delquery="delete from track_visitor";
					$deldmsg=$db->delete($delquery);
                }



				?>
		      <div class="addsearch_left">
			     <a  class="form-control" href="history.php?delidall"><span class="glyphicon glyphicon-plus-sign"></span> All Delete</a>
			  </div>
			  
			
		   
			  
		    </div>
			 
		   
            <div class="col-xs-11">
	        		 <div class="table-responsive">
	        		 	<?php 
                if (isset($_GET['delid'])) {
                	$delid=$_GET['delid'];
                	$delquery="delete from track_visitor where trackid ='$delid'";
                	$deldmsg=$db->delete($delquery);
                }
                 ?>
		 <table style="margin-left:40px;" class="table table-striped table-bordered table-hover">
		     <thead>
			     <tr class="active">
				   <th style="text-align:center;background-color:#583535;color:white;">User Name</th>
					<th style="text-align:center;background-color:#583535;color:white;">Page Details</th>
					<th style="text-align:center;background-color:#583535;color:white;">Date</th>
					<th style="width:150px;text-align:center;background-color:#583535;color:white;">Action</th>
				  </tr>
				  <tbody>
				  <?php 
					$query="select * from track_visitor";
					$msg=$db->select($query);
					if ($msg) {
						$i=0;
						while ($result=$msg->fetch_assoc()) {
							$i++;
					 ?>
					 
 
				    <tr class="primary">
				    <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['user_name']) ;?></td>
					 <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><a href="<?php echo($result['page']); ?>"><?php echo($result['page']); ?></a></td>
					  <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['date']) ;?></td>
				
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;height:40px;margin-top:10px;">
					
					<a onclick=" return confirm('Are you sue to delete msg from the seened box!');" style="padding:7px;background-color:red;border-radius:5px;text-decoration:none;color:white;height:40px;margin:5px;" href="history.php?delid=<?php echo($result['trackid']); ?>"><span class="glyphicon glyphicon-trash"></span></a>
					
				
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