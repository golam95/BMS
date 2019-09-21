<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include_once'../classes/User.php'; ?>

<style>
.form-group{width:400px;margin-left:60px;}
.button_access{margin-left:270px;}
.allignmentcenter{margin-left:340px;}
</style>

<div class="content">
        <div class="header">
		 <div class="titleleft">
		   <ul class="breadcrumb">
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a> </li>
            <li><a href="viewUserDetails.php"><span class="glyphicon glyphicon-arrow-left"></span> View User</a> </li>
			<li class="active">User</li>
        </ul>
		</div>
		<div class="titleright">
		 <h1 class="page-title">Add User Information</h1>
		</div>
     </div>



<?php
$ur=new User(); 
if ($_SERVER['REQUEST_METHOD']=='POST'&&isset($_POST['submit'])) {
    $userReg=$ur->admin_userRegistation($_POST,$_FILES);
}
?>
			  
			  
			  
 <div class="main-content">
            
           <div class="row">
		   
		
	  
		   
		   		   
		   
		   
		   
		   
		   
		   
		   <div class="col-xs-12">
		       
	<form action="" method="post" enctype="multipart/form-data">
	
	<div class="col-xs-12">
				   
				         <div class="form-group allignmentcenter">
							   <?php 
								if (isset($userReg)) {
									echo($userReg);
								}
							 ?> 
	               </div>
				   
				   
				    <div class="form-group allignmentcenter">
			  <label for="inputUserName">Name</label>
			  <input class="form-control" type="text" name="inputUserName"/>
			 </div>
				   
				   </div>
		   
	
	
	
	
	 
	 <div class="col-md-6">
	 
	
	
			 
			 <div class="form-group">
			  <label for="inputUserName">Address</label>
			  <input class="form-control" type="text" name="inputAddress"/>
			 </div>
			 <div class="form-group">
			  <label for="inputUserName">City</label>
			  <input class="form-control" type="text" name="inputCity"/>
			 </div>
			 <div class="form-group">
			  <label for="inputUserName">Country</label>
			  <input class="form-control" type="text" name="inputCountry"/>
			 </div>
			<div class="form-group">
			  <label for="inputUserName">ZipCode</label>
			  <input class="form-control" type="text" name="inputZipcode"/>
			 </div>
		
	 </div>
	 
	 <div class="col-md-6">
	         
	    <div class="form-group">
			  <label for="inputUserName">Contact No</label>
			  <input class="form-control" type="text" name="inputContactno"/>
			 </div>
	        
	     <div class="form-group">
			  <label for="inputUserName">Email</label>
			  <input class="form-control" type="text" name="inputEmail"/>
			 </div>
			  <div class="form-group">
			   <label for="inputdesingation">Password</label>
			  <input class="form-control"  type="text" name="inputPasword"/>
			 </div>
			 
			  <div class="form-group">
				  <label for="gender">Select Type</label>
				  <select class="form-control" name="selecttype">
				    <option></option>
					<option>Admin</option>
					<option>Employee</option>
				</select>
				</div>
			 
			 
	 
	         </div>
		 
		
		
			<div class="form-group">
                  <label for="gender"></label>
			      <button class="form-control button_access"  type="submit" name="submit" class="btn"><span class="glyphicon glyphicon-plus-sign">Add</button>
				
		  </form>
		  
		   </div>
		   
		   </div>
		   
        </div>		
		   
           

		










<?php include 'inc/footer.php';?>