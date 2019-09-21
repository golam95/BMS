<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Catagory.php'; ?>




<style>
.form-group{width:265px;margin-left:0px;}
.form-control{height:25px;}
.firtstleft{margin-left:35px;}
.secondleft{margin-left:250px;}
.onekjamala{width:500px;margin-top:20px;height:35px;border-radius:5px;margin-left:45px;}
.singlealignment{margin-left:350px;}
.samealignment{margin-left:270px;}
.widthchange{width:220px;}
.upper_alignment{margin-left:150px;}
.bottom_alignment{margin-left:60px;}
.onlyuse_margin{margin-bottom:30px;}


</style>
<div class="content">
 <div class="header">
		<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:20px;border:4px solid #DAB776;" href="index.php"><span class="glyphicon glyphicon-home" ></span> Home</a>
				<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:20px;border:4px solid #DAB776;" href=""><span class="glyphicon glyphicon-print" ></span> View</a>
		<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:20px;border:4px solid #DAB776;" href=""><span class="glyphicon glyphicon-print" ></span> Print</a>
	</div>
	 
 <div class="main-content">
            
    <div class="row">	       
	 <form action="" method="post">
	    <div class="col-xs-12">
	        <div class="col-md-6">
              <div class="form-group upper_alignment">
					  <label for="sel1">Select Month</label>
					  <select class="form-control" id="sel1">
					    <option></option>
						<option>January</option>
						<option>February</option>
						<option>March</option>
						<option>April</option>
						<option>May</option>
						<option>June</option>
						<option>July</option>
						<option>Aguest</option>
						<option>September</option>
						<option>Octobar</option>
						<option>November</option>
						<option>December</option>
					  </select>
					</div>
			</div>
			 
			<div class="col-md-6">
				 <div class="form-group firtstleft">
				  <label for="inputUserName">Select Year</label>
				  <input class="form-control" type="text" name="inputUserName" placeholder="Follow this 2018"/>
				 </div>
			 </div>
			 
	 </div>

		 <div class="col-xs-12 onlyuse_margin">
		 
		 
	        <div class="col-md-6">
			<div class="form-group">
			    <button style="background-color:#4E2614;border:4px solid #DAB776;text-align:center;" class="onekjamala" type="submit"><span style="color:white;" class="glyphicon glyphicon-plus-sign"><span style="font-weight:bold;color:white;">Search</span></button>
			</div>
			</div>
			
			 <div class="col-md-6">
			<div class="form-group">
			    <button style="background-color:#4E2614;border:4px solid #DAB776;text-align:center;" class="onekjamala" type="submit"><span style="color:white;" class="glyphicon glyphicon-plus-sign"><span style="font-weight:bold;color:white;">Add</span></button>
			</div>
			</div>
			
		</div>
		

 <div class="col-xs-12">
	   
	   <div class="col-md-3">
	       <div class="form-group">
			  <label style="font-size:12px;" for="inputUserName">Total Internal Labour</label>
			</div>
				<div class="form-group">
			  <label style="font-size:12px;" for="inputUserName">Total External Labour</label>
			</div>
			
	   </div>
	    <div class="col-md-3">
	       <div class="form-group widthchange">
			   <input class="form-control" type="text" name="inputUserName"/>
			</div>
			  <div class="form-group widthchange">
			   <input class="form-control" type="text" name="inputUserName"/>
			</div>
		 </div>
	   
	    <div class="col-md-3">
	       <div class="form-group">
			  <label style="font-size:12px;" for="inputUserName">Cost(Sallary Internal Labour)</label>
			</div>
			<div class="form-group ">
			  <label style="font-size:12px;" for="inputUserName">Cost(Sallary External Labour)</label>
			</div>
			
	</div>
		
		
	   
	    <div class="col-md-3">
	       <div class="form-group widthchange">
			  <input class="form-control" type="text" name="inputUserName"/>
			</div>
			<div class="form-group widthchange">
			  <input class="form-control" type="text" name="inputUserName"/>
			</div>	
	   </div>
	   
	
	   <div class="col-xs-12">
	        <div class="col-md-4">
	             <div class="form-group bottom_alignment">
			  <label for="inputUserName">Total Cost</label>
			  <input class="form-control" type="text" name="inputSteetNo"/>
			 </div>
	   
	        </div>
		 <div class="col-md-4">
				<div class="form-group">
			  <label for="inputUserName">Total Benefit</label>
			  <input class="form-control" type="text" name="inputSteetNo"/>
			 </div>
		 </div>
		   <div class="col-md-4">
				 <div class="form-group">
			  <label for="inputUserName">Good</label>
			  <input class="form-control" type="text" name="inputSteetNo"/>
			 </div>
		   
		   </div>
	   
	   </div>

	   </form>
		  
		   </div>
		   
		   </div>
		   
		</div>		

<?php include 'inc/footer.php';?>