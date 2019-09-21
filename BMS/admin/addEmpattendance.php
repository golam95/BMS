<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Catagory.php'; ?>

<style>
.form-group{width:265px;margin-left:0px;}
.form-control{height:30px;}
.onekjamala{width:500px;margin-top:20px;height:35px;border-radius:5px;margin-left:280px;}
.upper_alignment{margin-left:200px;}
.second_alignment{margin-left:120px;margin-top:20px;}
.margintop_fixed{margin-top:40px;margin-bottom:20px;}
.titlefixed{margin-left:350px;}

.cart-items{margin-top:110px;}
table.table {
	width: 94%;
	border: 1px solid #D0D0D0;
}
table.table th{text-align:center;color:white;font-size:20px;font-weight:bold;}
td.t-data {
    border: 1px solid #DAB776;
	text-align:center;
	color:black;
    padding: 5px !important;
	vertical-align: middle !important;
	font-size: 1em !important;
}
td.t-data a{text-decoration:none;padding:5px;background-color:#4E2614;color:white;font-weight:bold;border-radius:5px;}
th.t-head {
	background: #DAB776;
    color: white;
	font-weight:bold;
    font-size: 1em !important;
    padding: 0.6em !important;
    border: 1px solid #DAB776 !important;
}

a.at-in {
  float: left;
}
a.at-in{
	border:1px solid #DADADA;
	padding:1em 0;
	margin-left: 11%;
}
</style>

<div class="content">

 <div class="header">
 
        <div class="titleright titlefixed">
		 <h1 class="page-title">Add Order Details Information</h1>
		</div>
		
		<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:20px;border:4px solid #DAB776;" href=""><span class="glyphicon glyphicon-home" ></span> Home</a>
		
		<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:20px;border:4px solid #DAB776;" href="viewOfflineorder.php"><span class="glyphicon glyphicon-home" ></span> View</a>
		
		<a style="background:#4E2614;padding:5px;color:white;text-decoration:none;border-radius:10px;font-weight:bold;margin-left:20px;border:4px solid #DAB776;" href=""><span class="glyphicon glyphicon-print" ></span> Print</a>
	</div>

 <div class="main-content">
            
           <div class="row">
		   
    <form style="border:2px solid white;"action="" method="post">
	  
	  <div class="col-xs-12">
	        <div class="col-md-6">
				  <div class="form-group upper_alignment">
					  <label for="sel1">Select Shopkepper Name</label>
					  <select style="height:35px;" class="form-control" id="sel1">
					    <option></option>
						<option>Golam</option>
						<option>Sager</option>
					  </select>
					</div>
			</div>
			 
			<div class="col-md-6">
				 <div class="form-group upper_alignment">
				  <label for="sel1">Select Date</label>
			         <input class="form-control" type="text" name="inputEmail" id="showDate"/>
			     </div>
			 </div>
				
	  </div>
	 
	    
		  
		 
		
			<div class="cart-items">
			 
				<div class="container">
					 
					<table class="table ">
		  <tr>
			<th class="t-head head-it ">Name</th>
			<th class="t-head">Action</th>
		  </tr>
		  <tr class="cross">
			<td class="ring-in t-data">
			<div class="sed">
				<h5>Golalm Nobi sheikh</h5>
			</div>
				
			 </td>
			<td class="t-data"> 
            <input type="checkbox" value="">
           </td>
		  </tr>
		  <tr class="cross">
			<td class="ring-in t-data">
			<div class="sed">
				<h5>Golalm Nobi sheikh</h5>
			</div>
				
			 </td>
			<td class="t-data"> 
            <input type="checkbox" value="">
           </td>
		  </tr>
		  <tr class="cross">
			<td class="ring-in t-data">
			<div class="sed">
				<h5>Golalm Nobi sheikh</h5>
			</div>
				
			 </td>
			<td class="t-data"> 
            <input type="checkbox" value="">
           </td>
		  </tr>
		  <tr class="cross">
			<td class="ring-in t-data">
			<div class="sed">
				<h5>Golalm Nobi sheikh</h5>
			</div>
				
			 </td>
			<td class="t-data"> 
            <input type="checkbox" value="">
           </td>
		  </tr>
		 
		
		  
		  
	</table>
	          </div>
			</div>
	<!-- checkout -->	
		
		
		
	
		
		
		
		
		



		   
		   </div>
		   
		</div>		

<?php include 'inc/footer.php';?>