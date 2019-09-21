<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Catagory.php'; ?>


<div class="content">
        <div class="header">
		<div class="titleleft">
		   <ul class="breadcrumb">
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a> </li>
            <li class="active">View Rejine Employee</li>
        </ul>
		</div>
		  
		<div class="titleright">
		 <h1 class="page-title">Rigine Employee Information</h1>
		
		</div>
     </div>
	 
	 
 <div class="main-content">
            
           <div class="row">
		   
		   <div class="form-group">
		   <div class="addsearch_left">
			     <a  class="form-control" href="addEmp.html"><span class="glyphicon glyphicon-print"></span> Print Details</a>
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
                	$delquery="delete from rejineemp where re_id='$delid'";
                	$deldmsg=$db->delete($delquery);
                }
                 ?>
		 <table style="margin-left:40px;" class="table table-striped table-bordered table-hover">
		     <thead>
			     <tr class="active">
				   <th style="text-align:center;background-color:#583535;color:white;">Name</th>
					<th style="text-align:center;background-color:#583535;color:white;">Degination</th>
					 <th style="text-align:center;background-color:#583535;color:white;">NID</th>
					<th style="text-align:center;background-color:#583535;color:white;">Address</th>
					
					
					<th style="text-align:center;background-color:#583535;color:white;">contactNo</th>
					
				
					
					<th style="text-align:center;background-color:#583535;color:white;">Joining Date</th>
					
					<th style="text-align:center;background-color:#583535;color:white;">Rejine Date</th>
				    <th style="width:150px;text-align:center;background-color:#583535;color:white;">Action</th>
				  </tr>
				  <tbody>
				  <?php 
					$query="select * from rejineemp";
					$msg=$db->select($query);
					if ($msg) {
						$i=0;
						while ($result=$msg->fetch_assoc()) {
							$i++;
						
					 ?>
					 
				    <tr class="primary">
				    <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['re_name']) ;?></td>
					 <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['re_degination']); ?></td>
					  <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['re_nid']) ;?></td>
				
					   <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['re_address']) ;?></td>
					   
				
					   <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['re_contactno']); ?></td>
			
					   
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($fm->formatDate($result['re_dateofjoining'])); ?></td>
					
					
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($fm->formatDate($result['re_rejinedate'])); ?></td>
					
					
					
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;height:40px;margin-top:10px;">
					
					<a onclick=" return confirm('Are you sue to delete msg from the seened box!');" style="padding:7px;background-color:red;border-radius:5px;text-decoration:none;color:white;height:40px;margin:5px;" href="?delid=<?php echo($result['re_id']); ?>"><span class="glyphicon glyphicon-trash"></span></a>
		
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