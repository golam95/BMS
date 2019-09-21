<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>



<div class="content">
        <div class="header">
		
		<div class="titleleft">
		   <ul class="breadcrumb">
            <li><a href="index.html"><span class="glyphicon glyphicon-home"></span>Home</a> </li>
            <li class="active">View User</li>
        </ul>
		</div>
		   
		
		<div class="titleright">
		 <h1 class="page-title">View User Information</h1>
		
		</div>
     </div>
	 
	 
 <div class="main-content">
            
           <div class="row">
		   
		   <div class="form-group">
		      <div class="addsearch_left">
			     <a  class="form-control" href="addUserDetails.php"><span class="glyphicon glyphicon-plus-sign"></span> Add User</a>
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
                	$delquery="delete from users where userId='$delid'";
                	$deldmsg=$db->delete($delquery);
                }
                 ?>
		 <table style="margin-left:40px;" class="table table-striped table-bordered table-hover">
		     <thead>
			     <tr class="active">
				   <th style="text-align:center;background-color:#583535;color:white;">Name</th>
					<th style="text-align:center;background-color:#583535;color:white;">Address</th>
					<th style="text-align:center;background-color:#583535;color:white;">City</th>
					<th style="text-align:center;background-color:#583535;color:white;">Country</th>
					<th style="text-align:center;background-color:#583535;color:white;">zip</th>
					<th style="text-align:center;background-color:#583535;color:white;">Phone</th>
					<th style="text-align:center;background-color:#583535;color:white;">Email</th>
					<th style="text-align:center;background-color:#583535;color:white;">Type of user</th>
					<th style="text-align:center;background-color:#583535;color:white;">Role</th>
				    <th style="width:150px;text-align:center;background-color:#583535;color:white;">Action</th>
				  </tr>
				  <tbody>
				  <?php 
				    $query = "SELECT * FROM users";
					$msg=$db->select($query);
					if ($msg) {
						$i=0;
						while ($result=$msg->fetch_assoc()) {
							$i++;
						
					 ?>
					<tr class="primary">
				    <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['name']) ;?></td>
					 <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['address']); ?></td>
					  <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['city']) ;?></td>
					   <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['country']); ?></td>
					   <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['zip']); ?></td>
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo(($result['phone'])); ?></td>
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo(($result['email'])); ?></td>
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo(($result['typeofuser'])); ?></td>
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo(($result['role'])); ?></td>
					
					
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;height:40px;margin-top:10px;">
					
					<a style="padding:7px;background-color:green;border-radius:5px;text-decoration:none;color:white;height:40px;margin:5px;" href="updateUserDetails.php?updateid=<?php echo($result['userId']); ?>"><span class="glyphicon glyphicon-pencil"></span></a>
					
					 <a onclick=" return confirm('Do you want to delete!!!');" style="padding:7px;background-color:red;border-radius:5px;text-decoration:none;color:white;height:40px;margin:5px;" href="?delid=<?php echo($result['userId']); ?>"><span class="glyphicon glyphicon-trash"></span></a>
					
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