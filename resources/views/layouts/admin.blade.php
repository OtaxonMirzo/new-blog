<!DOCTYPE HTML>
<html>
<head>
<title>Easy Admin Panel an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap CSS -->
<link href="/admin/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Bootstrap Core CSS -->
<link href="/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="/admin/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="/admin/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link href="/admin/css/icon-font.min.css" rel="stylesheet" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="/admin/js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="/admin/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="/admin/js/wow.min.js"></script>
<script>
	new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
<!-- Meters graphs -->
<script src="/admin/js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head> 

<body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
		<!-- left side start-->
		<div class="left-side sticky-left-side">
			
			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="{{ route('admin') }}">Easy <span>Admin</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="{{ route('admin') }}"><i class="lnr lnr-home"></i> </a>
			</div>
			
			<!--logo and iconic logo end-->
			<div class="left-side-inner">
				
				<!--sidebar nav start-->
				<ul class="nav nav-pills nav-stacked custom-nav">
					<li class="active"><a href="{{ route('admin') }}"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a></li>
					<li class="menu-list">
						<a href="#"><i class="lnr lnr-cog"></i>
						<span>Components</span></a>
						<ul class="sub-menu-list">
							<li><a href="{{ route('grids') }}">Grids</a> </li>
							<li><a href="{{ route('widgets') }}">Widgets</a></li>
								</ul>
							</li>
							<li><a href="{{ route('forms') }}"><i class="lnr lnr-spell-check"></i> <span>Forms</span></a></li>
							<li><a href="{{ route('tables') }}"><i class="lnr lnr-menu"></i> <span>Tables</span></a></li>              
							<li class="menu-list"><a href="#"><i class="lnr lnr-envelope"></i> <span>MailBox</span></a>
							<ul class="sub-menu-list">
								<li><a href="{{ route('inbox') }}">Inbox</a> </li>
								<li><a href="{{ route('compose_mail') }}">Compose Mail</a></li>
							</ul>
						</li>      
						<li class="menu-list"><a href="#"><i class="lnr lnr-indent-increase"></i> <span>Menu Levels</span></a>  
						<ul class="sub-menu-list">
								<li><a href="{{ route('charts') }}">Basic Charts</a> </li>
							</ul>
						</li>
						<li><a href="{{ route('codes') }}"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>
						<li><a href="{{ route('media') }}"><i class="lnr lnr-select"></i> <span>Media Css</span></a></li>
						<li class="menu-list"><a href="#"><i class="lnr lnr-book"></i>  <span>Pages</span></a> 
							<ul class="sub-menu-list">
								<li><a href="{{ route('blank_page') }}">Blank Page</a></li>
							</ul>
						</li>
					</ul>
					<!--sidebar nav end-->
				</div>
			</div>
		<!-- left side end-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
			 
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->

			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">  	
					<div class="profile_details_left">
						<ul class="nofitications-dropdown">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
									
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new messages</h3>
												</div>
											</li>
											<li><a href="#">
											   <div class="user_img"><img src="images/1.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="images/1.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet </p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											<li><a href="#">
											   <div class="user_img"><img src="images/1.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet </p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all messages</a>
												</div> 
											</li>
										</ul>
							</li>
							<li class="login_box" id="loginContainer">
									<div class="search-box">
										<div id="sb-search" class="sb-search">
											<form>
												<input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
												<input class="sb-search-submit" type="submit" value="">
												<span class="sb-icon-search"> </span>
											</form>
										</div>
									</div>
										<!-- search-scripts -->
										<script src="js/classie.js"></script>
										<script src="js/uisearch.js"></script>
											<script>
												new UISearch( document.getElementById( 'sb-search' ) );
											</script>
										<!-- //search-scripts -->
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
									<ul class="dropdown-menu">
										<li>
											<div class="notification_header">
												<h3>You have 3 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>	
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div> 
										</li>
									</ul>
							</li>	
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">22</span></a>
									<ul class="dropdown-menu">
										<li>
											<div class="notification_header">
												<h3>You have 8 pending task</h3>
											</div>
										</li>
										<li><a href="#">
												<div class="task-info">
												<span class="task-desc">Database update</span><span class="percentage">40%</span>
												<div class="clearfix"></div>	
											   </div>
												<div class="progress progress-striped active">
												 <div class="bar yellow" style="width:40%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
											   <div class="clearfix"></div>	
											</div>
										   
											<div class="progress progress-striped active">
												 <div class="bar green" style="width:90%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
												<div class="clearfix"></div>	
											</div>
										   <div class="progress progress-striped active">
												 <div class="bar red" style="width: 33%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
											   <div class="clearfix"></div>	
											</div>
											<div class="progress progress-striped active">
												 <div class="bar  blue" style="width: 80%;"></div>
											</div>
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all pending task</a>
											</div> 
										</li>
									</ul>
							</li>		   							   		
							<div class="clearfix"></div>	
							<form action="{{ route('logout') }}" method="post">
								@csrf 
								<button class="btn-primary" type="submit"> Logout </button>
							</form>
						</ul>
					</div>
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span style="background:url(images/1.jpg) no-repeat center"> </span> 
										 <div class="user-name">
											<p>Otash<span>Administrator</span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li> 
									<li> <a href="sign-up.html"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>		
					<div class="social_icons">
						<div class="col-md-4 social_icons-left">
							<a href="#" class="yui"><i class="fa fa-facebook i1"></i><span>300<sup>+</sup> Likes</span></a>
						</div>
						<div class="col-md-4 social_icons-left pinterest">
							<a href="#"><i class="fa fa-google-plus i1"></i><span>500<sup>+</sup> Shares</span></a>
						</div>
						<div class="col-md-4 social_icons-left twi">
							<a href="#"><i class="fa fa-twitter i1"></i><span>500<sup>+</sup> Tweets</span></a>
						</div>
						<div class="clearfix"> </div>
					</div>            	
					<div class="clearfix"></div>
				</div>
			  </div>
			<!--notification menu end -->
			</div>
		<!-- //header-ends -->
<div class="container-fluid">
	@yield('content')
</div>
		<!-- main content start-->

					<!--body wrapper start-->
				</div>
				<!--body wrapper end-->
		</div>
        <!--footer section start-->
		<footer>
			<p> Orginal Musics </p>
		</footer>
        <!--footer section end-->
		
      <!-- main content end-->
   </section>
  
<script src="/admin/js/jquery.nicescroll.js"></script>
<script src="/admin/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="/admin/js/bootstrap.min.js"></script>
</body>
</html>