<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Employee</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="{{url('employee/assets/css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{url('employee/assets/css/font-awesome.css')}}" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="{{url('employee/assets/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{url('employee/assets/css/custom.css')}}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   
   
   
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<!--
2 Include these two files 
-->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css')}}">

<!--
3 Call this single function 
-->
<script>
	$(document).ready(function() 
	{
		$('#table').DataTable();
	} );
</script>
</head>
<body>
 @include('sweetalert::alert')
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">Employee</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="adminlogout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="{{url('employee/assets/img/find_user.png')}}" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="dashboard"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop"></i>Category <span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
						<li>
						<a href="add_cate"><i class="fa fa-table"></i>Add Category</a>
						</li>
						<li>
						<a href="manage_cate"><i class="fa fa-table"></i>Manage Category</a>
						</li>
						</ul>
					</li>

                   <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i>Products <span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
						<li>
						<a href="add_prod"><i class="fa fa-table "></i>Add Product</a>
						</li>
						<li>
						<a href="manage_prod"><i class="fa fa-table "></i>Manage Product</a>
						</li>
						</ul>
					</li>
					<li>
                        <a href="manage_cus"><i class="fa fa-user"></i>Customer</a>
					</li>
					<li>
                        <a href="#"><i class="fa fa-user"></i>Employee<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
						<li>
						<a href="add_emp"><i class="fa fa-table "></i>Add Employee</a>
						</li>
						<li>
						<a href="manage_emp"><i class="fa fa-table "></i>Manage Employee</a>
						</li>
						</ul>
					</li>
					<li>
                        <a href="manage_feed"><i class="fa fa-user"></i>Feedback</a>
					</li>
					
					<li>
                        <a href="manage_cont"><i class="fa fa-user"></i>Contacts</a>
					
					</li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->