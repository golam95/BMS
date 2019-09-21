<?php
include_once '../lib/Session.php'; 
Session::checkSession(); 
 ?>
 <div class="sidebar-nav">
    <ul>
    <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i> Dashboard<i class="fa fa-collapse"></i></a></li>
    <li><ul class="dashboard-menu nav nav-list collapse in">
            <li><a href="index.php"><span class="fa fa-caret-right"></span>Home</a></li>
            <li ><a href="calender.php"><span class="fa fa-caret-right"></span> Calendar</a></li>
    </ul></li>
	
	<li><a href="#" data-target=".notification-menu" class="nav-header collapsed" data-toggle="collapse"><i class="glyphicon glyphicon-user"></i> User Management<span class="label label-info">+3</span></a></li>
        <li><ul class="notification-menu nav nav-list collapse">
            <li ><a href="viewUserDetails.php"><span class="fa fa-caret-right"></span>View All User</a></li>
            
    </ul></li>
	

	
  <li><a href="#" data-target=".employee-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i> Employee Information<i class="fa fa-collapse"></i></a></li>
        <li><ul class="employee-menu nav nav-list collapse">
            <li ><a href="viewEmp.php"><span class="fa fa-caret-right"></span> View Employee</a></li>
			
			 <li ><a href="rejineEmp.php"><span class="fa fa-caret-right"></span>View Rejine Employee</a></li>
			
            <li ><a href="addEmpattendance.php"><span class="fa fa-caret-right"></span>Employee Attendance</a></li>
           
            <li ><a href="#"><span class="fa fa-caret-right"></span>Internal Employee Attendance</a></li>
            <li ><a href="#"><span class="fa fa-caret-right"></span>Internal External Attendance</a></li>
			
    </ul></li>
	
	
	 <li><a href="#" data-target=".customer-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i> Customer Information<i class="fa fa-collapse"></i></a></li>
        <li><ul class="customer-menu nav nav-list collapse">
            <li ><a href="viewCustomerinformation.php"><span class="fa fa-caret-right"></span> Customer Details</a></li>
			
            <li ><a href="viewOthersonwerInfo.php"><span class="fa fa-caret-right"></span>Others Bakery OnwerInfo</a></li>
			
			<li ><a href="viewWarehouse.php"><span class="fa fa-caret-right"></span>View WarehouseDetails</a></li>
			
			 <li ><a href="viewVandetails.php"><span class="fa fa-caret-right"></span>Van Details</a></li>
			
			
     </ul></li>
	
	
	 <li><a href="#" data-target=".product-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i>Product Details<i class="fa fa-collapse"></i></a></li>
	 
	 
        <li><ul class="product-menu nav nav-list collapse">
            <li ><a href="productlist.php"><span class="fa fa-caret-right"></span>View Products</a></li>
            <li ><a href="catlist.php"><span class="fa fa-caret-right"></span>View Catagory</a></li>
            <li ><a href="sub_catList.php"><span class="fa fa-caret-right"></span>View Sub-Catagory</a></li>
			 
			 
<!--
 catadd.php
  add_subCatagory.php
-->
			 			
			   
			  
			 
			 
			 
			  
           
			
			
			
     </ul></li>

	 <li><a href="#" data-target=".order-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i>Order Details<i class="fa fa-collapse"></i></a></li>
        <li><ul class="order-menu nav nav-list collapse">
            <li ><a href="viewOfflineorder.php"><span class="fa fa-caret-right"></span>Order Details(Offline)</a></li>
            
     </ul></li>
	 
	 
	
	 <li><a href="#" data-target=".settings-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i>Settings<i class="fa fa-collapse"></i></a></li>
        <li><ul class="settings-menu nav nav-list collapse">
		  <li ><a href="addInternalSettings.php"><span class="fa fa-caret-right"></span>Internal Attendance Settings</a></li>
            <li ><a href="addsalarySettings.php"><span class="fa fa-caret-right"></span>Add Sallary Settings</a></li>
            <li ><a href="monthlySetting.php"><span class="fa fa-caret-right"></span>Add Report Settings(Monthly)</a></li>
            <li ><a href="yearlySetting.php"><span class="fa fa-caret-right"></span>Add Report Settings(Yearly)</a></li>
    </ul></li>
	
	 <li><a href="#" data-target=".track-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i>Track<i class="fa fa-collapse"></i></a></li>
        <li><ul class="track-menu nav nav-list collapse">
            <li ><a href="history.php"><span class="fa fa-caret-right"></span>History</a></li>
    </ul></li>
	
	 <li><a href="#" data-target=".database-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i>Database Backup<i class="fa fa-collapse"></i></a></li>
        <li><ul class="database-menu nav nav-list collapse">
            <li ><a href="backupdatabase/backup.php"><span class="fa fa-caret-right"></span>Backup</a></li>
			<li ><a href="viewbackup.php"><span class="fa fa-caret-right"></span>View Backup</a></li>
    </ul></li>
	
	
	<li><a href="#" data-target=".email-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i>Email<i class="fa fa-collapse"></i></a></li>
        <li><ul class="email-menu nav nav-list collapse">
            <li ><a href="#"><span class="fa fa-caret-right"></span>Send Email</a></li>
    </ul></li>
	
	
	<li><a href="#" data-target=".report-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i>Report<i class="fa fa-collapse"></i></a></li>
        <li><ul class="report-menu nav nav-list collapse">
		    <li ><a href="SallaryReport.php"><span class="fa fa-caret-right"></span>Sallary Report</a></li>
            <li ><a href="monthlyReport.php"><span class="fa fa-caret-right"></span>Monthly Report</a></li>
            <li ><a href="yearlyReport.php"><span class="fa fa-caret-right"></span>Yearly Report</a></li>
            <li ><a href="#"><span class="fa fa-caret-right"></span>Daily Report</a></li>
    </ul></li>
	
	
	<li><a href="#" data-target=".help-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i>Help<i class="fa fa-collapse"></i></a></li>
        <li><ul class="help-menu nav nav-list collapse">
            <li ><a href="#"><span class="fa fa-caret-right"></span>Help</a></li>
    </ul></li>

	<li><a href="#" data-target=".help-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i>Help<i class="fa fa-collapse"></i></a></li>
        <li><ul class="help-menu nav nav-list collapse">
            <li ><a href="#"><span class="fa fa-caret-right"></span>Help</a></li>
    </ul></li>
	
		<li><a href="#" data-target=".help-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i>Help<i class="fa fa-collapse"></i></a></li>
        <li><ul class="help-menu nav nav-list collapse">
            <li ><a href="#"><span class="fa fa-caret-right"></span>Help</a></li>
    </ul></li>
      
	  
			
			
			
			
    </div>
	
	
	
	
	
	
	