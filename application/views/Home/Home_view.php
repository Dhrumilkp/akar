<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="<?php echo $_SESSION['csrf'] ?>">
	<!-- ===============================================-->
	<!--    Document Title-->
	<!-- ===============================================-->
	<title>Admin Dashboard</title>

	<!-- ===============================================-->
	<!--    Favicons-->
	<!-- ===============================================-->
	<link rel="shortcut icon" type="image/x-icon" href="theme/image/favicon.png">
	<link rel="manifest" href="assets/img/favicons/manifest.json">
	<meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
	<meta name="theme-color" content="#ffffff">

	<!-- ===============================================-->
	<!--    Stylesheets-->
	<!-- ===============================================-->
	<script src="assets/js/config.navbar-vertical.min.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
	<link href="assets/lib/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet">
	<link href="assets/lib/datatables-bs4/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link href="assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.css" rel="stylesheet">
	<link href="assets/lib/leaflet/leaflet.css" rel="stylesheet">
	<link href="assets/lib/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
	<link href="assets/lib/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
	<link href="assets/css/theme-dark.min.css" rel="stylesheet">
</head>

<body>
	<!-- ===============================================-->
	<!--    Main Content-->
	<!-- ===============================================-->
	<main class="main" id="top">

		<div class="container" data-layout="container">
			<nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand-lg" style="width: 1480px;">
				<button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button"
					data-toggle="collapse" data-target="#navbarStandard" aria-controls="navbarStandard"
					aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
							class="toggle-line"></span></span></button>
				<a class="navbar-brand mr-1 mr-sm-3" href="../index.html">
					<div class="d-flex align-items-center"><img class="mr-2"
							src="theme/image/favicon.png" alt="" width="40"><span
							class="text-sans-serif">Aakar</span></div>
				</a>
				<div class="collapse navbar-collapse" id="navbarStandard">
					<ul class="navbar-nav">
						<li class="nav-item dropdown dropdown-on-hover">
                            <a class="nav-link" id="navbarDropdownHome" href="#" role="button">Home</a>
						</li>
						<li class="nav-item dropdown dropdown-on-hover">
                            <a class="nav-link" aria-haspopup="true" aria-expanded="true">About Publication</a>
						</li>
						<li class="nav-item dropdown dropdown-on-hover"><a class="nav-link"
								id="navbarDropdownDocumentation" href="#">Shop</a>
						</li>
						<li class="nav-item dropdown dropdown-on-hover">
                            <a class="nav-link" id="navbarDropdownComponents" href="#">Contact</a>
						</li>
					</ul>
				</div>
				<ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
					<li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser"
							href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<div class="avatar avatar-xl">
								<img class="rounded-circle" src="assets/img/avatar.jpg" alt="">
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
							<div class="bg-white rounded-soft py-2">
								<a class="dropdown-item font-weight-bold text-warning" href="#!"><svg
										class="svg-inline--fa fa-crown fa-w-20 mr-1" aria-hidden="true"
										focusable="false" data-prefix="fas" data-icon="crown" role="img"
										xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
										<path fill="currentColor"
											d="M528 448H112c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h416c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm64-320c-26.5 0-48 21.5-48 48 0 7.1 1.6 13.7 4.4 19.8L476 239.2c-15.4 9.2-35.3 4-44.2-11.6L350.3 85C361 76.2 368 63 368 48c0-26.5-21.5-48-48-48s-48 21.5-48 48c0 15 7 28.2 17.7 37l-81.5 142.6c-8.9 15.6-28.9 20.8-44.2 11.6l-72.3-43.4c2.7-6 4.4-12.7 4.4-19.8 0-26.5-21.5-48-48-48S0 149.5 0 176s21.5 48 48 48c2.6 0 5.2-.4 7.7-.8L128 416h384l72.3-192.8c2.5.4 5.1.8 7.7.8 26.5 0 48-21.5 48-48s-21.5-48-48-48z">
										</path>
									</svg>
									<span>GoPro</span></a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo base_url(); ?>logout">Logout</a>
							</div>
						</div>
					</li>
				</ul>
			</nav>
			<div class="content">

				<footer>
					<div class="row no-gutters justify-content-between fs--1 mt-4 mb-3">
						<div class="col-12 col-sm-auto text-center">
							<p class="mb-0 text-600">Dynamic Dashboards By Workoscope Inc, DE<span
									class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2020 &copy; <a
									href="https://themewagon.com">Workoscope Inc SME Initiative</a></p>
						</div>
						<div class="col-12 col-sm-auto text-center">
							<p class="mb-0 text-600">v2.8.0</p>
						</div>
					</div>
				</footer>
			</div>
		</div>
	</main><!-- ===============================================-->
	<!--    End of Main Content-->
	<!-- ===============================================-->

	<script>
		var isFluid = JSON.parse(localStorage.getItem('isFluid'));
		if (isFluid) {
			var container = document.querySelector('[data-layout]');
			container.classList.remove('container');
			container.classList.add('container-fluid');
		}

	</script>

	<!-- ===============================================-->
	<!--    JavaScripts-->
	<!-- ===============================================-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/lib/@fortawesome/all.min.js"></script>
	<script src="assets/lib/stickyfilljs/stickyfill.min.js"></script>
	<script src="assets/lib/sticky-kit/sticky-kit.min.js"></script>
	<script src="assets/lib/is_js/is.min.js"></script>
	<script src="assets/lib/lodash/lodash.min.js"></script>
	<script src="assets/lib/perfect-scrollbar/perfect-scrollbar.js"></script>
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7CPoppins:100,200,300,400,500,600,700,800,900&display=swap"
		rel="stylesheet">
	<script src="assets/lib/chart.js/Chart.min.js"></script>
	<script src="assets/lib/datatables/js/jquery.dataTables.min.js"></script>
	<script src="assets/lib/datatables-bs4/dataTables.bootstrap4.min.js"></script>
	<script src="assets/lib/datatables.net-responsive/dataTables.responsive.js"></script>
	<script src="assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
	<script src="assets/lib/leaflet/leaflet.js"></script>
	<script src="assets/lib/leaflet.markercluster/leaflet.markercluster.js"></script>
	<script src="assets/lib/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
	<script src="assets/js/theme.min.js"></script>
</body>

</html>
