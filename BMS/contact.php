<?php include("inc/header.php"); ?>
<?php 
	if ($_SERVER['REQUEST_METHOD']=='POST') {
       
		$name=$fm->validation($_POST['name']);
		$mobile=$fm->validation($_POST['mobile']);
		$email=$fm->validation($_POST['email']);
		$body=$fm->validation($_POST['body']);
		$name=mysqli_real_escape_string($db->link,$name);
		$mobile=mysqli_real_escape_string($db->link,$mobile);
		$email=mysqli_real_escape_string($db->link,$email);
		$body=mysqli_real_escape_string($db->link,$body);
	   $error="";
	 if (empty($name)) {
	 	$error="name must not be empty";
	 }elseif (!filter_var($name,FILTER_SANITIZE_SPECIAL_CHARS)) {
	 	$error="Invalid Name!";
	 } elseif (empty($mobile)) {
	 	$error="mobile must not be empty";
	 }elseif (empty($email)) {
	 	$error="emaile must not be empty";
	 }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
	 	$error="Invalid Email Address!";
	 }elseif (empty($body)) {
	 	$error="message field must not be empty";
	 }else{
	 	 $query = "INSERT INTO contact(name,mobileNo,email,body)   
           VALUES('$name','$mobile','$email','$body')";  
        $inserted_rows = $db->insert($query);    
        if ($inserted_rows) {  
           $msg="message send successfully" ;  
        }else {   
          $error="message not send " ;  
         }
	 }
	 } 


	?>
	<!--banner-->
		<div class="banner1">
			<div class="container">
				<h3><a href="index.php">Home</a> / <span>Products</span></h3>
			</div>
		</div>
	<!--banner-->
		<!--content-->
			<div class="content">
				<!--contact-->
					<div class="mail-w3ls">
						<div class="container">
							<h2 class="tittle">Mail Us</h2>
							<div class="mail-grids">
								<div class="mail-top">
									<div class="col-md-4 mail-grid">
										<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
										<h5>Address</h5>
										<p>Mohammadpur - Bangladesh</p>
									</div>
									<div class="col-md-4 mail-grid">
										<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
										<h5>Phone</h5>
										<p>Phone:  +001718544556</p>
									</div>
									<div class="col-md-4 mail-grid">
										<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
										<h5>E-mail</h5>
										<p>E-mail:<a href="mailto:example@mail.com">nafianshawon96@gmail.com</a></p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="map-w3">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d673607.6340751307!2d-104.44001811743372!3d48.738351336759585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5321f600f5170943%3A0x94f2e8e71e1dfc7a!2sE+Comertown+Rd%2C+Westby%2C+MT+59275%2C+USA!5e0!3m2!1sen!2sin!4v1467080368135"  allowfullscreen></iframe>
								</div>
								<div class="mail-bottom">
									<h4>Get In Touch With Us</h4>
									<?php 
				if (isset($error)) {
					echo("<span style='color: red;'>$error</span>");
				}
				if (isset($msg)) {
					echo("<span style='color: green;'>$msg</span>");
				}
				 ?>
									<form action="" method="post">
										<input type="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
										<input type="email" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
										<input type="text" name="mobile" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
										<textarea name="body"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
										<input type="submit" name="submit" value="Submit" >
										<input type="reset" value="Clear" >
									</form>
								</div>
							</div>
						</div>
					</div>
				<!--contact-->
			</div>
		<!--content-->
<?php include("inc/foote.php"); ?>
