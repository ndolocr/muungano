<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width initial-scale=1.0" charset="UTF-8">
	<title>Muungano Theatres</title>
	

	<link rel="stylesheet" href="assets/font-awesome/css/all.css">
	<link rel="stylesheet" href="assets/font-awesome/css/all.min.css">
	

	<link rel="stylesheet" href="assets/css/styles.css" type="text/css">
</head>
<body>
	<!-- BEGIN HEADER -->
	<header class="header">
		
		<!-- BEGIN HEADER IMAGE SECTION-->
		<div class="header__img"> 
			<img src="assets/img/homepage/1584683134.jpg" alt="Header Background Image"> 
		</div>
		<!-- END HEADER IMAGE SECTION-->
		
		<!-- BEGIN HEADER COVER SECTION-->
		<div class="header__cover"> </div>
		<!-- END HEADER COVER SECTION-->					
		
		<!-- BEGIN TEXTBOX CLASS -->
		<div class="text-box">
			<h1 class="heading-primary">	
				<span class="heading-primary-main"> Muungano</span>	
				<span class="heading-primary-sub"> our home of entertainment </span>
			</h1>

			<a href="{{ route('karibu') }}" class="btn btn-white"> Welcome </a>
		</div>
		<!-- END TEXTBOX CLASS -->

	</header>
	<!-- END HEADER -->

	<!-- BEGIN JAVASCRIPT FILES -->
	<script src="{{ URL::asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
	<script  src="{{ URL::asset('assets/js/jquery.slideshow.min.js') }}" type="text/javascript"></script>
	<!-- END JAVASCRIPT FILES -->

	<!-- BEGIN JAVASCRPTI SCRIPT -->
	<script type="text/javascript">
		$(document).ready(function() {
			$('.slideshow').slideshow({
				timeout: 5000,
				fadetime: 2000,
				type: 'sequence'
			});
	        });
	</script>
	<!-- END JAVASCRIPT SCRIPT -->
</body>
</html>