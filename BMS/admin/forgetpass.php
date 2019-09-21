<?php 
include '../lib/Session.php';
Session::checkLogin();
?>
<?php include '../config/config.php';?>
<?php include '../lib/Database.php';?>
<?php include '../helpers/Format.php';?>
<?php 
$db=new Database();
$fm=new Format();

 ?>
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
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Password Recovery</title>
<link rel="stylesheet" type="text/css" href="inc/bootstrap.min.css">
 <script type="text/javascript" src="inc/jquery.min.js"></script>
<script type="text/javascript" src="inc/bootstrap.min.js"></script>
<style>
div.relative {
	padding: 2px;
    position: relative;
     top: 30px;
     left: 400px;
    width: 600px;
    height: 400px;
    border: 3px solid #4E2614;
} 
.panel-heading a:hover{text-decoration: none;}

.form-horizontal{margin-top:70px;}
.headerinforation{padding:5px;background-color:#4E2614;}
.headerinforation h2{text-align:center;font-weight:bold;padding:3px;color:white;}
.headerinformation_two{padding:3px;background-color:#C8A067;}
.headerinformation_two h4{text-align:center;font-weight:bold;padding:3px;color:white;}
.footerinformation{padding:5px;background-color:#C8A067;margin-top:80px;}
.footerinformation p{text-align:center;font-style:italic;padding:3px;color:white;padding:5px;}
</style>

</head>
<body>


<div class="headerinforation">
   <h2>Admin Panel</h2>
</div>

<div class="headerinformation_two">
   <h4>Bakery Management System</h4>
</div>

<div class="relative">
 <div class="row">
              <div class="col-md-12">
			  <div><h2 style="text-align:center;font-weight:bold;color:#C8A067;">Forgot Password</h2></div>
            <div class="panel-heading" style="text-align: center; font-size: 17px;color:#990F02;">
			  
			
                <?php 
	if ($_SERVER['REQUEST_METHOD']=='POST') {
       
		$email=$fm->validation($_POST['email']);
		$email=mysqli_real_escape_string($db->link,$email);
		 if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
         echo("<span class='error'>invalid email!</span>");
        }else{
		 $mailquery="select * from users where email='$email' limit 1";
         $checkmail=$db->select($mailquery);
		if ($checkmail !=false) {
			while ($value=$checkmail->fetch_assoc()) {
				$userid=$value['userId'];
				$name=$value['name'];
				$username=$value['typeofuser'];
			}
			$text=substr($email, 0,3);
			$rand=rand(10000,99999);
			$newpass="$text$rand";
			$pass=md5($newpass);
			$query="update users
                    set
                     password='$pass'
                     where userId='$userid'";
             $updated_row=$db->update($query);
             $to="$email";
             $query="select * from users where role='0' or role='2'";
             $msg=$db->select($query)->fetch_assoc();
             $from=$msg['email'];
             // $header="From:$from\n";
             // $header .= 'MIME-Version: 1.0' . "\r\n";
             // $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
             $subject="your password";
             $message="Your username is " .$username.  " and Password "  .$newpass.  " plz visit website to login.";
             // $sendmail=mail($to, $subject, $message,$header);
             /*new*/
              include '../mailSender.php';
              $mail->setFrom($from, 'BD Online Shop & Service');
              $mail->addReplyTo($from, 'BD Online Shop & Service');
              $mail->Subject = $subject;
               $mail->Body = 'Dear '.$name.','.$message.'.Thanks  you .';
                $mail->addAddress($to, $name);
                $sendmail=mail($to,$subject,$message,$from);
               if(!$mail->send()) {
                   echo("<script>alert('Message could not be sent');</script>");
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                    } else {
                       
                       echo("<script>alert('Message has been sent');</script>");
                      echo "<script>window.location = 'login.php';</script>";
                }
			
		   }else{
			  echo("<span style='color: red;font-size: 20px;'>Email not exist!</span>");
		}
	  }
	}
	 ?>
            </div>
            <!-- /panel-heading -->
            <div class="panel-body">
                
                <form class="form-horizontal" action="" method="post"  id="getOrderReportForm">
                  <div class="form-group">
                    <label style="color:#C8A067;" for="startDate" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email"   name="email"  class="form-control" id="startDate"  placeholder="Enter Your Valid Email" />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success" name="submit" id="generateReportBtn">Send Mail</button>

		
		
                    </div>
                  </div>
                </form>
           <div class="panel-heading" style="text-align: center; font-size: 18px; ">
               <a style="color:#C8A067;" href="login.php">LogIn</a>
            </div>
			
			
            </div>
            <!-- /panel-body -->
   
    </div>
    <!-- /col-dm-12 -->
</div>

</div>

<div class="footerinformation">
   <p>&copy; 2018 Bakery Management. All rights reserved | Design by <a href="http://facebook.com">Golam nobi sheikh</a></p>
</div>

</body>
</html>
