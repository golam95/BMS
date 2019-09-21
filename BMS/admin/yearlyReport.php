<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Catagory.php'; ?>

<script type="text/javascript">
     function printlayer(Layer){
	    var generator=window.open(",'name,");
		var layertext=document.getElementById(Layer);
		generator.document.write(layertext.innerHTML.replace("print Me"));
		generator.document.close();
		generator.print();
		generator.close();
	 }
  
  </script>
	 


<style>
.form-group{width:265px;margin-left:0px;}
.form-control{height:25px;}
.firtstleft{margin-left:35px;}
.secondleft{margin-left:250px;}
.onekjamala{width:500px;margin-top:20px;height:35px;border-radius:5px;margin-left:280px;}
.singlealignment{margin-left:350px;}
.samealignment{margin-left:270px;}
.widthchange{width:220px;}
.upper_alignment{margin-left:150px;}
.bottom_alignment{margin-left:60px;}


</style>

<div class="content">

 <div class="header">
		<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:20px;border:4px solid #DAB776;" href="index.php"><span class="glyphicon glyphicon-home" ></span> Home</a>
		
		<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:20px;border:4px solid #DAB776;" href=""><span class="glyphicon glyphicon-print" ></span> View</a>
		
		<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:20px;border:4px solid #DAB776;" href=""onclick="javascript:printlayer('div-id-name')"><span class="glyphicon glyphicon-print" ></span> Print</a>
	</div>


       
	 
	 
 <div class="main-content" id="div-id-name">
            
           <div class="row">
		   
	<?php
	$firstName1="";
	$firstName2="";
	$firstName3="";
	$firstName4="";
	$firstName5="";

   $db = new database();
   if(isset($_POST['search'])){
	
	if(!empty($_POST['month']) && !empty($_POST['inputYear'])){
		$Valuetosearch =$_POST['month'];
	    $Valuetosearch1 =$_POST['inputYear'];
	    $query="select * from yearly_report where (`year_month`)='$Valuetosearch' and (`year_yea`)='$Valuetosearch1'";
	$read =$db->select($query); 
	if($read){
		 while($row = $read->fetch_assoc()){
		    $firstName1= $row['year_date'];
		    $firstName2= $row['year_date'];
			$firstName3= $row['year_cost'];
		    $firstName4= $row['year_benefit'];
		    $firstName5= $row['year_total'];
		
	     }
      }
		
	}else{
		echo "get error";
	}
}
?>	  
		       
	 <form action="yearlyReport.php" method="post">
	 
	 
	 <div class="col-xs-12">
	    
		
	 
	 
	        <div class="col-md-6">

				<div class="form-group upper_alignment">
					  <label for="sel1">Select Month</label>
					  <select class="form-control" name="month">
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
				  <input class="form-control" type="text" name="inputYear" placeholder="Follow this 2018"/>
				 </div>
			 </div>
			 
	 </div>
	 
	  <div class="col-xs-12">
	        <div class="col-md-12">
			<div class="form-group">
			    <button style="background-color:#4E2614;border:4px solid #DAB776;text-align:center;" class="onekjamala" type="submit" name="search"><span style="color:white;" class="glyphicon glyphicon-plus-sign"><span style="font-weight:bold;color:white;">Create Report</span></button>
			</div>
			</div>
		</div>
		
		
		
		 <div class="col-xs-12">
	        <div class="col-md-12">
			 <div class="form-group">
			  <label  style="width:800px;color:#561201;padding:10px;font-size:18px;" class="secondleft" for="inputUserName">*** GOLAM   BAKERY   EMPLOYEE   SALLARY   REPORT ***</label>
			</div>
			 </div>
		</div>
	 
		
    <div class="col-xs-12">
	   <div class="col-md-6">
	       <div class="form-group">
			  <label style="font-size:12px;" for="inputUserName">Date</label>
			</div>
			<div class="form-group">
			  <label style="font-size:12px;" class="reduceFont" for="inputUserName">Monthly Slip </label>
		     </div>
		
		</div>
		


		
	<div class="col-md-6">
	   <div class="form-group">
			  <input class="form-control samealignment widthchange" type="text" name="inputUserName" value="<?php echo $firstName1;?>"/>
			 </div>
			  <div class="form-group">
		          <input class="form-control samealignment widthchange" type="text" name="inputUserName" value="<?php echo $firstName1;?>"/>
			 </div>
			
	 </div>
	 
</div>

 <div class="col-xs-12">
    <div class="col-md-12">
	      <div class="form-group singlealignment">
			  <label style="font-size:12px;color:#561201;font-weight:bold;font-size:17px;padding:10px;width:500px;" class="reduceFont" for="inputUserName">########## R E P O R T ##########</label>
			 </div>
	</div>
 </div>
	 
  
 
 
	<div class="col-xs-12">
	        <div class="col-md-4">
	             <div class="form-group bottom_alignment">
			  <label for="inputUserName">Total Cost</label>
			  <input class="form-control" type="text" name="inputSteetNo" value="<?php echo $firstName3;?>"/>
			 </div>
	   
	        </div>
		 <div class="col-md-4">
				<div class="form-group">
			  <label for="inputUserName">Total Benefit</label>
			  <input class="form-control" type="text" name="inputSteetNo" value="<?php echo $firstName4;?>"/>
			 </div>
		 </div>
		   <div class="col-md-4">
				 <div class="form-group">
			  <label for="inputUserName">Good</label>
			  <input class="form-control" type="text" name="inputSteetNo" value="<?php echo $firstName5;?>"/>
			 </div>
		   
		   </div>
	   
	   </div>
		   
	
		   </form>
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   </div>
		   
		</div>		

<?php include 'inc/footer.php';?>