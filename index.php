<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>ANTRIAN - MEDINA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- theme meta -->
  <meta name="theme-name" content="dot" />

	<!-- ** CSS Plugins Needed for the Project ** -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
	<!-- themefy-icon -->
	<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
	<!--Favicon-->
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<!-- Main Stylesheet -->
	<link href="assets/style.css" rel="stylesheet" media="screen" />
</head>

<body>
	<!-- header -->
	<header class="banner overlay bg-cover" data-background="images/banner.jpg">
		<nav class="navbar navbar-expand-md navbar-dark">
			<div class="container">
				
			</div>
		</nav>
		<!-- banner -->
		<div class="container section">
			<div class="row">
				<div class="col-lg-8 text-center mx-auto">
					<h1 class="text-white mb-3">Informasi Antrian MEDINA</h1>
					
				</div>
			</div>
		</div>
		<!-- /banner -->
	</header>
	<!-- /header -->

	<!-- topics -->
	<section class="section">
		<div class="container">
			<div class="row justify-content-center">
				<!-- topic-item -->
				<div class="col-lg-4 col-sm-6 mb-4">
					<a class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-credit-card icon text-primary d-block mb-4"></i>
						<h1 class="mb-3 mt-0" id="jumlah_antrian">0</h1>
						<p class="mb-0">Jumlah Antrian</p>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6 mb-4">
					<a class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-credit-card icon text-primary d-block mb-4"></i>
						<h1 class="mb-3 mt-0" id="antrian_now">0</h1>
						<p class="mb-0">Nomor Antrian</p>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- /topics -->


	<!-- ** JS Plugins Needed for the Project ** -->
	<!-- jquiry -->
	<script src="plugins/jquery/jquery-1.12.4.js"></script>
	<!-- Bootstrap JS -->
	<script src="plugins/bootstrap/bootstrap.min.js"></script>
	<!-- match-height JS -->
	<script src="plugins/match-height/jquery.matchHeight-min.js"></script>
	<!-- Main Script -->
	<script src="assets/script.js"></script>
	<script>
		
		function detail(){
			$.ajax({
				url: "data.php",
				type: 'POST',
				dataType: 'json',
				data: {},
				success: function (res,xhr) {
					$("#jumlah_antrian").html(res.jumlah_antrian);
					$("#antrian_now").html(res.antrian_now);
					
				},
				error: function (request, status, error) {
					
				},
				complete: function() {
					
				}
			});
		}
		setInterval(function(){
			detail();
		}, 2500);
		
		detail();
	</script>
</body>

</html>
