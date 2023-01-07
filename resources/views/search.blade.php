<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie Shop</title>
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
                        <li class="theme-btn"><a href="/comments"><i class="icofont icofont-ticket"></i> Comment Section</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<br><br><br>

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
            <div class="col-md-9">
                <p class="d-none">
                    {{$ans = $genre[0]}}
                    {{$ans2 = $ans['video']}}
                    {{$ans2}}
                </p>

                <video controls crossorigin playsinline poster="../../../cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" width="320" height="240" id="player">
                    <!-- Video files -->
                    {{--						<source src="/videos/{{$movie->video}}" type="video/mp4" size="576">--}}
                    <source src="/videos/{{$ans2}}" type="video/mp4">
                {{--						<source src="/videos/{{$movie->video}}" type="video/mp4" size="1080">--}}
                {{--						<source src="/videos/{{$movie->video}}" type="video/mp4" size="1440">--}}

                </video>

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
