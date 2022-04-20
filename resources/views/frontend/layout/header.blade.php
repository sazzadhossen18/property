
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="author" content="Themezhub" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Residence & Real Estate Website</title>
    <!-- Custom CSS -->
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
		
</head>
<body class="yellow-skin">
		
 <div class="preloader"></div>
		
       
 <div id="main-wrapper">
		
<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->
<!-- Start Navigation -->
<div class="header header-light">
	<div class="container">
		<nav id="navigation" class="navigation navigation-landscape">
			<div class="nav-header">
				<a class="nav-brand" href="{{url('/')}}">
					<img src="{{asset('assets/img/logo.png')}}" class="logo" alt="" />
				</a>
				<div class="nav-toggle"></div>
				<div class="mobile_nav">
					<ul>
						<li class="_my_prt_list"><a href="#"><span>2</span>My List</a></li>
						<li><a href="#" data-toggle="modal" data-target="#login"><i class="fas fa-user-circle fa-lg"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="nav-menus-wrapper" style="transition-property: none;">
				<ul class="nav-menu">
					<li><a href="{{url('/')}}">Home</a></li>
					<li><a href="{{url('/')}}">Property</a></li>
						
				</ul>
				
				<ul class="nav-menu nav-menu-social align-to-right">
					
					<li>
						<a href="login" class="alio_green" data-toggle="modal" data-target="#login">
							<i class="fas fa-sign-in-alt mr-1"></i><span class="dn-lg">Sign In</span>
						</a>
					</li>
					<li class="add-listing">
						<a href="{{route('add.property')}}"  class="theme-cl">
							 <i class="fas fa-plus-circle mr-1"></i>Add Property
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div>
<!-- End Navigation -->
<div class="clearfix"></div>
<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->



 