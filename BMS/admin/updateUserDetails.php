<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>


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
		$id = $_GET['updateid'];
		$db = new database();
		$query = "SELECT * FROM users WHERE userId =$id";
		$getData = $db->select($query)->fetch_assoc();
		$date = date('Y-m-d');

if ($_SERVER['REQUEST_METHOD']=='POST'&&isset($_POST['Updateuserinfo'])) {
		
		$name=mysqli_real_escape_string($db->link,$_POST['inputUserName']);
		$address=mysqli_real_escape_string($db->link,$_POST['inputAddress']);
		$city=mysqli_real_escape_string($db->link,$_POST['inputCity']);
		$country=mysqli_real_escape_string($db->link,$_POST['inputCountry']);
		$zip=mysqli_real_escape_string($db->link,$_POST['inputZipcode']);
		$phone=mysqli_real_escape_string($db->link,$_POST['inputContactno']);
		$email=mysqli_real_escape_string($db->link,$_POST['inputEmail']);
		$password=mysqli_real_escape_string($db->link,md5($_POST['inputPasword']));
		$selectType=mysqli_real_escape_string($db->link,$_POST['selecttype']);
		
		$role=0;
		if($selectType == "Admin"){
				$role=3;
			}else{
				$role=2;
			}
         if ($name==""||$address==""||$city==""||$country==""||$zip==""||$phone==""||$email==""||$password=="") {
			
			$error="Field must not be Empty!!!";
			
			
		}else{
			
				$query = "UPDATE users
				SET
				name = '$name',
				address = '$address',
				city = '$city',
				country = '$country',
				zip ='$zip',
				phone ='$phone',
				email ='$email',
				password ='$password',
				typeofuser ='$selectType'
				WHERE userId = $id";
				$update = $db->update($query);
				  if ($update) {  
				   $msg="Update the User Information!!" ;  
				  }else {   
				  $error="Opps,Sorry Not Update User Information!!" ;  
				 } 
		}

	 } 
 ?>
			  
		  
 <div class="main-content">
            
           <div class="row">
		   

		   <div class="col-xs-12">
		       
	<form action="" method="post">
	
	   <div class="form-group allignmentcenter">
	       <?php 
				if (isset($error)) {
					
					echo("<span style='color: red;margin-left:90px;font-weight:bold;'>$error</span>");
				}
				if (isset($msg)) {
					
					echo("<span style='color: green;margin-left:50px;font-weight:bold;'>$msg</span>");
				}
			  ?>
	   </div>
	
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
			  <input class="form-control" type="text" name="inputUserName" value="<?php echo $getData['name']?>"/>
			 </div>
				   
				   </div>
		   
 
	 <div class="col-md-6">
	 
	      <div class="form-group">
			  <label for="inputUserName">Address</label>
			  <input class="form-control" type="text" name="inputAddress" value="<?php echo $getData['address']?>"/>
			 </div>
			 <div class="form-group">
			  <label for="inputUserName">City</label>
			  <input class="form-control" type="text" name="inputCity" value="<?php echo $getData['city']?>"/>
			 </div>
			 <div class="form-group">
			  <label for="inputUserName">Country</label>
			  <input class="form-control" type="text" name="inputCountry" value="<?php echo $getData['country']?>"/>
			 </div>
			<div class="form-group">
			  <label for="inputUserName">ZipCode</label>
			  <input class="form-control" type="text" name="inputZipcode" value="<?php echo $getData['zip']?>"/>
			 </div>
		
	 </div>
	 
	 <div class="col-md-6">
	         
	    <div class="form-group">
			  <label for="inputUserName">Contact No</label>
			  <input class="form-control" type="text" name="inputContactno" value="<?php echo $getData['phone']?>"/>
			 </div>
	        
	     <div class="form-group">
			  <label for="inputUserName">Email</label>
			  <input class="form-control" type="text" name="inputEmail" value="<?php echo $getData['email']?>"/>
			 </div>
			  <div class="form-group">
			   <label for="inputdesingation">Password</label>
			  <input class="form-control"  type="text" name="inputPasword" value="<?php echo $getData['password']?>"/>
			 </div>
			 
			  <div class="form-group">
				  <label for="gender">Select Type</label>
				  <select class="form-control" name="selecttype" value="<?php echo $getData['typeofuser']?>">
				    <option></option>
					<option>Admin</option>
					<option>Employee</option>
				</select>
				</div>
			 </div>
		 
		<div class="form-group">
                  <label for="gender"></label>
			      <button class="form-control button_access"  type="submit" name="Updateuserinfo" class="btn"><span class="glyphicon glyphicon-plus-sign">Update</button>
		</form>
		  
		   </div>
		   
		   </div>
		   
        </div>	

<?php include 'inc/footer.php';?>