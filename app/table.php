<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<meta name="description" content="Azira -  Admin Panel HTML Dashboard Template">
	<meta name="author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="sales dashboard, admin dashboard, bootstrap 4 admin template, html admin template, admin panel design, admin panel design, bootstrap 4 dashboard, admin panel template, html dashboard template, bootstrap admin panel, sales dashboard design, best sales dashboards, sales performance dashboard, html5 template, dashboard template">

	<!-- Title -->
	<title> PT.PLN </title>

	<!--- Favicon --->
	<link rel="icon" href="../assets/img/brand/favicon.ico" type="image/x-icon" />

	<!-- Bootstrap css -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" id="style" />

	<!--- Icons css --->
	<link href="../assets/css/icons.css" rel="stylesheet">

	<!--- Style css --->
	<link href="../assets/css/style.css" rel="stylesheet">
	<link href="../assets/css/plugins.css" rel="stylesheet">

	<!--- Animations css --->
	<link href="../assets/css/animate.css" rel="stylesheet">

</head>

<body class="main-body app sidebar-mini ltr bg-light">

	<!-- Loader -->
	<!-- <div id="global-loader">
			<img src="../assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
		</div> -->
	<!-- /Loader -->

	<!-- page -->
	<div class="page custom-index">

		<!-- main-header -->
		<div class="main-header side-header sticky nav nav-item bg-teal">
			<div class="container-fluid main-container">
				<div class="main-header-left">
					<div class="app-sidebar__toggle mobile-toggle" data-bs-toggle="sidebar">
						<a class="open-toggle" href="javascript:void(0);"><i class="header-icons" data-eva="menu-outline"></i></a>
						<a class="close-toggle" href="javascript:void(0);"><i class="header-icons" data-eva="close-outline"></i></a>
					</div>
					<div class="responsive-logo">
						<a href="index.php" class="header-logo"><img src="../assets/img/1.2.png" class="logo-11"></a>
						<a href="index.php" class="header-logo"><img src="../assets/img/1.2.png" class="logo-1"></a>
					</div>
					<ul class="header-megamenu-dropdown  nav">
					

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
							<li class="dropdown nav-item main-layout">
								<a class="new theme-layout nav-link-bg layout-setting">
									<span class="dark-layout"><i class="fe fe-moon"></i></span>
									<span class="light-layout"><i class="fe fe-sun"></i></span>
								</a>
							</li>
							<div class="nav nav-item  navbar-nav-right mg-lg-s-auto">
								<div class="nav-item full-screen fullscreen-button">
									<a class="new nav-link full-screen-link" href="javascript:void(0);"><i class="fe fe-maximize"></i></span></a>
								</div>
								<div class="dropdown  nav-item main-header-message ">
									<a class="new nav-link" href="javascript:void(0);"><i class="fe fe-mail"></i><span class=" pulse-danger"></span></a>
									<div class="dropdown-menu">
										<div class="menu-header-content bg-primary-gradient text-start d-flex">
											<div class="">
												<h6 class="menu-header-title text-white mb-0">5 new Messages</h6>
											</div>
											<div class="my-auto mg-s-auto">
												<a class="badge bg-pill bg-warning float-end" href="javascript:void(0);">Mark All Read</a>
											</div>
										</div>

									</div>
								</div>
								<div class="dropdown nav-item main-header-notification">
									<a class="new nav-link" href="javascript:void(0);"><i class="fe fe-bell"></i><span class=" pulse"></span></a>
									<div class="dropdown-menu">
										<div class="menu-header-content bg-primary-gradient text-start d-flex">
											<div class="">
												<h6 class="menu-header-title text-white mb-0">7 new Notifications</h6>
											</div>
											<div class="my-auto ms-auto">
												<a class="badge bg-pill bg-warning float-end" href="javascript:void(0);">Mark All Read</a>
											</div>
										</div>
									</div>
								</div>
								<!-- PROFIL 1 -->
								<div class="dropdown main-profile-menu nav nav-item nav-link">

									<a class="profile-user d-flex" href=""><img src="../assets/img/1.3.png" alt="user-img" class="rounded-circle mCS_img_loaded"><span></span></a>

									<div class="dropdown-menu">
										<div class="main-header-profile header-img">
											<div class="main-img-user"><img alt="" src="../assets/img/1.3.png"></div>
											<h6>KURNIAWAN</h6><span>Premium Member</span>
										</div>
										<a class="dropdown-item" href="profil.html"><i class="far fa-user"></i> My Profile</a>
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
			<div class="main-sidebar-header active  text-center">
					<a class="desktop-logo logo-light active d-flex  " href="index.html">
				<img src="../assets/img/1.2.png" class="ht-50 main-logo" alt="logo" style="bottom: 6px;">
						
					<h3 class="tx-bold tx-black tx-20">ULP SUBANG</h3>					
					
					</a>					
				<p class="tx-xthin pos-absolute" style=" left: 100px; top:40px;" >Daftung</p>
					<a class="logo-icon mobile-logo icon-light active" href="index.html"><img src="../assets/img/1.1.png" alt="logo"></a>
				</div>
				<div class="main-sidemenu">
					<div class="main-sidebar-loggedin">
						<div class="app-sidebar__user">
								<ul class="side-menu ">
						<li class="slide">
							<a class="side-menu__item col-lg-20 bg-info rounded tx-white" href="index.php"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">Dashboard</span></a>
						</li>
						<li class="slide ">
							<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon far fa-file-alt"></i><span class="side-menu__label">TRANSAKSI</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
								<li class="side-menu__label1"><a href="javascript:void(0);">TRANSAKSI</a></li>
								<li><a class="slide-item" href="table.php">PENDAFTAR</a></li>
								<li><a class="slide-item" href="form-requid.php">--</a></li>
								<li><a class="slide-item" href="form-validation.php">Form Validation</a></li>
							</ul>
						</li>
					</ul>
					</div>
				
					<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
							<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
						</svg></div>
				
					<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
							<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
						</svg></div>
				</div>
			</aside>
		</div>
		<!-- main-sidebar -->

		<!-- main-body -->
		<div class="main-body main-content bg-light app-content">

			<!-- container -->
			<div class="main-container container-fluid">

				<!-- breadcrumb -->
				<div class="breadcrumb-header">
					<div>
						<div>		
						<a href="form-daftung.php" class="card bg-info rounded col-lg-9">+ Daftar Baru</a><br>
						</div>
						<?php if (isset($_GET['status'])) : ?>
							<p>
								<?php
								if ($_GET['status'] == 'sukses') {
									echo "Pendaftaran siswa baru berhasil!";
								} else {
									echo "Pendaftaran gagal!";
								}
								?>
							</p>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<!-- Form merupakan sintaks HTML yang berisi kumpulan kolom isian data, misal:
			form login yang berisi isian nama pengguna dan kata sandi.
			form pendaftaran yang berisi isian nama, jenis kelamin, tanggal lahir, alamat, surel, dan lain-lain. -->
			<!-- ROW -->
			<div class="row justify-content-center">
				<div class="col-lg-11 ">
					<div class="card">
						<div class="card-body">
							<div class="main-content-label">
								FORM HANDLING
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="table-responsive ">
										<table class="table mg-b-0 text-md-wrap border-bottom" border="2">
											<thead>
												<tr class="">
													<th class="wd-15p border-bottom-0">NO</th>
													<th class="wd-15p border-bottom-0">TGL_MOHON </th>
													<th class="wd-15p border-bottom-0">IDPEL</th>
													<th class="wd-15p border-bottom-0">NO_AGENDA</th>
													<th class="wd-15p border-bottom-0">NAMA </th>
													<th class="wd-15p border-bottom-0">ALAMAT</th>												
													<th class="wd-15p border-bottom-0">JENIS_TRANSAKSI </th>
													<th class="wd-15p border-bottom-0">ASAL_MOHON </th>									
													<th class="wd-15p border-bottom-0">KRITERIA </th>
													<th class="wd-15p border-bottom-0">PKT_SLO </th>
													<th class="wd-15p border-bottom-0">PLTS_ATP </th>
												</tr>
											</thead>
											<Tbody class="card-body">

												<?php
												$sql = "SELECT * FROM  daftung ";
												$query = mysqli_query($koneksi, $sql);

												while ($data = mysqli_fetch_array($query)) {
													echo "<tr>";
													echo "<td>" . $data['id'] . "</td>";
													echo "<td>" . $data['TGL_MOHON'] . "</td>";
													echo "<td>" . $data['IDPEL'] . "</td>";
													echo "<td>" . $data['NO_AGENDA'] . "</td>";
													echo "<td>" . $data['NAMA'] . "</td>";
													echo "<td>" . $data['ALAMAT'] . "</td>";
													echo "<td>" . $data['JENIS_TRANSAKSI'] . "</td>";										
													echo "<td>" . $data['ASAL_MOHON'] . "</td>";									
													echo "<td>" . $data['ALSAN_KRITERIA_TMP'] . "</td>";
													echo "<td>" . $data['PKT_SLO'] . "</td>";
													echo "<td>" . $data['PLTS_ATAP'] . "</td>";
													echo "</tr>";
												}
												?>

											</Tbody>
										</table>
									</div>
								</div>

								<p>Total: <?php echo mysqli_num_rows($query) ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	<!--- Back-to-top --->
	<a href="#top" id="back-to-top"><i class="ti-angle-double-up"></i></a>

	<!--- JQuery min js --->
	<script src="../assets/plugins/jquery/jquery.min.js"></script>

	<!--- Bootstrap Bundle js --->
	<script src="../assets/plugins/bootstrap/popper.min.js"></script>
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!--- Ionicons js --->
	<script src="../assets/plugins/ionicons/ionicons.js"></script>

	<!--- Moment js --->
	<script src="../assets/plugins/moment/moment.js"></script>

	<!--- Perfect-scrollbar js --->
	<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

	<!--- Select2 js --->
	<script src="../assets/plugins/select2/js/select2.min.js"></script>

	<!--- JQuery sparkline js --->
	<script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

	<!--- Sidebar js --->
	<script src="../assets/plugins/side-menu/sidemenu.js"></script>

	<!--- sticky js --->
	<script src="../assets/js/sticky.js"></script>

	<!--- Right-sidebar js --->
	<script src="../assets/plugins/sidebar/sidebar.js"></script>
	<script src="../assets/plugins/sidebar/sidebar-custom.js"></script>

	<!--- Eva-icons js --->
	<script src="../assets/js/eva-icons.min.js"></script>

	<!--- Internal Form-layouts js --->
	<script src="../assets/js/form-layouts.js"></script>

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