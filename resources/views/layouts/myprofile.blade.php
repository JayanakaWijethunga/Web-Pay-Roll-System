<!DOCTYPE html>
<html lang="en">
<head>
    @section('title')
    @show

	<meta charset="UTF-8">
	<meta name="description" content="Civic - CV Resume">
	<meta name="keywords" content="resume, civic, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">



	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">


	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/flaticon.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.css"/>
	<link rel="stylesheet" href="../css/magnific-popup.css"/>
	<link rel="stylesheet" href="../css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	
	<header class="header-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					
				</div>
				<div class="col-md-8 text-md-right header-buttons">
                @section('header')
                @show
				</div>
			</div>
		</div>
	</header>

	<section class="hero-section spad">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">
						<div class="col-lg-6">
							
                            @section('general_info')
                            @show
							</div>
                            <br><br>
                            <div class="hero-info">
                            @section('office_info')
                            @show
							</div>

						</div>
						<div class="col-lg-6">
							<figure class="hero-image">
                                @section('changes')
                                @show
							</figure>
							<br><br>
                            <div class="hero-info">
                            @section('finance_info')
                             @show
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	

	
	<script src="../js/jquery-2.1.4.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/magnific-popup.min.js"></script>
	<script src="../js/circle-progress.min.js"></script>
	<script src="../js/main.js"></script>
</body>
</html>