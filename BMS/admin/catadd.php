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
//  echo "inserted";
// }else{
//  echo("not");
// }
}
 ?>
<?php
$cat=new Catagory(); 
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $CatName=$_POST['catname'];
    $insertCat=$cat->catInsert($CatName);
}
 ?>

             <div class="content">
        <div class="header">
    
    <div class="titleleft">
       <ul class="breadcrumb">
            <li><a href="index.html"><span class="glyphicon glyphicon-home"></span> Home</a> </li>
            <li class="active">Users</li>
        </ul>
    </div>
       
    
    <div class="titleright">
     <h1 class="page-title">Add Category Information</h1>
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
    
        <div class="col-xs-8">
       <form method="POST">
        <div class="form-group">
        <label for="inputUserName">Category Name</label>
        <input class="form-control" placeholder="Please Enter Category name" type="text" name="catname" id="inputUserName"/>
       </div>
      
       
       
        
       <br/>
      <div class="form-group">
       <button type="submit" class="btn btn-primary">Add</button>
       </div>
      </form>
     </div>
   </div> 
      
       
<?php include 'inc/footer.php';?>