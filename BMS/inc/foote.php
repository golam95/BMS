<!---footer--->
					<div class="footer-w3l">
						<div class="container">
							<div class="footer-grids">
								<div class="col-md-3 footer-grid">
									<h4>About </h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
									<div class="social-icon">
										<a href="#"><i class="icon"></i></a>
										<a href="#"><i class="icon1"></i></a>
										<a href="#"><i class="icon2"></i></a>
										<a href="#"><i class="icon3"></i></a>
									</div>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>My Account</h4>
									<ul>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="login.html">Login</a></li>
										<li><a href="registered.html"> Create Account </a></li>
									</ul>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>Information</h4>
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="products.html">Products</a></li>
										<li><a href="codes.html">Short Codes</a></li>
										<li><a href="mail.html">Mail Us</a></li>
										<li><a href="products1.html">products1</a></li>
									</ul>
								</div>
								<div class="col-md-3 footer-grid foot">
									<h4>Contacts</h4>
									<ul>
										<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="#">E Comertown Rd, Westby, USA</a></li>
										<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="#">1 599-033-5036</a></li>
										<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:example@mail.com"> example@mail.com</a></li>
										
									</ul>
								</div>
							<div class="clearfix"> </div>
							</div>
							
						</div>
					</div>
					<!---footer--->
					<!--copy-->
					<div class="copy-section">
						<div class="container">
							<div class="copy-left">
								<p>&copy; 2018 Bakery Management. All rights reserved | Design by <a href="http://facebook.com">Golam nobi sheikh</a></p>
							</div>
							<div class="copy-right">
								<img src="images/card.png" alt=""/>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				<!--copy-->
		<div class ="toptobuttom">
		</div>		
						
 <div class="container">
 
    <div class="row">
	    <div class="col-xl-12">
		    <button style="color:white;" class="btn btn-sm pull-right alignemnt" data-target="#loginModal2" data-toggle="modal"><span class="glyphicon glyphicon-envelope"></span>   <strong>Offline</strong> Messsage</button>
		 <div class="modal fade " data-keyboard="false" data-backdrop="static" id="loginModal2" tabindex="-1">
			    <div style="width:700px;" class="modal-dialog">
				   <div style="background:#C8A067;" class="modal-content">
				      <div class="modal-header">
					     <button class="close" data-dismiss="modal">&times;</button>
						 <h4 style="color:#4E2614;font-weight:bold;font-size:20px;" class="modal-title">
						    We are offline, but if you leave your message and contact details, we will try to get back to you :)
						 </h4>
					   </div>
					   <div class="modal-body">
					     <form style="background:#C8A067;">
						    <div class="form-group margin_alignment">
							<label for="inputUserName">Name</label>
							<input class="form-control" placeholder="Login Username" type="text" id="inputUserName"/>
							</div>
							<div class="form-group margin_alignment">
							<label for="inputUserName">Email</label>
							<input class="form-control" placeholder="Login Username" type="text" id="inputUserName"/>
							</div>
							<div class="form-group margin_alignment">
							<label for="inputUserName">Contact No</label>
							<input class="form-control" placeholder="Login Username" type="text" id="inputUserName"/>
							</div>
							<div class="form-group margin_alignment">
							<label for="inputUserName">Description</label>
							<input class="form-control" placeholder="Login Username" type="trextarea" id="inputUserName"/>
							</div>
						  </form>
					   </div>
					   <div class="modal-footer">
					    <button style="background-color:#4E2614;color:white;" class="btn">LogIn</button>
						 <button style="background-color:#4E2614;color:white;" class="btn" data-dismiss="modal">Close</button>
					   </div>
					 </div>
				 </div>
			  </div>
		 </div>
	 </div>
 
 </div>	
		

		<script>
		      $(window).scroll(function(){
			     if($(this).scrollTop()>300){
				   $(".toptobuttom").fadeIn();
				   }else{
				   $(".toptobuttom").fadeOut();
				 }
			  });
			  $(".toptobuttom").click(function(){
			      $("html, body").animate({scrollTop:0},500);
			  });
		   </script>
			
</body>
</html>