<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Catagory.php'; ?>



<?php 
$id = $_GET['updateinfo'];
$db = new database();
$query = "SELECT * FROM bakeryowner WHERE ow_id =$id";
$getData = $db->select($query)->fetch_assoc();
$date = date('Y-m-d');

if ($_SERVER['REQUEST_METHOD']=='POST'&&isset($_POST['updateOtherbakery'])) {
	
	   $others_Name=$fm->validation($_POST['inputname']);
		$others_Email=$fm->validation($_POST['inputEmail']);
		$others_contactNo=$fm->validation($_POST['inputContactNo']);
		$others_bakerylocation=$fm->validation($_POST['inputbakerylocation']);
		$others_weblink=$fm->validation($_POST['inputweblink']);
		$others_Gender=$fm->validation($_POST['gender']);
		
		$others_Name=mysqli_real_escape_string($db->link,$others_Name);
		$others_Email=mysqli_real_escape_string($db->link,$others_Email);
		$others_contactNo=mysqli_real_escape_string($db->link,$others_contactNo);
		$others_bakerylocation=mysqli_real_escape_string($db->link,$others_bakerylocation);
		$others_weblink=mysqli_real_escape_string($db->link,$others_weblink);
		$others_Gender=mysqli_real_escape_string($db->link,$others_Gender);
		$date = date('Y-m-d');
		$error="";
			
			if (empty($others_Name)||empty($others_Email)||empty($others_contactNo)||empty($others_bakerylocation)||empty($others_weblink)) {
				$error="Field must not be Empty!!!";
			 }elseif (!filter_var($others_Name,FILTER_SANITIZE_SPECIAL_CHARS)) {
				$error="Invalid Name!";
			 }else if(strlen($others_contactNo) < 11){
				 $error="Sorry, Invalid COntact Number";
			}else if (!filter_var($others_Email, FILTER_VALIDATE_EMAIL)) {
				 $error = "Invalid email Format"; 
			}else if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$others_weblink)){
				 $error = "Invalid URL Format"; 
			}else{
		
				$query = "UPDATE bakeryowner
				SET
				ow_name = '$others_Name',
				ow_email = '$others_Email',
				ow_contactno = '$others_contactNo',
				ow_location = '$others_bakerylocation',
				ow_link ='$others_weblink',
				ow_sex = '$others_Gender',
				ow_date = '$date'
				WHERE ow_id = $id";
				$update = $db->update($query);
				 if ($update) {  
				   $msg="Update the Customer Information!!" ;  
				  }else {   
				  $error="Opps,Sorry Not Update Customer Information!!" ;  
				 }  
	   }
	 } 
 ?>

 
<div class="content">
        <div class="header">
		
		<div class="titleleft">
		   <ul class="breadcrumb">
            <li><a href="index.html"><span class="glyphicon glyphicon-home"></span>Home</a> </li>
            <li><a href="viewOthersonwerInfo.php"><span class="glyphicon glyphicon-arrow-left"></span> Back</a> </li>
			<li class="active">Add Details</li>
        </ul>
		</div>
		   
		
		<div class="titleright">
		 <h1 class="page-title">Add Others BakeryOwner Information</h1>
		
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
			  <label for="inputUserName">UserName</label>
			  <input class="form-control" type="text" name="inputname" value="<?php echo $getData['ow_name']?>"/>
		 </div>
		 
		 <div class="form-group">
			   <label for="inputdesingation">Email</label>
			  <input class="form-control"  type="text" name="inputEmail" value="<?php echo $getData['ow_email']?>"/>
			 </div>
			
			 <div class="form-group">
			   <label for="inputdesingation">Contact No</label>
			  <input class="form-control"  type="text" name="inputContactNo" value="<?php echo $getData['ow_contactno']?>"/>
			 </div>
			 <div class="form-group">
			   <label for="inputdesingation">Bakery Location</label>
			  <input class="form-control"  type="text" name="inputbakerylocation" value="<?php echo $getData['ow_location']?>"/>
			 </div>
			
			  <div class="form-group">
			   <label for="inputdesingation">Web Link</label>
			  <input class="form-control"  type="text" name="inputweblink" value="<?php echo $getData['ow_link']?>"/>
			 </div>
			 
			  <div class="form-group">
				  <label for="gender">Sex</label>
				  <select class="form-control" name="gender">
					<option>Male</option>
					<option>Female</option>
				</select>
				</div>
			  <br/>
			<div class="form-group">

			    <button class="form-control"  type="submit" name="updateOtherbakery" class="btn"><span class="glyphicon glyphicon-plus-sign">Update</button>
				
		  </form>
		  </div>
		   
		   </div>
		   
        </div>		
		
<?php include 'inc/footer.php';?>