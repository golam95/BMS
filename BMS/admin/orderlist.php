<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php 
$role=Session::get("adminRole");
if ($role!='0') {
	
$id=Session::get("adminId");
$name=Session::get("adminName");
$page = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}"; 
$query="INSERT INTO track_visitor (userId,user_name,page) VALUES ('$id','$name',  '$page')";
$insertdata=$db->insert($query);
// if ($insertdata) {
// 	echo "inserted";
// }else{
// 	echo("not");
// }
}
 ?>
<?php 
$filepath=realpath(dirname(__FILE__));
include_once ($filepath.'/../classes/Cart.php');
 $ct=new Cart();
 $fm=new Format();
 ?>
 <?php
 if (isset($_GET['shifted'])) {
  	$id=$_GET['shifted'];
  	$time=$_GET['time'];
  	$price=$_GET['price'];
  	$shift=$ct->productShift($id,$time,$price);
  } 

  if (isset($_GET['delProid'])) {
  	$id=$_GET['delProid'];
  	$time=$_GET['time'];
  	$price=$_GET['price'];
  	$delOrder=$ct->delShiftedOrder($id,$time,$price);
  } 
  ?>
  <div class="content">
        <div class="header">
		
		<div class="titleleft">
		   <ul class="breadcrumb">
            <li><a href="index.html"><span class="glyphicon glyphicon-home"></span> Home</a> </li>
            <li class="active">Order</li>
        </ul>
		</div>
		   
		
		<div class="titleright">
		 <h1 class="page-title">Customer Order Information</h1>
		
		</div>
     </div>
	 
	 
  
  <div class="main-content">
            
           <div class="row">
		   
		  
            <div class="col-xs-11">
			<div class="table-responsive">
			
                <?php 
                if (isset($shift)) {
                	echo($shift);
                }
                if (isset($delOrder)) {
                	echo($delOrder);
                }
                 ?>
                <div class="block">        
                   

				   <table style="margin-left:40px;" class="table table-striped table-bordered table-hover" id="example">
					<thead>
						<tr>
						   
							<th style="text-align:center;background-color:#583535;color:white;">product</th>
							<th style="text-align:center;background-color:#583535;color:white;">quantity</th>
							<th style="text-align:center;background-color:#583535;color:white;">price</th>
							<th style="text-align:center;background-color:#583535;color:white;">Date</th>
							
							<?php if (Session::get("adminRole")=='0' || Session::get("adminRole")=='1') { ?>
							<th style="text-align:center;background-color:#583535;color:white;">Action</th>
							<?php } ?>
						</tr>
					</thead>
					<tbody>
					<?php 
					
					$getorder=$ct->getAllProduct();
					
					if ($getorder) {
						while ($result=$getorder->fetch_assoc()) {
					 ?>
						<tr class="primary">
						
							<td  style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['productName']) ;?></td>
							<td  style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['quantity']) ;?></td>
							<td  style="color:black;text-align:center;font-weight:bold;font-size:12px;">$<?php echo($result['price']) ;?></td>
							<td  style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($fm->formatDate($result['date'])) ;?></td>
							
							<?php if (Session::get("adminRole")=='0' || Session::get("adminRole")=='1') { ?>
							<td  style="color:black;text-align:center;font-weight:bold;font-size:12px;">
							<div class="dropdown">
								  <button style="background-color:#D9B675;font-weight:bold;color:white;border:2px solid #4E2614;color:#BF3A2B;" class="btn  dropdown-toggle" type="button" data-toggle="dropdown">Action
								  <span class="caret"></span></button>
								  <ul class="dropdown-menu">
								    <li><a href="printorder.php?cusId=<?php echo($result['userId']) ;?>&time=<?php echo($result['date']);?>">Print</a></li>
								     <li><a href="assignservice.php?cusId=<?php echo($result['userId']) ;?>&time=<?php echo($result['date']) ; ?>">Delivery Service</a></li>
								    <li><a href="customer.php?cusId=<?php echo($result['userId']) ;?>">view details</a></li>
								    <?php 
									if ($result['status']=='0') {?>
										<li><a href="?shifted=<?php echo($result['userId']) ; ?>&price=<?php echo($result['price']) ; ?>&time=<?php echo($result['date']) ; ?>">Shifted</a> </li>
									<?php }elseif($result['status']=='1'){ ?>
								    <li>Pending</li>
								    <?php }else{ ?>
							     <li><a onclick="return confirm('are you sure delect category!')" href="?delProid=<?php echo($result['userId']) ; ?>&price=<?php echo($result['price']) ; ?>&time=<?php echo($result['date']) ; ?>">Remove</a></li>
								  </ul>
								</div> 
							</td>
							<?php } ?>

							<?php } ?>
						</tr>
						<?php }} ?>
						
					</tbody>
				</table>
               </div>
			   </div>
            </div>
        </div>

<?php include 'inc/footer.php';?>
