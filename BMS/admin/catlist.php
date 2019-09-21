<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Catagory.php'; ?>
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
$cat=new Catagory(); 
if (isset($_GET['delete'])) {
	// $id=$_GET['delete'];
	$id=preg_replace('/[^-a-zA-Z0-9]/', '', $_GET['delete']);
	$delCate=$cat->delCatById($id);
}
?>



         <div class="content">
        <div class="header">
		
		<div class="titleleft">
		   <ul class="breadcrumb">
            <li><a href="index.html"><span class="glyphicon glyphicon-home"></span> Home</a> </li>
            <li class="active">viewEmp</li>
        </ul>
		</div>
		   
		
		<div class="titleright">
		 <h1 class="page-title">View Employee Information</h1>
		<div style="color: green;">
     <?php 
               if (isset($insertCat)) {
                   echo($insertCat);
               }
                ?> 
     </div>
		</div>
     </div>
       




	 <div class="main-content">
            
           <div class="row">
		   
		   <div class="form-group">
		      <div class="addsearch_left">
			     <a  class="form-control" href="addEmp.html"><span class="glyphicon glyphicon-plus-sign"></span> Add Employee</a>
			  </div>
			  
			  <div class="addsearch_right">
			       <input  class="form-control" placeholder="Search..." type="search" id="inputUserName"/>
			  </div>
		   
		   
			 </div>
            <div class="col-xs-11">
	        		 <div class="table-responsive">
		 <table style="margin-left:40px;" class="table table-striped table-bordered table-hover">
		     <thead>
		     	
			     <tr class="active">
				   <th style="text-align:center;background-color:#583535;color:white;">SN</th>
					<th style="text-align:center;background-color:#583535;color:white;">Category Name</th>
					
					<th style="width:150px;text-align:center;background-color:#583535;color:white;">Action</th>
				  </tr>
				  <tbody>
				  
				  <?php 
						$getCat=$cat->getAllCat();
						if ($getCat) {
							$i=0;
							while ($re=$getCat->fetch_assoc()) {
								$i++;
						 ?>
				    <tr class="primary">
				    <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($i) ;?></td>
					 <td style="color:black;text-align:center;font-weight:bold;font-size:12px;"><?php echo($re['catName']) ;?></td>
					  
					 <td style="color:black;text-align:center;font-weight:bold;font-size:12px;">
					 <a style="padding:10px;background-color:green;border-radius:5px;text-decoration:none;color:white;" class="glyphicon glyphicon-pencil" href="catedit.php?catid=<?php echo($re['catId']) ;?>"></a>
					 <?php 
				                    if (Session::get("adminRole")=='0') {
				                     ?>
					 <a onclick="return confirm('are you sure delect category!')" href="?delete=<?php echo($re['catId']) ;?>" style="padding:10px;background-color:red;border-radius:5px;text-decoration:none;color:white;" class="glyphicon glyphicon-trash"></a>
					 <?php } ?>
					 <a style="padding:10px;background-color:#F0AD4E;border-radius:5px;text-decoration:none;color:white;" class="glyphicon glyphicon-remove"></a>
					
					 </td>
				  </tr>
				  
				  
				  
<?php }}else{echo("catagory not found");} ?>
				  
				  </tbody>
				</thead>
		 </table>
		 
		 <div class="container">
	  
	  	  <ul class="pagination pagination-mg">
	      <li class="disabled"><a href="#">&laquo</a></li>
	      <li><a href="#">1</a></li>
		   <li><a href="#">2</a></li>
		   <li class="active"><a href="#">3</a></li>
		   <li><a href="#">4</a></li>
		   <li><a href="#">&raquo</a></li>
	   </ul>
	   </div>
		 </div>
		 
		 
		 
	    </div>
   </div> 
<script type="text/javascript">
	$(document).ready(function () {
	    setupLeftMenu();

	    $('.datatable').dataTable();
	    setSidebarHeight();
	});
</script>
<?php include 'inc/footer.php';?>

