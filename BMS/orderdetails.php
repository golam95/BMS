<?php include("inc/header.php"); ?>
<?php
$login= Session::get("userlogin");
if ($login==false) {
   header("Location:login.php");
}
 ?>
  <?php
 if (isset($_GET['conId'])) {
    $id=$_GET['conId'];
    $time=$_GET['time'];
    $price=$_GET['price'];
    $confirm=$ct->productShiftConfirm($id,$time,$price);
  }  
  ?>
 <style>
     .tblone{text-align: justify;}
 </style>

 
 <!--banner-->
		<div class="banner1">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>Order Details</span></h3>
			</div>
		</div>
	<!--banner-->
    <div class="content">
    	<div class="cart-items">
    		<div class="container">
    			<h2 style="text-align:center;font-weight:bold;font-size:22px;color:#C8A067;">Your Order details</h2>
                    <table class="table">
                            <tr>
                                <th style="color:#4E2614;" class="t-head head-it">No</th>
                                <th style="color:#4E2614;" class="t-head head-it" >Product Name</th>
                                <th style="color:#4E2614;" class="t-head head-it" >Image</th>
                                <th style="color:#4E2614;" class="t-head head-it" >Quantity</th>
                                <th style="color:#4E2614;" class="t-head head-it" >Total Price</th>
                                <th style="color:#4E2614;" class="t-head head-it" >Date</th>
                                <th style="color:#4E2614;" class="t-head head-it" >Status</th>
                                <th style="color:#4E2614;" class="t-head head-it" >Action</th>
                            </tr>
                            <?php 
                            $uid= Session::get("userId");
                           // echo($uid);
                             $getOrdet=$ct->getOrderProduct($uid);
                             if ($getOrdet) {
                                $i=0;
                                while ($result=$getOrdet->fetch_assoc()) {
                                    $i++;
                             
                             ?>
                            <tr class="cross">
                                <td style="color:black;" class="ring-in t-data"><?php echo($i) ;?></td>
                                <td style="color:black;" class="ring-in t-data"><?php echo($result['productName']) ;?></td>
                                <td style="color:black;" class="ring-in t-data"><img style="width:80px;height:80px;" src="admin/<?php echo($result['image']); ?>" alt=""/></td>
                                <td style="color:black;" class="ring-in t-data">Tk. <?php echo($result['quantity']); ?></td>
                                
                                <td style="color:black;" class="ring-in t-data">Tk. <?php 
                                // $total=$result['price']*$result['quantity'];
                                echo($result['price']); 
                                ?></td>
                                <td style="color:black;" class="ring-in t-data"><?php echo($fm->formatDate($result['date'])) ;?></td>
                                <td style="color:black;font-weight:bold;" class="ring-in t-data">
                                <?php 
                                if ($result['status']=='0') {
                                    echo("pending");
                                }elseif ($result['status']=='1') {
                                    echo("Shifted");
                                }else{
                                    echo("ok");
                                }
                                ?>
                                    
                                </td>
                                
                                <?php 
                                if ($result['status']=='1') {?>
                                    <td style="color:black;font-weight:bold;" class="ring-in t-data"><a href="?conId=<?php echo($uid) ; ?>&price=<?php echo($result['price']) ; ?>&time=<?php echo($result['date']) ; ?>">Confirm</a>
                                </td>
                               <?php }elseif ($result['status']=='2') {?>
                                
                                <td style="color:black;font-weight:bold;" class="ring-in t-data">Ok</td>
                                <?php }elseif ($result['status']=='0') {?>
                                <td style="color:black;font-weight:bold;" class="ring-in t-data">N/A</td>
                                <?php } ?>
                            </tr>
                            
                            <?php }} ?>
                            </table>
    		</div>
    	</div>			
    	</div>  	
       <div class="clear"></div>
  
<?php include("inc/foote.php"); ?>