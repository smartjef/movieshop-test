<!DOCTYPE HTML>
<html lang="zxx">

<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>MovieShop</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
		<!-- Slick nav CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/slicknav.min.css" media="all" />
		<!-- Iconfont CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/icofont.css" media="all" />
		<!-- Owl carousel CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
		<!-- Popup CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
		<!-- Main style CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
		<!-- Responsive CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Page loader -->
	    <div id="preloader"></div>
		<!-- header section start -->
		<header class="header">
			<div class="container">
				<div class="header-area">
					<div class="logo">
						<a href="index-2.html">MOVIES</a>
					</div>
					<div class="header-right">
						<form action="/search" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="text" placeholder="Search Movie" name="search">
							<button type="submit"  name="submit"><i class="icofont icofont-search"></i></button>
						</form>
						<ul>
							<li><a href="#">Welcome</a></li>
						</ul>
					</div>
					<div class="menu-area">
						<div class="responsive-menu"></div>
					    <div class="mainmenu">
                            <ul id="primary-menu">
                                <li class="theme-btn"><a href="/home"><i class="icofont icofont-ticket"></i> Home</a></li>
                                <li class="theme-btn"><a href="/faq"><i class="icofont icofont-ticket"></i> Movie Description</a></li>
                               </ul>
					    </div>
					</div>
				</div>
			</div>
		</header>

        <br><br><br>
		<!-- portfolio section start -->
		<section class="portfolio-area pt-60">
			<div class="container">
				<div class="row flexbox-center">
					<div class="col-lg-6 text-center text-lg-left">
					    <div class="section-title">
							<h1><i class="icofont icofont-movie"></i> Spotlight This Month</h1>
						</div>
					</div>
					<div class="col-lg-6 text-center text-lg-right">
					    <div class="portfolio-menu">
							<ul class="d-none">
								<li data-filter="*" class="active">Latest</li>
								<li data-filter=".soon">Comming Soon</li>
								<li data-filter=".top">Top Rated</li>
								<li data-filter=".released">Recently Released</li>
							</ul>
						</div>
					</div>
				</div>
				<hr />
				<div class="row">
					<div class="col-lg-12">
						<div class="row portfolio-item">
                            @foreach($movies->all() as $movie)
							<div class="col-md-4 col-sm-6 soon released">
								<div class="single-portfolio">
									<div class="single-portfolio-img">
                                        <img src="coverPhotos/{{$movie->picture}}" alt="{{$movie->title}}" style="max-height: 400px; min-height: 400px; max-width: 300px; min-width: 300px">
										<a href="/videos/{{$movie->video}}"  class="popup-youtube">
											<i class="icofont icofont-ui-play"></i>
										</a>
									</div>
									<div class="portfolio-content">
										<h2>{{$movie->title}}</h2>
										<div class="review">
											<div class="author-review">
                                                {{$movie->rating}}
												<i class="icofont icofont-star"></i>
											</div>
											<h4>Age Rating: {{$movie->agerating}}+</h4>
										</div>
									</div>
								</div>
							</div>
                            @endforeach
						</div>
					</div>

				</div>
			</div>
		</section><!-- portfolio section end -->
		<!-- video section start -->
		<section class="video ptb-90">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					    <div class="section-title pb-20">
							<h1><i class="icofont icofont-film"></i> Trailers & Videos</h1>
						</div>
					</div>
				</div>
				<hr />
				<div class="row">
                    <div class="col-lg-12">
                        @foreach($movies->all() as $movie)
						<div class="video-area">
                            <img src="coverPhotos/{{$movie->picture}}" alt="{{$movie->title}}" style="min-width: 800px; max-width: 800px; min-height: 600px; max-height: 600px">
							<a href="/videos/{{$movie->video}}" class="popup-youtube">
								<i class="icofont icofont-ui-play"></i>
							</a>
							<div class="video-text">
								<h2>{{$movie->title}}</h2>
								<div class="review">
									<div class="author-review">
                                        {{$movie->rating}}
										<i class="icofont icofont-star"></i>
									</div>
									<h4>{{$movie->genre}}</h4> <br>
                                    <a href="/rate/{{$movie->id}}"><button class="btn btn-secondary">Comment this movie</button></a>

								</div>
							</div>
						</div>
                        @endforeach
                    </div>
				</div>
			</div>
		</section><!-- video section end -->


		<!-- jquery main JS -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- Slick nav JS -->
		<script src="assets/js/jquery.slicknav.min.js"></script>
		<!-- owl carousel JS -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- Popup JS -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Isotope JS -->
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<!-- main JS -->
		<script src="assets/js/main.js"></script>
	</body>

</html>
