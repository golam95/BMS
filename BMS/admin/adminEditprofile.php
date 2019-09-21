<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Catagory.php'; ?>

<?php 
$id = $_GET['rmsgid'];
$db = new database();
$query = "SELECT * FROM users WHERE userId=$id";
$getData = $db->select($query)->fetch_assoc();


if ($_SERVER['REQUEST_METHOD']=='POST'&&isset($_POST['updateadmininfo'])) {
	
	    $admin_Name=$fm->validation($_POST['inputName']);
		$admin_Address=$fm->validation($_POST['inputAddress']);
		$admin_City=$fm->validation($_POST['inputCity']);
		$admin_Password=$fm->validation ($_POST['inputPassword']);
		
		$admin_Name=mysqli_real_escape_string($db->link,$admin_Name);
		$admin_Address=mysqli_real_escape_string($db->link,$admin_Address);
		$admin_City=mysqli_real_escape_string($db->link,$admin_City);
		$admin_Password=mysqli_real_escape_string($db->link,$admin_Password);
		$error="";
			if (empty($admin_Name)||empty($admin_Address)||empty($admin_City)) {
				$error="Field must not be Empty!!!";
			 }elseif (!filter_var($admin_Name,FILTER_SANITIZE_SPECIAL_CHARS)) {
				$error="Invalid Name!";
			 
			}else{
		        
				$query = "UPDATE users
				SET
				name = '$admin_Name',
				address = '$admin_Address',
				country = '$admin_City',
				password = '$admin_Password'
				WHERE userId = $id";
				$update = $db->update($query);
				 if ($update) {  
				   $msg="Update the Admin Profile!!" ;  
				  }else {   
				  $error="Opps,Sorry Not Update Admin Profile!!" ;  
				 }  
	        }
	     }

?>

<div class="content">
        <div class="header">
		<div class="titleleft">
		   <ul class="breadcrumb">
            <li><a href="index.html"><span class="glyphicon glyphicon-home"></span>Home</a> </li>
            <li class="active">Edit Profile</li>
        </ul>
		</div>
		<div class="titleright">
		 <h1 class="page-title">Edit Admin Profile</h1>
		
		</div>
     </div>
	 
	 
 <div class="main-content">
            
           <div class="row">
		   
		   <div class="col-xs-8">
		       
			   <form action="" method="post">
			   
			   <div class="form-group">
	       <?php 
				if (isset($error)) {
					
					echo("<span style='color: red;margin-left:90px;font-weight:bold;'>$error</span>");
				}
				if (isset($msg)) {
					
					echo("<span style='color: green;margin-left:50px;font-weight:bold;'>$msg</span>");
				}
			  ?>
	   </div>
		 
		 <div class="form-group">
			  <label for="inputUserName">Name</label>
			  <input class="form-control" type="text" name="inputName" value="<?php echo($getData['name']);?>"/>
			 </div>
	       
		   <div class="form-group">
			  <label for="inputUserName">Address</label>
			  <input class="form-control" type="text" name="inputAddress" value="<?php echo($getData['address']);?>"/>
			 </div>
			 
			  <div class="form-group">
			  <label for="inputUserName">City</label>
			  <input class="form-control" type="text" name="inputCity" value="<?php echo($getData['city']);?>"/>
			 </div>
			  <div class="form-group">
			  <label for="inputUserName">password</label>
			  <input disabled class="form-control" type="password" name="inputPassword" value="<?php echo($getData['password']);?>"/>
			 </div>
			<br/>
			<div class="form-group">
                <button class="form-control"  type="submit" name="updateadmininfo" class="btn"><span class="glyphicon glyphicon-plus-sign">Update</button>
				
		  </form>
		   </div>
		    </div>
		 </div>		
		  
<?php include 'inc/footer.php';?>