<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include_once'../classes/Product.php'; ?>
<?php include_once '../helpers/Format.php'; ?>
<?php include_once '../classes/Brand.php'; ?>
<?php include_once '../classes/Catagory.php'; ?>
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
$pd=new Product(); 
$fm=new Format(); 
 ?>
 <?php
$cat=new Catagory(); 
if (isset($_GET['delpd'])) {
	// $id=$_GET['delete'];
	$id=preg_replace('/[^-a-zA-Z0-9]/', '', $_GET['delpd']);
	$delPd=$pd->delPdById($id);
}
?>

 <div class="content">
        <div class="header">
		<div class="titleleft">
		   <ul class="breadcrumb">
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a> </li>
            <li class="active">Product List</li>
        </ul>
		</div>
		<div class="titleright">
		 <h1 class="page-title">Product Information</h1>
		
		</div>
     </div>
	 

<div class="main-content">
<div class="row">

<div class="form-group">
		      <div class="addsearch_left">
			     <a  class="form-control" href="productadd.php"><span class="glyphicon glyphicon-plus-sign"></span> Add Product</a>
			  </div>
			  
			  <div class="addsearch_right">
			       <input  class="form-control" placeholder="Search..." type="search" id="inputUserName"/>
			  </div>
		    </div>
			 
 

    <div class="col-xs-11">
	     
         <div class="table-responsive">
	
	
        
        <div class="block"> 
        <?php 
                if (isset($delPd)) {
                	echo($delPd);
                }
                 ?>  
            <table style="margin-left:40px;" class="table table-striped table-bordered table-hover" id="example">
			<thead>
				<tr>
				    
					<th style="text-align:center;background-color:#583535;color:white;">Product Name</th>
					<th style="text-align:center;background-color:#583535;color:white;">Category</th>
					<th style="text-align:center;background-color:#583535;color:white;">Sub_catagory</th>
					<th style="text-align:center;background-color:#583535;color:white;">Description</th>
					<th style="text-align:center;background-color:#583535;color:white;">Price</th>
					<th style="text-align:center;background-color:#583535;color:white;">Quantity</th>
					<th style="text-align:center;background-color:#583535;color:white;">Image</th>
					<th style="text-align:center;background-color:#583535;color:white;">Type</th>
					<th style="text-align:center;background-color:#583535;color:white;">Action</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			$getPd=$pd->getAllProduct();
			if ($getPd) {
				$i=0;
				while ($result=$getPd->fetch_assoc()) {
					$i++;
				
			
			 ?>
				<tr class="primary">
					
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;width:130px;"><?php echo($result['productName']); ?></td>
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['catName']); ?></td>
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['brandName']); ?></td>
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;width:220px;"><?php echo($fm->textShorten($result['body'],50)); ?></td>
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;">$<?php echo($result['price']); ?></td>
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($result['quantity']); ?></td>
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><img src="<?php echo($result['image']); ?>" height="40px" width="60px"/></td>
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;">
					<?php 
					if ($result['type']==0) {
						echo("Featured"); 
					}else{
						echo("General");
					}
					
					?>
						
					</td>
					<td style="color:black;text-align:center;font-weight:bold;font-size:12px;">
					
					
					
					<a style="padding:7px;background-color:green;border-radius:5px;text-decoration:none;color:white;height:40px;margin:5px;" href="productedit.php?pdid=<?php echo($result['productId']) ;?>"><span class="glyphicon glyphicon-pencil"></span></a>
					
					 <a onclick=" return confirm('Are you sue to delete msg from the seened box!');" style="padding:7px;background-color:red;border-radius:5px;text-decoration:none;color:white;height:40px;margin:5px;" href="?delpd=<?php echo($result['productId']) ;?>"><span class="glyphicon glyphicon-trash"></span></a>
					
					</td>
				</tr>
				<?php }}else{echo("not found");} ?>
			</tbody>
		</table>

       </div>
    </div>
	</div>
</div>

<?php include 'inc/footer.php';?>
