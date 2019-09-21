<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Catagory.php'; ?>




<style>
.form-group{width:265px;margin-left:0px;}
.button_access{margin-left:320px;height:100px;}
.middleflow{margin-left:380px;}
.middleflow1{margin-left:320px;width:500px;}
.form-control{height:25px;}
.form-another{margin-left:200px;}
.onekjamala{width:500px;margin-top:20px;height:35px;border-radius:5px;margin-left:280px;}



</style>

<?php
		if ($_SERVER['REQUEST_METHOD']=='POST') {
		
		
		
		$first_data1=$fm->validation($_POST['inputaaEmp']);
		$first_data2=$fm->validation($_POST['inputsallary']);
		$first_data3=$fm->validation($_POST['medicalvalue']);
		$first_data4=$fm->validation($_POST['transacitionvalue']);
		$first_data5=$fm->validation($_POST['absanceValue']);
		$first_data6=$fm->validation($_POST['taxValue']);
		$first_data7=$fm->validation($_POST['shelterValue']);
		$first_data8=$fm->validation($_POST['mealValue']);
		
		
		$first_data1=mysqli_real_escape_string($db->link,$first_data1);
		$first_data2=mysqli_real_escape_string($db->link,$first_data2);
		$first_data3=mysqli_real_escape_string($db->link,$first_data3);
		$first_data4=mysqli_real_escape_string($db->link,$first_data4);
		$first_data5=mysqli_real_escape_string($db->link,$first_data5);
		$first_data6=mysqli_real_escape_string($db->link,$first_data6);
		$first_data7=mysqli_real_escape_string($db->link,$first_data7);
		$first_data8=mysqli_real_escape_string($db->link,$first_data8);
		
		$date = date('Y-m-d');    
		 $error="";
		 
		 
	 if (empty($first_data1)||empty($first_data2)) {
	    $error="Field must not be empty";
	
	}else{
		$query = "SELECT sall_emptype FROM addempsallary WHERE sall_emptype = '$first_data1'";
		$check_NID = $db->select($query);
		if($check_NID){
			 $error="Sorry, The Position is Already Exist!!!" ; 
		}else{
			 
		  $query = "INSERT INTO addempsallary(sall_emptype,emp_sallary,medical_value,transaction_value,absant_value,tax_value,shelter_value,meal_value,sall_date)   
           VALUES('$first_data1','$first_data2','$first_data3','$first_data4','$first_data5','$first_data6','$first_data7','$first_data8','$date')"; 
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
		
		<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:220px;border:4px solid #DAB776;" href=""><span class="glyphicon glyphicon glyphicon-home" ></span> Home</a>
		
		<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:60px;border:4px solid #DAB776;" href=""><span class="glyphicon glyphicon glyphicon-pencil" ></span> Update</a>
		
		<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:60px;border:4px solid #DAB776;" href=""><span class="glyphicon glyphicon glyphicon-trash" ></span> Delete</a>
		   
	   <a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:60px;border:4px solid #DAB776;" href=""><span class="glyphicon glyphicon glyphicon-remove" ></span> Exit</a>
	
	</div>
	 
	 
 <div class="main-content">
            
           <div class="row">
		   
		  
		       
	 <form action="" method="post">
	 
	 
	 <div class="col-xs-12">
	 
	        <div class="form-group middleflow1">
	       <?php 
				if (isset($error)) {
					
					echo("<span style='color: red;margin-left:90px;font-weight:bold;'>$error</span>");
				}
				if (isset($msg)) {
					
					echo("<span style='color: green;margin-left:50px;font-weight:bold;'>$msg</span>");
				}
			  ?>
	   </div>
	 
	        <div class="col-md-6">
			
			
		
			 
			  <div class="form-group form-another">
				  <label for="sel1">Select Type</label>
				  <select class="form-control" name="inputSelecttype">
				    <option></option>
					<option>Internal</option>
					<option>External</option>
					</select>
			 </div>
			 
			 
			 
			 
			 

			
			</div>
			<div class="col-md-6">
			 <div class="form-group">
			  <label for="inputUserName">Add New Employee</label>
			  <input class="form-control" type="text" name="inputaaEmp"/>
			 </div>
			
			</div>
			
	 
	 
	 </div>
	 
	   <div class="col-xs-12">
	        <div class="col-md-12">
			 <div class="form-group">
			  <label class="middleflow" for="inputUserName">Sallary</label>
			  <input class="form-control middleflow" type="text" name="inputsallary"/>
			</div>
			</div>
		</div>
	 
	
	 
	 <div class="col-xs-12">
	
	  <div class="col-md-3">
	       <div class="form-group">
			  <label for="inputUserName">Check for %</label>
			</div>
			<div class="form-group">
			  <label style="font-size:12px;" class="reduceFont" for="inputUserName">UserName</label>
		     </div>
			 <div class="form-group">
			  <label style="font-size:12px;" for="inputUserName">UserName</label>
			 </div>
		</div>
		
	  
	  <div class="col-md-3">
	   <div class="form-group">
			  
			 <div class="checkbox">
 <label for="inputUserName">Allowance</label>
</div>
			 
			 
			 </div>
			  <div class="form-group">
			  
	  
  <label style="font-size:12px;">
    <input disabled class="form-control" type="text" name="inputUserName" value="Medical"/>
  </label>

			 </div>
			  
	
			  
			 <div class="form-group">
			  
			  			 
  <label style="font-size:12px;">
    <input disabled class="form-control" type="text" name="inputUserName" value="Transaction"/>
  
  </label>

			 </div>
			 
	 </div>
	 
	 <div class="col-md-3">
	   <div class="form-group">
			  <label for="inputUserName">Allowance Value</label>
			 </div>
			  <div class="form-group">
		
			  <input class="form-control" type="text" name="medicalvalue"/>
			 </div>
			  <div class="form-group">
			  
			  <input class="form-control" type="text" name="transacitionvalue"/>
			 </div>

			 
	 </div>
	 
	 <div class="col-md-3">
	   <div class="form-group">
			  <label for="inputUserName">Information</label>
			  
			 </div>
			  <div class="form-group">
			 
			  <input style="font-size:12px;" disabled class="form-control" type="text" name="inputUserName" value="Enter in % Basic"/>
			 </div>
			  <div class="form-group">
			 
			  <input  style="font-size:12px;" disabled class="form-control" type="text" name="inputUserName" value="Enter in % Basic"/>
			 </div>
			 
			 
	 </div>
	 
	 </div>
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 <div class="col-xs-12">
	
	<div class="col-md-3">
	   <div class="form-group">
			  <label for="inputUserName">Check for %</label>
			  
			 </div>
			  <div class="form-group">
			  <label style="font-size:12px;" for="inputUserName">Absance Deduction</label>
			  
			 </div>
			 
			  <div class="form-group">
			  <label style="font-size:12px;" for="inputUserName">Tax Deduction</label>
			  
			 </div>
			 <div class="form-group">
			  <label style="font-size:12px;" for="inputUserName">Shelter Deduction</label>
			  
			 </div>
			
			 <div class="form-group">
			  <label style="font-size:12px;" for="inputUserName">Meal Deduction</label>
			 </div>
	  
	  
	  </div>
	  
	  <div class="col-md-3">
	   <div class="form-group">
			  
			 <div class="checkbox">
 <label for="inputUserName">Allowance</label>
</div>
			 
			 
			 </div>
			  <div class="form-group">
			  
			  			
  <label style="font-size:12px;">
    <input   disabled class="form-control" type="text" name="inputUserName" value="Absance"/>
  
  
  </label>

			 </div>
	
			 <div class="form-group">
			  
			  			
  <label style="font-size:12px;">
    <input   disabled class="form-control" type="text" name="inputUserName" value="Tax"/>
  
  </label>

			 </div>
			 			 <div class="form-group">
			  
			  			 
  <label style="font-size:12px;">
   <input   disabled class="form-control" type="text" name="inputUserName" value="Shelter"/>
  
  </label>

			 </div>
			 			 <div class="form-group">
			  
	
			 </div>
			 			 <div class="form-group">
			  
			  			
  <label>
    <input   disabled class="form-control" type="text" name="inputUserName" value="Meal"/>
  
  </label>

			 </div>
			 
	 </div>
	 
	 <div class="col-md-3">
	   <div class="form-group">
			  <label for="inputUserName">Allowance Value</label>
			 </div>
			  <div class="form-group">
		       <input class="form-control" type="text" name="absanceValue"/>
			 </div>
			  <div class="form-group">
			   <input class="form-control" type="text" name="taxValue"/>
			 </div>
			 <div class="form-group">
			   <input class="form-control" type="text" name="shelterValue"/>
			 </div>
			
			 <div class="form-group">
			   <input class="form-control" type="text" name="mealValue"/>
			 </div>

	</div>
	 
	 <div class="col-md-3">
	   <div class="form-group">
			  <label for="inputUserName">Information</label>
			  
			 </div>
			  <div class="form-group">
			 
			  <input style="font-size:12px;" disabled class="form-control" type="text" name="inputUserName" value="Enter in % Basic"/>
			 </div>
			  <div class="form-group">
			   <input style="font-size:12px;" disabled class="form-control" type="text" name="inputUserName" value="Enter in % Basic"/>
			 </div>
			 <div class="form-group">
			   <input style="font-size:12px;" disabled class="form-control" type="text" name="inputUserName" value="Enter in % Basic"/>
			 </div>
			 <div class="form-group">
			   <input style="font-size:12px;" disabled class="form-control" type="text" name="inputUserName" value="Enter in % Basic"/>
			 </div>
		
			 
			 
	 </div>
	 
	 
	 <div class="onlyaccssbutton">
                  <label for="gender"></label>
			     
			    <button style="background-color:#4E2614;border:4px solid #DAB776;text-align:center;" class="onekjamala" type="submit"><span style="color:white;" class="glyphicon glyphicon-plus-sign"><span style="font-weight:bold;color:white;">Add</span></button>
	 
	 
	 
	 
	 </div>
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
		
			
				
				
		  </form>
		  
		  
		  
		  
		   
		   
		   </div>
		   
		   </div>
		   
		   
		   
		   
		   
		   
		   
		   
        </div>		
		   
           

		










<?php include 'inc/footer.php';?>