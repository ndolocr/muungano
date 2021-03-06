<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width initial-scale=1.0" charset="UTF-8">
		<title>Muungano Theatre</title>
		

		<link rel="stylesheet" href="{{ asset('assets/font-awesome/css/all.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/font-awesome/css/all.min.css') }}">
		

		<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('assets/css/other_styles.css') }}" type="text/css">
	</head>
	<body>
		
		<!-- BEGIN CONTAINER -->
		<div class="container-fluid">
			<!-- BEGIN NAVIGATION BAR -->
			<div class="row sehemu-ya-juu">
				
				<!-- BEGIN LOGO -->
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 logo-yetu">
					<img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
				</div>
				<!-- END LOGO -->

				<!-- BEGIN MENU -->
				<div class="col-xs-8 col-sm-8 col-md-10 col-lg-10">
					<!-- BEGIN NAVBAR -->
					<nav class="navbar navbar-default">
						<div class="container-fluid">
					
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsemenu" aria-expanded="false">
									<span class="sr-only">Toggle Navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							
							<div class="collapse navbar-collapse" id="collapsemenu">
								<ul class="nav navbar-nav">
									<li class="active"><a href=""> <i class="fa fa-film"></i> Movies </a></li>
									<li><a href=""> <i class="fa fa-tv"></i> Series </a></li>
									<li><a href=""> <i class="fa fa-baby"></i> Animation </a></li>
								</ul>
							</div>

						</div>
						
					</nav>
					<!-- END NAVBAR -->
				</div>
				<!-- END MENU -->
			</div>
			<!-- END NAVIGATION BAR -->

		</div>
		<!-- END CONTAINER -->

		<!-- BEGIN CONTAINER -->
		<div class="container-fluid">	
			<div class="row">				
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 movie-cover-image">
					<img src="{{ asset('storage/assets/img/movies/'. $movie_details->feature_image) }}" alt="Movie Feature Image">
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 movie-information">
					{{ $movie_details->title }}
				</div>
				<div class="clear-float"></div>
			</div>
		</div>
		<!-- END CONTAINER -->


		<!-- BEGIN JAVASCRIPT LINKS -->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/bootstrap/js/bootstrap.js') }}"></script>
		<!-- END JAVASCRIPT LINKS -->
	</body>
</html>