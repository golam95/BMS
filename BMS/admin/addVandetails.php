<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Catagory.php'; ?>


<?php 
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		
		$van_Licence=$fm->validation($_POST['inputLisence']);
		$van_description=$fm->validation($_POST['inputvandescription']);
		$van_buyingfrom=$fm->validation($_POST['inputBuingForm']);
		$van_vanprice=$fm->validation($_POST['inputVanprice']);
		
		$van_Licence=mysqli_real_escape_string($db->link,$van_Licence);
		$van_description=mysqli_real_escape_string($db->link,$van_description);
		$van_buyingfrom=mysqli_real_escape_string($db->link,$van_buyingfrom);
		$van_vanprice=mysqli_real_escape_string($db->link,$van_vanprice);
		$date = date('Y-m-d');
        $error="";
	if (empty($van_Licence)||empty($van_description)||empty($van_buyingfrom)||empty($van_vanprice)) {
	    $error="Field must not be Empty!!!";
	 }elseif (!filter_var($van_Licence,FILTER_SANITIZE_SPECIAL_CHARS)) {
	 	$error="Invalid Name!";
	 
    }else{
		$query = "INSERT INTO vandetails(van_lisence,van_description ,van_buying,van_price,van_date)   
           VALUES('$van_Licence','$van_description','$van_buyingfrom','$van_vanprice','$date')";
           $inserted_rows = $db->insert($query);    
          if ($inserted_rows) {  
           $msg="Add a New Position!!" ;  
          }else {   
          $error="Not Add a New Position!!" ;  
          }
		}
	 } 
 ?>
<div class="content">
        <div class="header">
		<div class="titleleft">
		   <ul class="breadcrumb">
            <li><a href="index.html"><span class="glyphicon glyphicon-home"></span>Home</a> </li>
            <li><a href="viewVandetails.php"><span class="glyphicon glyphicon-arrow-left"></span> Vandetails</a> </li>
			<li class="active">Add Vandetails</li>
        </ul>
		</div>
		   
		<div class="titleright">
		 <h1 class="page-title">Add Van Details</h1>
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
			  <label for="inputUserName">Van License</label>
			  <input class="form-control" type="text" name="inputLisence"/>
			 </div>
			 
			
			  <div class="form-group">
			   <label for="inputdesingation">Van Description</label>
			  <input class="form-control"  type="text" name="inputvandescription"/>
			 </div>
			
			  <div class="form-group">
			   <label for="inputdesingation">Buying From</label>
			  <input class="form-control"  type="text" name="inputBuingForm"/>
			 </div>
			 
			 <div class="form-group">
			   <label for="inputdesingation">Van Taltal Price</label>
			  <input class="form-control"  type="text" name="inputVanprice"/>
			 </div>
			 <br/>
			<div class="form-group">
                <button class="form-control"  type="submit" class="btn"><span class="glyphicon glyphicon-plus-sign">Add</button>
				
		  </form>
		   
		   
		   </div>
		   
		   </div>
		   
        </div>		
		  
<?php include 'inc/footer.php';?>