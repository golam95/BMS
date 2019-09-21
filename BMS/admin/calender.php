<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Catagory.php'; ?>




<?php

 include_once('functions.php'); 

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


<div style="background:#6A3E4F" id="calendar_div">
 <?php echo getCalender(); ?>
</div>





</div>
</div>

<?php include 'inc/footer.php';?>






