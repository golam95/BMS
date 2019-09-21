<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Catagory.php'; ?>

<style>
.form-group{width:265px;margin-left:0px;}
.form-control{height:25px;}
.firtstleft{margin-left:35px;}
.secondleft{margin-left:250px;}
.onekjamala{width:500px;margin-top:20px;height:35px;border-radius:5px;margin-left:280px;}
.singlealignment{margin-left:350px;}
.samealignment{margin-left:100px;}
.onlyuse{margin-left:40px;}
</style>

<div class="content">

 <div class="header">
		<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:20px;border:4px solid #DAB776;" href=""><span class="glyphicon glyphicon-home" ></span> Home</a>
		
		<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:20px;border:4px solid #DAB776;" href=""><span class="glyphicon glyphicon-home" ></span> View</a>
		
		<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:20px;border:4px solid #DAB776;" href=""><span class="glyphicon glyphicon-print" ></span> Print</a>
	</div>

 <div class="main-content">
            
           <div class="row">
		   
    <form action="" method="post">
	  
	  <div class="col-xs-12">
	        <div class="col-md-4">
				  <div class="form-group firtstleft">
				  <label for="inputUserName">Enter Employee ContactNo</label>
				  <input class="form-control" type="text" name="inputUserName"/>
				 </div>
			</div>
			 
			<div class="col-md-4">
				 <div class="form-group firtstleft">
				  <label for="inputUserName">Select Month</label>
				  <input class="form-control" type="text" name="inputUserName"/>
				 </div>
			 </div>
			 
			<div class="col-md-4">
				 <div class="form-group firtstleft">
				  <label for="inputUserName">Enter Current Year</label>
				  <input class="form-control" type="text" name="inputUserName"/>
				 </div>
			 </div>
	   
	 </div>
	 
	  	 <div class="col-xs-12">
	        <div class="col-md-4">
				  <div class="form-group firtstleft">
				  <label for="inputUserName">Name</label>
				  <input class="form-control" type="text" name="inputUserName"/>
				 </div>
			</div>
			 
			<div class="col-md-4">
				 <div class="form-group firtstleft">
				  <label for="inputUserName">Address</label>
				  <input class="form-control" type="text" name="inputUserName"/>
				 </div>
			 </div>
			 
			<div class="col-md-4">
				 <div class="form-group firtstleft">
				  <label for="inputUserName">Sex</label>
				  <input class="form-control" type="text" name="inputUserName"/>
				 </div>
			 </div>
	   
	 
	 </div>
	 
	 
		<div class="col-xs-12">
	        <div class="col-md-12">
			<div class="form-group">
			    <button style="background-color:#4E2614;border:4px solid #DAB776;text-align:center;" class="onekjamala" type="submit"><span style="color:white;" class="glyphicon glyphicon-plus-sign"><span style="font-weight:bold;color:white;">Create Report</span></button>
			</div>
			</div>
		</div>
		
		
		 <div class="col-xs-12">
	        <div class="col-md-12">
			 <div class="form-group onlyuse">
			  <label  style="width:500px;color:#DAB776;padding:10px;font-size:18px;" class="secondleft" for="inputUserName">GOLAM   BAKERY   EMPLOYEE   SALLARY   REPORT</label>
			</div>
			 </div>
		</div>
	 
		
    <div class="col-xs-12">
	   <div class="col-md-6">
	       <div class="form-group samealignment">
			  <label style="font-size:12px;" for="inputUserName">Date</label>
			</div>
			<div class="form-group samealignment">
			  <label style="font-size:12px;" class="reduceFont" for="inputUserName">Sallary Slip of Employee</label>
		     </div>
			 <div class="form-group samealignment">
			  <label style="font-size:12px;" for="inputUserName">Basic Pay</label>
			 </div>
		</div>
		
	<div class="col-md-6">
	   <div class="form-group">
			  <input class="form-control samealignment" type="text" name="inputUserName"/>
			 </div>
			  <div class="form-group">
		          <input class="form-control samealignment" type="text" name="inputUserName"/>
			 </div>
			  <div class="form-group">
			  <input class="form-control samealignment" type="text" name="inputUserName"/>
			 </div>
	 </div>
	 
</div>

 <div class="col-xs-12">
    <div class="col-md-12">
	      <div class="form-group singlealignment">
			  <label style="font-size:12px;" class="reduceFont" for="inputUserName">########## A L L O W A N C E ##########</label>
			 </div>
	</div>
 </div>
	 
 <div class="col-xs-12">
	   <div class="col-md-6">
	       <div class="form-group samealignment">
			  <label style="font-size:12px;" for="inputUserName">Medical</label>
			</div>
			<div class="form-group samealignment">
			  <label style="font-size:12px;" class="reduceFont" for="inputUserName">Transaction</label>
		     </div>
			 <div class="form-group samealignment">
			  <label style="font-size:12px;" for="inputUserName">Total Allowance</label>
			 </div>
		</div>
		
	<div class="col-md-6">
	   <div class="form-group">
			  <input class="form-control samealignment" type="text" name="inputUserName"/>
			 </div>
			  <div class="form-group">
		          <input class="form-control samealignment" type="text" name="inputUserName"/>
			 </div>
			  <div class="form-group">
			  <input class="form-control samealignment" type="text" name="inputUserName"/>
			 </div>
	 </div>
	 
</div>

<div class="col-xs-12">
    <div class="col-md-12">
	      <div class="form-group singlealignment">
			  <label style="font-size:12px;" class="reduceFont" for="inputUserName">########## D E D U C T I O N ##########</label>
			 </div>
	</div>
 </div>
 
 <div class="col-xs-12">
	   <div class="col-md-6">
	       <div class="form-group samealignment">
			  <label style="font-size:12px;" for="inputUserName">Absence</label>
			</div>
			<div class="form-group samealignment">
			  <label style="font-size:12px;" class="reduceFont" for="inputUserName">Tax</label>
		     </div>
			 <div class="form-group samealignment">
			  <label style="font-size:12px;" for="inputUserName">Shelter</label>
			 </div>
			 <div class="form-group samealignment">
			  <label style="font-size:12px;" for="inputUserName">Meal</label>
			 </div>
			 <div class="form-group samealignment">
			  <label style="font-size:12px;" for="inputUserName">Total Deduction</label>
			 </div>
			 <div class="form-group samealignment">
			  <label style="font-size:12px;" for="inputUserName">Net Sallary</label>
			 </div>
		</div>
		
	<div class="col-md-6">
	         <div class="form-group">
			  <input class="form-control samealignment" type="text" name="inputUserName"/>
			 </div>
			  <div class="form-group">
		          <input class="form-control samealignment" type="text" name="inputUserName"/>
			 </div>
			  <div class="form-group">
			  <input class="form-control samealignment" type="text" name="inputUserName"/>
			 </div>
			  <div class="form-group">
			  <input class="form-control samealignment" type="text" name="inputUserName"/>
			 </div>
			  <div class="form-group">
			  <input class="form-control samealignment" type="text" name="inputUserName"/>
			 </div>
			  <div class="form-group">
			  <input class="form-control samealignment" type="text" name="inputUserName"/>
			 </div>
	 </div>
	 

	 
 </form>
		  
		   </div>
		   
		   </div>
		   
		</div>		

<?php include 'inc/footer.php';?>