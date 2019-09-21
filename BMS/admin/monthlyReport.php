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
.samealignment{margin-left:270px;}
.widthchange{width:220px;}
.upper_alignment{margin-left:150px;}
.bottom_alignment{margin-left:60px;}

</style>
<div class="content">
 <div class="header">
		<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:20px;border:4px solid #DAB776;" href="index.php"><span class="glyphicon glyphicon-home" ></span> Home</a>
				<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:20px;border:4px solid #DAB776;" href=""><span class="glyphicon glyphicon-print" ></span> View</a>
		<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:20px;border:4px solid #DAB776;" href="" onclick="javascript:printlayer('div-id-name')"><span class="glyphicon glyphicon-print" ></span> Print</a>
	</div>
	 

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
	 
	 <?php
	$firstName1="";
	$firstName2="";
	$firstName3="";
	$firstName4="";
	$firstName5="";
	$firstName6="";
	$firstName7="";
	$firstName8="";
	$firstName9="";
	$firstName10="";
	$firstName11="";
	$firstName12="";
	$firstName13="";
	$firstName14="";
	$firstName15="";
	$firstName16="";
	$firstName17="";
	

   $db = new database();
   if(isset($_POST['findmonthlyreport'])){
	
	if(!empty($_POST['month']) && !empty($_POST['inputYear'])){
		$Valuetosearch =$_POST['month'];
	    $Valuetosearch1 =$_POST['inputYear'];
	    $query="select * from monthly_report where (`month_year`)='$Valuetosearch1' and (`month_mon`)='$Valuetosearch'";
	$read =$db->select($query); 
	if($read){
		 while($row = $read->fetch_assoc()){
		    
			$firstName1=$row['month_cusonline']; 
			$firstName2=$row['month_cusoffline'];  
			$firstName3=$row['month_orderonline']; 
			$firstName4=$row['month_orderoffline'];  
			$firstName5=$row['month_orderothers']; 
			$firstName6=$row['month_orderhere']; 
			$firstName7=$row['month_costinternal'];  
			$firstName8=$row['month_costexternal'];  
			$firstName9=$row['month_warehouse']; 
			$firstName10=$row['month_sellothers'];  
			$firstName11=$row['month_costhere'];  	
			$firstName12=$row['month_totalcost']; 
			$firstName13=$row['month_benefit'];  
			$firstName14=$row['month_status']; 
			$firstName15=$row['month_year'];  
			$firstName16=$row['month_mon'];  
            $firstName17= $row['month_date'];

         }
      }
		
	}else{
		echo "get error";
	}
}
?>	  
	 
	 
	 
 <div class="main-content">
            
           <div class="row" id="div-id-name">	       
	 <form action="" method="post">
	 
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
			    <button style="background-color:#4E2614;border:4px solid #DAB776;text-align:center;" class="onekjamala" name="findmonthlyreport" type="submit"><span style="color:white;" class="glyphicon glyphicon-plus-sign"><span style="font-weight:bold;color:white;">Create Report</span></button>
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
			  <input class="form-control samealignment widthchange" type="text" name="inputUserName" value="<?php echo $firstName17;?>"/>
			 </div>
			  <div class="form-group">
		          <input class="form-control samealignment widthchange" type="text" name="inputUserName" value="<?php echo $firstName17;?>"/>
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
	   
	   <div class="col-md-3">
	       <div class="form-group">
			  <label style="font-size:12px;" for="inputUserName">Total Internal Labour</label>
			</div>
				<div class="form-group">
			  <label style="font-size:12px;" for="inputUserName">Total External Labour</label>
			</div>
			 <div class="form-group">
			  <label style="font-size:12px;" for="inputUserName">Total Customer(Online)</label>
			</div>
			 <div class="form-group ">
			  <label style="font-size:12px;" for="inputUserName">Total Customer(Offline)</label>
			</div>
			 <div class="form-group">
			  <label style="font-size:12px;" for="inputUserName">Total Order(This Month Offline)</label>
			</div>
			<div class="form-group">
			  <label style="font-size:12px;" for="inputUserName">Total Order(This Month Online)</label>
			</div>
			<div class="form-group">
			  <label style="font-size:12px;" for="inputUserName">Total Order(Others bakery Owner)</label>
			</div>
			<div class="form-group">
			  <label style="font-size:12px;" for="inputUserName">Total Order(Here)</label>
			</div>
	   </div>
	    <div class="col-md-3">
	       <div class="form-group widthchange">
			   <input class="form-control" type="text" name="inputUserName"/>
			</div>
			  <div class="form-group widthchange">
			   <input class="form-control" type="text" name="inputUserName"/>
			</div>
			  <div class="form-group widthchange">
			   <input class="form-control" type="text" name="inputUserName" value="<?php echo $firstName1;?>"/>
			</div>
			  <div class="form-group widthchange">
			   <input class="form-control" type="text" name="inputUserName" value="<?php echo $firstName2;?>"/>
			</div>
			  <div class="form-group widthchange">
			   <input class="form-control" type="text" name="inputUserName" value="<?php echo $firstName3;?>"/>
			</div>
			  <div class="form-group widthchange">
			   <input class="form-control" type="text" name="inputUserName" value="<?php echo $firstName4;?>"/>
			</div>
			 <div class="form-group widthchange">
			   <input class="form-control" type="text" name="inputUserName" value="<?php echo $firstName5;?>"/>
			</div>
			 <div class="form-group widthchange">
			   <input class="form-control" type="text" name="inputUserName" value="<?php echo $firstName6;?>"/>
			</div>
	   </div>
	   
	    <div class="col-md-3">
	       <div class="form-group">
			  <label style="font-size:12px;" for="inputUserName">Cost(Sallary Internal Labour)</label>
			</div>
			<div class="form-group ">
			  <label style="font-size:12px;" for="inputUserName">Cost(Sallary External Labour)</label>
			</div>
			<div class="form-group">
			  <label style="font-size:12px;" for="inputUserName">Cost(Warehouse)</label>
			</div>
			<div class="form-group">
			  <label style="font-size:12px;" for="inputUserName">Cost(Total Order Offline)</label>
			</div>
			<div class="form-group">
			  <label style="font-size:12px;" for="inputUserName">Cost(Total Order Online)</label>
			</div>
				<div class="form-group">
			  <label style="font-size:12px;" for="inputUserName">Total Cost(Others bakery Owner)</label>
			</div>
			<div class="form-group">
			  <label style="font-size:12px;" for="inputUserName">Total Cost(Here)</label>
			</div>
			<div class="form-group">
			  <label style="font-size:12px;" for="inputUserName">Others Cost</label>
			</div>
	</div>
		
		
	   
	    <div class="col-md-3">
	       <div class="form-group widthchange">
			  <input class="form-control" type="text" name="inputUserName"value="<?php echo $firstName8;?>"/>
			</div>
			<div class="form-group widthchange">
			  <input class="form-control" type="text" name="inputUserName" value="<?php echo $firstName9;?>"/>
			</div>
			<div class="form-group widthchange">
			  <input class="form-control" type="text" name="inputUserName" value="<?php echo $firstName10;?>"/>
			</div>
			<div class="form-group widthchange">
			  <input class="form-control" type="text" name="inputUserName" value="<?php echo $firstName11;?>"/>
			</div>
			<div class="form-group widthchange">
			  <input class="form-control" type="text" name="inputUserName" value="<?php echo $firstName12;?>"/>
			</div>
			<div class="form-group widthchange">
			  <input class="form-control" type="text" name="inputUserName" value="<?php echo $firstName13;?>"/>
			</div>
			<div class="form-group widthchange">
			  <input class="form-control" type="text" name="inputUserName" value="<?php echo $firstName14;?>"/>
			</div>
			<div class="form-group widthchange">
			  <input class="form-control" type="text" name="inputUserName" value="<?php echo $firstName15;?>"/>
			</div>
			
	   </div>
	   
	
	   <div class="col-xs-12">
	        <div class="col-md-4">
	             <div class="form-group bottom_alignment">
			  <label for="inputUserName">Total Cost</label>
			  <input class="form-control" type="text" name="inputSteetNo" value="<?php echo $firstName16;?>"/>
			 </div>
	   
	        </div>
		 <div class="col-md-4">
				<div class="form-group">
			  <label for="inputUserName">Total Benefit</label>
			  <input class="form-control" type="text" name="inputSteetNo" value="<?php echo $firstName16;?>"/>
			 </div>
		 </div>
		   <div class="col-md-4">
				 <div class="form-group">
			  <label for="inputUserName">Good</label>
			  <input class="form-control" type="text" name="inputSteetNo" value="<?php echo $firstName16;?>"/>
			 </div>
		   
		   </div>
	   
	   </div>

	   </form>
		  
		   </div>
		   
		   </div>
		   
		</div>		

<?php include 'inc/footer.php';?>