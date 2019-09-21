<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Catagory.php'; ?>

<style>
.form-group{width:265px;margin-left:0px;}
.form-control{height:30px;}
.onekjamala{margin-top:20px;height:35px;border-radius:5px;margin-left:80px;}
.onekjamala1{margin-top:20px;height:35px;border-radius:5px;}
.upper_alignment{margin-left:40px;}
.second_alignment{margin-left:120px;margin-top:20px;}
.margintop_fixed{margin-top:40px;margin-bottom:20px;}
.titlefixed{margin-left:410px;}
.aliment_3{margin-left:220px;}
</style>

<div class="content">

 <div class="header">
 
        <div class="titleright titlefixed">
		 <h1 class="page-title">Attendance Setting (Monthly/Yearly)</h1>
		</div>
		
		<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:20px;border:4px solid #DAB776;" href=""><span class="glyphicon glyphicon-home" ></span> Home</a>
		
		<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:20px;border:4px solid #DAB776;" href="viewOfflineorder.php"><span class="glyphicon glyphicon-home" ></span> View</a>
		
		<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:20px;border:4px solid #DAB776;" href="viewOfflineorder.php"><span class="glyphicon glyphicon-home" ></span> View</a>
		
		<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:20px;border:4px solid #DAB776;" href=""><span class="glyphicon glyphicon-print" ></span> Print</a>
	</div>

 <div class="main-content">
            
           <div class="row">
		   
    <form action="" method="post">
	
	
	 <div style="margin-bottom:30px;" class="col-xs-12">
	        <div class="col-md-6">
				  <div class="form-group aliment_3">
					  <label for="sel1">Select Employee Type</label>
					  <select style="height:35px;" class="form-control" id="sel1">
					    <option></option>
						<option>Internal</option>
						<option>External</option>
					  </select>
					</div>
			</div>
			 
			<div class="col-md-6">
				  <div class="form-group">
					  <label for="sel1">Select</label>
					  <select style="height:35px;" class="form-control" id="sel1">
					    <option></option>
						<option>Month</option>
						<option>Year</option>
					</select>
					</div>
			 </div>		
	  </div>
	
	

	  <div class="col-xs-12">
	        <div class="col-md-4">
				  <div class="form-group upper_alignment">
					  <label for="sel1">Select Internal Employee Name</label>
					  <select style="height:35px;" class="form-control" id="sel1">
					    <option></option>
						<option>Golam</option>
						<option>Sager</option>
					  </select>
					</div>
			</div>
			 
			<div class="col-md-4">
				  <div class="form-group upper_alignment">
					  <label for="sel1">Select Month</label>
					  <select style="height:35px;" class="form-control" id="sel1">
					    <option></option>
						<option>January</option>
						<option>February</option>
						<option>March</option>
						<option>April</option>
						<option>May</option>
						<option>June</option>
						<option>July</option>
						<option>Aguest</option>
					  </select>
					</div>
			 </div>
			 
			<div class="col-md-4">
				 <div class="form-group upper_alignment">
					  <label for="sel1">Enter Year</label>
					     <input style="height:35px;" class="form-control"  type="text" name="inputAddress" placeholder="2018"/> 
					</div>
			 </div>
	  </div>
	  
	  
	  
	  
	  
	  
	  
	  
	 
	 
	 <div class="col-xs-12 margintop_fixed">
	    
		<div class="col-md-6">
	         <div class="form-group second_alignment">
			  <label for="inputUserName">Total(Present)</label>
			</div>
			<div class="form-group second_alignment">
			  <label for="inputUserName">Total(Absant)</label>
			</div>
		 </div>
	
		<div class="col-md-6">
	         <div class="form-group second_alignment">
			     <input class="form-control" type="text" name="inputEmail"/>
			 </div>
			 <div class="form-group second_alignment">
			     <input class="form-control" type="text" name="inputEmail"/>
			 </div>
			  
		     </div>
		</div>
	  	 
	 <div class="col-xs-12">
	        <div class="col-md-6">
			 <div class="form-group">
			    <button style="background-color:#4E2614;border:4px solid #DAB776;text-align:center;" class="onekjamala" type="submit"><span style="color:white;" class="glyphicon glyphicon-plus-sign"><span style="font-weight:bold;color:white;">Search</span></button>
			</div>
			</div>
			
			<div class="col-md-6">
			   <div class="form-group">
			    <button style="background-color:#4E2614;border:4px solid #DAB776;text-align:center;" class="onekjamala1" type="submit"><span style="color:white;" class="glyphicon glyphicon-plus-sign"><span style="font-weight:bold;color:white;">Add</span></button>
			</div>
			
			</div>
			
			
			
		</div>


		   
		   </div>
		   
		</div>		

<?php include 'inc/footer.php';?>