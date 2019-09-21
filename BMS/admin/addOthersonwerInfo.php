<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Catagory.php'; ?>


<?php 
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		
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
		$query = "SELECT ow_email FROM bakeryowner WHERE ow_email = '$others_Email'";
		$check_Email = $db->select($query);
		
		if($check_Email){
			 $error="The Email Is Already Exist!!!" ; 
		}else{
		    $query = "INSERT INTO bakeryowner(ow_name,ow_email ,ow_contactno,ow_location,ow_link,ow_sex,ow_date)   
           VALUES('$others_Name','$others_Email','$others_contactNo','$others_bakerylocation','$others_weblink','$others_Gender','$date')";
           
		   $inserted_rows = $db->insert($query);    
          if ($inserted_rows) {  
           $msg="Add a New Position!!" ;  
          }else {   
          $error="Not Add a New Position!!" ;  
          }
			
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
			  <input class="form-control" type="text" name="inputname"/>
		 </div>
		 
		 <div class="form-group">
			   <label for="inputdesingation">Email</label>
			  <input class="form-control"  type="text" name="inputEmail"/>
			 </div>
			
			 <div class="form-group">
			   <label for="inputdesingation">Contact No</label>
			  <input class="form-control"  type="text" name="inputContactNo"/>
			 </div>
			 
			  <div class="form-group">
			   <label for="inputdesingation">Bakery Location</label>
			  <input class="form-control"  type="text" name="inputbakerylocation"/>
			 </div>
			
			  <div class="form-group">
			   <label for="inputdesingation">Web Link</label>
			  <input class="form-control"  type="text" name="inputweblink"/>
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

			    <button class="form-control"  type="submit" class="btn"><span class="glyphicon glyphicon-plus-sign">Add</button>
				
		  </form>
		  </div>
		   
		   </div>
		   
        </div>		
		
<?php include 'inc/footer.php';?>