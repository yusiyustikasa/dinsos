<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		 <link rel="icon" href="https://data.tasikmalayakota.go.id/wp-content/uploads/2018/05/Logo_Kota_Tasikmalaya.png" type="image/icon type">
		<title>Dinas Sosial Kota Tasikmalaya</title>

		<!-- Google font -->
		<link href="{{asset('webmag/https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600')}}" rel="stylesheet"> 

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset('webmag/css/bootstrap.min.css')}}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset('webmag/css/font-awesome.min.css')}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('webmag/css/style.css')}}"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>

		<!-- Header -->
		<header id="header">
			<!-- Nav -->
			<div id="nav " >
				<!-- Main Nav -->
				<div id="nav-fixed" >
					<div class="container ">
						<!-- logo -->
					<div class="nav-logo">
							<a href="{{'/'}}" class="logo"><img src="{{asset('LOGO.png')}}" alt="" ></a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<ul class="nav-menu nav navbar-nav">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><a href="{{url('/profile')}}">Profile</a></li>
							<li class="cat-1"><a href="{{url('/layanan/index')}}">Layanan</a></li>
							<li class="cat-2"><a href="{{url('/gallery')}}">Galery</a></li>
							<li class="cat-3"><a href="http://pkh.dinsos.tasikmalayakota.go.id">PKH</a></li>
							<li class="cat-4"><a href="category.html">Visualisasi</a></li>
						</ul>
						<!-- /nav -->

						<!-- search & aside toggle -->
						<div class="nav-btns">
							<button class="search-btn"><i class="fa fa-search"></i></button>
							<div class="search-form">
								<input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
								<button class="search-close"><i class="fa fa-times"></i></button>
							</div>
						</div>
						<!-- /search & aside toggle -->
					</div>
				</div>
				<!-- /Main Nav -->

				<!-- Aside Nav -->
					<!-- /nav -->

					<!-- widget posts -->
					
				<!-- Aside Nav -->
			</div>
			<!-- /Nav -->
		</header>
		<!-- /Header -->

		<!-- section -->

		<!-- /section -->
		<!-- section -->
@include('layouts.content')

		<!-- section -->
				

		<!-- Footer -->
		<footer id="footer">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-5">
						<div class="footer-widget">
							<div class="footer-logo">
								<a href="index.html" class="logo"><img src="./img/logo.png" alt=""></a>
							</div>
							<ul class="footer-nav">
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Advertisement</a></li>
							</ul>
							<div class="footer-copyright">
								<span>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">About Us</h3>
									<ul class="footer-links">
										<li><a href="about.html">About Us</a></li>
										<li><a href="#">Join Us</a></li>
										<li><a href="contact.html">Contacts</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">Catagories</h3>
									<ul class="footer-links">
										<li><a href="category.html">Web Design</a></li>
										<li><a href="category.html">JavaScript</a></li>
										<li><a href="category.html">Css</a></li>
										<li><a href="category.html">Jquery</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="footer-widget">
							<h3 class="footer-title">Join our Newsletter</h3>
							<div class="footer-newsletter">
								<form>
									<input class="input" type="email" name="newsletter" placeholder="Enter your email">
									<button class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
								</form>
							</div>
							<ul class="footer-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</footer>
		<!-- /Footer -->

		<!-- jQuery Plugins -->
		<script src="{{asset('webmag/js/jquery.min.js')}}"></script>
		<script src="{{asset('webmag/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('webmag/js/main.js')}}"></script>

	</body>
</html>
