<?php
// inisialisasi session
session_start();

// mengecek apakah ada session yang aktif, jika tidak arahkan ke login.php
if (!isset($_SESSION['user_1'])) {
	header('location:login.php'); // arahkan ke login.php
}
?>	


<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">		

		<!-- Title -->
		<title> PT.PLN </title>

		<!--- Favicon --->
		<link rel="icon" href="../assets/img/1.1.png" type="image/x-icon"/>

		<!-- Bootstrap css -->
		<link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" id="style"/>

		<!--- Icons css --->
		<link href="../assets/css/icons.css" rel="stylesheet">

		<!--- Style css --->
		<link href="../assets/css/style.css" rel="stylesheet">
		<link href="../assets/css/plugins.css" rel="stylesheet">

		<!--- Animations css --->
		<link href="../assets/css/animate.css" rel="stylesheet">

	</head>

	<body class="main-body app sidebar-mini ltr">

		<!-- Loader -->
		<div id="global-loader">
			<img src="../assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- page -->
	   <div class="page custom-index">

			<!-- main-header -->
			<div class="main-header side-header sticky nav nav-item">
				<div class="container-fluid main-container ">
					<div class="main-header-left ">
						<div class="app-sidebar__toggle mobile-toggle" data-bs-toggle="sidebar">
							<a class="open-toggle"   href="javascript:void(0);"><i class="header-icons" data-eva="menu-outline"></i></a>
							<a class="close-toggle"   href="javascript:void(0);"><i class="header-icons" data-eva="close-outline"></i></a>
						</div>
						<div class="responsive-logo">
							<a href="index.html" class="header-logo"><img src="../assets/img/brand/logo.png" class="logo-11"></a>
							<a href="index.html" class="header-logo"><img src="../assets/img/brand/logo-white.png" class="logo-1"></a>
						</div>
						<ul class="header-megamenu-dropdown  nav">
							<li class="nav-item">
								<div class="btn-group dropdown">
									<button aria-expanded="false" aria-haspopup="true" class="btn btn-link dropdown-toggle" data-bs-toggle="dropdown" id="dropdownMenuButton2" type="button"><span><i class="fe fe-settings"></i> Settings </span></button>
									<div  class="dropdown-menu" >
										<div class="dropdown-menu-header header-img p-3">
											<div class="drop-menu-inner">
												<div class="header-content text-start d-flex">
												    <div class="text-white">
														<h5 class="menu-header-title">Setting</h5>
														<h6 class="menu-header-subtitle mb-0">Overview of theme</h6>
													</div>
													<div class="my-auto ms-auto">
														<span class="badge bg-pill bg-warning float-end">View all</span>
													</div>
												</div>
											</div>
										</div>
										<div class="setting-scroll">
											<div>
												<div class="setting-menu ">
													<a  class="dropdown-item"   href="profile.html"><i class="mdi mdi-account-outline tx-16 me-2 mt-1"></i>Profile</a>
													<a class="dropdown-item"   href="contacts.html"><i class="mdi mdi-account-box-outline tx-16 me-2"></i>Contacts</a>
													<a class="dropdown-item"   href="settings.html"><i class="mdi mdi-account-location tx-16 me-2"></i>Accounts</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item"   href="about.html"><i class="typcn typcn-briefcase tx-16 me-2"></i>About us</a>
													<a class="dropdown-item"   href="javascript:void(0);"><i class="mdi mdi-application tx-16 me-2"></i>Getting start</a>
												</div>
											</div>
										</div>
										<ul class="setting-menu-footer flex-column ps-0">
											<li class="divider mb-0 pb-0 "></li>
											<li class="setting-menu-btn">
												<button class=" btn-shadow btn btn-success btn-sm">Cancel</button>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<li class="nav-item">
								<div class="dropdown-menu-rounded btn-group dropdown" >
									<button aria-expanded="false" aria-haspopup="true" class="btn btn-link dropdown-toggle" data-bs-toggle="dropdown" id="dropdownMenuButton3" type="button"><span><i class="nav-link-icon fe fe-briefcase"></i> Projects </span></button>
									<div class="dropdown-menu-lg dropdown-menu"  x-placement="bottom-left">
										<div class="dropdown-menu-header">
											<div class="dropdown-menu-header-inner header-img p-3">
												<div class="header-content text-start d-flex">
												    <div class="text-white">
														<h5 class="menu-header-title">Projects</h5>
														<h6 class="menu-header-subtitle mb-0">Overview of Projects</h6>
													</div>
													<div class="my-auto ms-auto">
														<span class="badge bg-pill bg-warning float-end">View all</span>
													</div>
												</div>
											</div>
										</div>
										<a  class="dropdown-item  mt-2"   href="javascript:void(0);"><i class="dropdown-icon"></i>Mobile Application</a>
										<a class="dropdown-item"   href="javascript:void(0);"><i class="dropdown-icon"></i>PSD Projects</a>
										<a class="dropdown-item"   href="javascript:void(0);"><i class="dropdown-icon"></i>PHP Project</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item"   href="javascript:void(0);"><i class="dropdown-icon"></i>Wordpress Projects</a>
										<a class="dropdown-item mb-2"   href="javascript:void(0);"><i class="dropdown-icon "></i>HTML & CSS3 Projects</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<button class="navbar-toggler nav-link icon navresponsive-toggler vertical-icon ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
					</button>
					<div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0  mg-lg-s-auto">
						<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
							<div class="main-header-right">
								<div class="nav nav-item nav-link" id="bs-example-navbar-collapse-1">
									<form class="navbar-form" role="search">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Search">
											<span class="input-group-btn">
												<button type="reset" class="btn btn-default">
													<i class="fas fa-times"></i>
												</button>
												<button type="submit" class="btn btn-default nav-link">
													<i class="fe fe-search"></i>
												</button>
											</span>
										</div>
									</form>
								</div>
								
								<div class="nav nav-item  navbar-nav-right mg-lg-s-auto">
								
									<div class="dropdown main-profile-menu nav nav-item nav-link">

										<a class="profile-user d-flex" href=""><img src="../assets/img/faces/6.jpg" alt="user-img" class="rounded-circle mCS_img_loaded"><span></span></a>

										<div class="dropdown-menu">
											<div class="main-header-profile header-img">
												<div class="main-img-user"><img alt="" src="../assets/img/faces/6.jpg"></div>
												<h6>Petey Cruiser</h6><span>Premium Member</span>
											</div>
											<a class="dropdown-item" href="profile.html"><i class="far fa-user"></i> My Profile</a>
											<a class="dropdown-item" href="profile.html"><i class="far fa-edit"></i> Edit Profile</a>
											<a class="dropdown-item" href="profile.html"><i class="far fa-clock"></i> Activity Logs</a>
											<a class="dropdown-item" href="profile.html"><i class="fas fa-sliders-h"></i> Account Settings</a>
											<a class="dropdown-item" href="signup.html"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
										</div>
									</div>
									<div class="dropdown main-header-message right-toggle">
										<a class="nav-link pe-0" data-bs-toggle="sidebar-right" data-bs-target=".sidebar-right">
											<i class="ion ion-md-menu tx-20 bg-transparent"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /main-header -->

			<!-- main-sidebar -->
			<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
			<div class="sticky">
				<aside class="app-sidebar sidebar-scroll">
					<div class="main-sidebar-header active">
						<a class="desktop-logo logo-light active" href="index.html"><img src="../assets/img/brand/logo.png" class="main-logo" alt="logo"></a>
						<a class="logo-icon mobile-logo icon-light active" href="index.html"><img src="../assets/img/brand/favicon.png" alt="logo"></a>
					</div>
					<div class="main-sidemenu">
						<div class="main-sidebar-loggedin">
							<div class="app-sidebar__user">
								<div class="dropdown user-pro-body text-center">
									<div class="user-pic">
										<img src="../assets/img/faces/6.jpg" alt="user-img" class="rounded-circle mCS_img_loaded">
									</div>
									<div class="user-info">
										<h6 class=" mb-0 text-dark">Petey Cruiser</h6>
										<span class="text-muted app-sidebar__user-name text-sm">Administrator</span>
									</div>
								</div>
							</div>
						</div>
					
						<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
						<ul class="side-menu ">
							<li class="slide">
								<a class="side-menu__item" href="index.html"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">Dashboard</span></a>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-bs-toggle="slide"   href="javascript:void(0);"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Apps</span><i class="angle fe fe-chevron-down"></i></a>
								<ul class="slide-menu">
									<li class="side-menu__label1"><a href="javascript:void(0);">Apps</a></li>
									<li><a class="slide-item" href="cards.html">Cards</a></li>
									<li><a class="slide-item" href="darggablecards.html">Darggablecards</a></li>
									<li><a class="slide-item" href="rangeslider.html">Range-slider</a></li>
									<li><a class="slide-item" href="calendar.html">Calendar</a></li>
									<li><a class="slide-item" href="contacts.html">Contacts</a></li>
									<li><a class="slide-item" href="image-compare.html">Image-compare</a></li>
									<li><a class="slide-item" href="notification.html">Notification</a></li>
									<li><a class="slide-item" href="widget-notification.html">Widget-notification</a></li>
									<li><a class="slide-item" href="treeview.html">Treeview</a></li>
									<li><a class="slide-item" href="widgets.html">Widgets</a></li>
									<li class="sub-slide">
										<a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Mail</span><i class="sub-angle fe fe-chevron-down"></i></a>
										<ul class="sub-slide-menu">
											<li><a class="sub-side-menu__item" href="mail.html">Mail</a></li>
											<li><a class="sub-side-menu__item" href="mail-compose.html">Mail Compose</a></li>
											<li><a class="sub-side-menu__item" href="mail-read.html">Read-mail</a></li>
											<li><a class="sub-side-menu__item" href="mail-settings.html">mail-settings</a></li>
											<li><a class="sub-side-menu__item" href="chat.html">Chat</a></li>
										</ul>
									</li>
									<li class="sub-slide">
										<a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Maps</span><i class="sub-angle fe fe-chevron-down"></i></a>
										<ul class="sub-slide-menu">
											<li><a class="sub-side-menu__item" href="map-leaflet.html">Mapel Maps</a></li>
											<li><a class="sub-side-menu__item" href="map-vector.html">Vector Maps</a></li>
										</ul>
									</li>
									<li class="sub-slide">
										<a class="slide-item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">File-Manager</span><i class="sub-angle fe fe-chevron-down"></i></a>
										<ul class="sub-slide-menu">
											<li><a class="sub-side-menu__item" href="file-manager.html">File-Manager</a></li>
											<li><a class="sub-side-menu__item" href="file-manager-list.html">File-Manager-List</a></li>
											<li><a class="sub-side-menu__item" href="file-manager-details.html">File-Manager-Details</a></li>
											<li><a class="sub-side-menu__item" href="file-attachments.html">File-Attachments</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-bs-toggle="slide"   href="javascript:void(0);"><i class="side-menu__icon fe fe-aperture"></i><span class="side-menu__label">Custom Pages</span><i class="angle fe fe-chevron-down"></i></a>
								<ul class="slide-menu">
									<li><a class="slide-item" href="signin.html">Sign In</a></li>
									<li><a class="slide-item" href="signup.html">Sign Up</a></li>
									<li><a class="slide-item" href="forgot.html">Forgot Password</a></li>
									<li><a class="slide-item" href="reset.html">Reset Password</a></li>
									<li><a class="slide-item" href="lockscreen.html">Lockscreen</a></li>
									<li><a class="slide-item" href="underconstruction.html">UnderConstruction</a></li>
									<li><a class="slide-item" href="404.html">404 Error</a></li>
									<li><a class="slide-item" href="500.html">500 Error</a></li>
								</ul>
							</li>
						</ul>

						<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
					</div>
				</aside>
			</div>
			<!-- main-sidebar -->

		<!-- main-content -->
		<div class="main-content app-content">

			<!-- container -->
			<div class="main-container container-fluid">

				<!-- row -->
				 <div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="me-2">
										<i class="fa fa-calendar-alt text-primary tx-24"></i>
									</div>
									<div>
										<h6 class="mb-1 tx-18">Date</h6>
										<p class="mb-0 tx-13">yyyy/mm/dd</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row row-sm">
					
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="me-2">
										<i class="fa fa-users text-danger tx-24"></i>
									</div>
									<div>
										<h6 class="mb-1 tx-18">PB</h6>
										<p class="mb-0 tx-13">00</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="me-2">
										<i class="fa fa-file-alt text-warning tx-24"></i>
									</div>
									<div>
										<h6 class="mb-1 tx-18">PD</h6>
										<p class="mb-0 tx-13">00</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="me-2">
										<i class="fa fa-money-bill-wave text-success tx-24"></i>
									</div>
									<div>
										<h6 class="mb-1 tx-18">GM</h6>
										<p class="mb-0 tx-13">00</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>						
	<!-- end row -->
				
	<!-- row -->
				<div class="row row-sm">
					<div class="col-md-6">
						<div class="card mg-b-md-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Donut Chart
								</div>
								<p class="mg-b-20">Basic Charts Of Azira template.</p>
								<div class="morris-donut-wrapper-demo" id="morrisDonut1"></div>
							</div>
						</div>
					</div><!-- col-6 -->
					
				
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->

		<!--Sidebar-right-->
		<div class="sidebar sidebar-right sidebar-animate">
			<div class="panel panel-primary card mb-0">
				<div class="panel-body tabs-menu-body p-0 border-0">
					<ul class="Date-time">
						<li class="time">
							<h1 class="animated ">21:00</h1>
							<p class="animated ">Sat,October 1st 2029</p>
						</li>
					</ul>
					<div class="card-body latest-tasks">
						<h3 class="events-title"><span>Events For Week </span></h3>
						<div class="event">
							<div class="Day">Monday 20 Jan</div>
							<a   href="javascript:void(0);">No Events Today</a>
						</div>
						<div class="event">
							<div class="Day">Tuesday 21 Jan</div>
							<a   href="javascript:void(0);">No Events Today</a>
						</div>
						<div class="event">
							<div class="Day">Wednessday 22 Jan</div>
							<div class="tasks">
								<div class=" task-line primary">
									<a   href="javascript:void(0);" class="label">
										XML Import &amp; Export
									</a>
									<div class="time">
										12:00 PM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input checked="" type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
							<div class="tasks">
								<div class="task-line danger">
									<a   href="javascript:void(0);" class="label">
										Connect API to pages
									</a>
									<div class="time">
										08:00 AM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
						</div>
						<div class="event">
							<div class="Day">Thursday 23 Jan</div>
							<div class="tasks">
								<div class="task-line success">
									<a   href="javascript:void(0);" class="label">
										Create Wireframes
									</a>
									<div class="time">
										06:20 PM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
						</div>
						<div class="event">
							<div class="Day">Friday 24 Jan</div>
							<div class="tasks">
								<div class="task-line warning">
									<a   href="javascript:void(0);" class="label">
										Test new features in tablets
									</a>
									<div class="time">
										02: 00 PM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
							<div class="tasks">
								<div class="task-line teal">
									<a   href="javascript:void(0);" class="label">
										Design Evommerce
									</a>
									<div class="time">
										10: 00 PM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
							<div class="tasks mb-0">
								<div class="task-line purple">
									<a   href="javascript:void(0);" class="label">
										Fix Validation Issues
									</a>
									<div class="time">
										12: 00 AM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
						</div>
						<div class="d-flex pagination wd-100p">
							<a   href="javascript:void(0);">Previous</a>
							<a   href="javascript:void(0);" class="ms-auto">Next</a>
						</div>
					</div>
					<div class="card-body border-top border-bottom">
						<div class="row">
							<div class="col-4 text-center">
								<a class="" href=""><i class="dropdown-icon mdi  mdi-message-outline fs-20 m-0 leading-tight"></i></a>
								<div>Inbox</div>
							</div>
							<div class="col-4 text-center">
								<a class="" href=""><i class="dropdown-icon mdi mdi-tune fs-20 m-0 leading-tight"></i></a>
								<div>Settings</div>
							</div>
							<div class="col-4 text-center">
								<a class="" href=""><i class="dropdown-icon mdi mdi-logout-variant fs-20 m-0 leading-tight"></i></a>
								<div>Sign out</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Sidebar-right-->

		<!-- Footer opened -->
		<div class="main-footer ht-45">
			<div class="container-fluid pd-t-0-f ht-100p">
					<span> Copyright © 2022 <a   href="javascript:void(0);" class="text-primary">Azira</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a   href="javascript:void(0);"> Spruko </a> All rights reserved.</span>
			</div>
		</div>
		<!-- Footer closed -->

	</div>
		<!-- page closed -->


		<!--- Back-to-top --->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!--- JQuery min js --->
		<script src="../assets/plugins/jquery/jquery.min.js"></script>

		<!--- Datepicker js --->
		<script src="../assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>

		<!--- Bootstrap Bundle js --->
		<script src="../assets/plugins/bootstrap/popper.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--- Ionicons js --->
		<script src="../assets/plugins/ionicons/ionicons.js"></script>

		<!--- Moment js --->
		<script src="../assets/plugins/moment/moment.js"></script>

		<!--- JQuery sparkline js --->
		<script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

		<!--- Select2 js --->
		<script src="../assets/plugins/select2/js/select2.min.js"></script>

		<!--- P-scroll js --->
		<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="../assets/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!--- Eva-icons js --->
		<script src="../assets/js/eva-icons.min.js"></script>

		<!--- Internal Morris js --->
		<script src="../assets/plugins/raphael/raphael.min.js"></script>
		<script src="../assets/plugins/morris.js/morris.min.js"></script>

		<!--- Internal Chart Morris js --->
		<script src="../assets/js/chart.morris.js"></script>



		<!--- Sidebar js --->
		<script src="../assets/plugins/side-menu/sidemenu.js"></script>

		<!--- sticky js --->
		<script src="../assets/js/sticky.js"></script>

		<!--- Right-sidebar js --->
		<script src="../assets/plugins/sidebar/sidebar.js"></script>
		<script src="../assets/plugins/sidebar/sidebar-custom.js"></script>

		<!--- Index js --->
		<script src="../assets/js/script.js"></script>

		<!--themecolor js-->
		<script src="../assets/js/themecolor.js"></script>

		<!--swither-styles js-->
		<script src="../assets/js/swither-styles.js"></script>

		<!--- Custom js --->
		<script src="../assets/js/custom.js"></script>

	</body>
</html>