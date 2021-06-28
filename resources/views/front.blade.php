<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Restaurant</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('public/images/favicon.ico')}}"type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('public/images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('public/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('public/css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<!-- Start header -->
<header class="top-navbar">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="{{URL::to('/')}}">
				<img src="{{asset('public/images/logo.png')}}" alt="" />
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbars-rs-food">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a class="nav-link" href="{{URL::to('/')}}">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="{{URL::to('/menu')}}">Menu</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
						<div class="dropdown-menu" aria-labelledby="dropdown-a">
							<a class="dropdown-item" href="{{URL::to('/reservation')}}">Reservation</a>
							<a class="dropdown-item" href="{{URL::to('/chef')}}">Chef</a>
						
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
						<div class="dropdown-menu" aria-labelledby="dropdown-a">
							<a class="dropdown-item" href="{{URL::to('/blog')}}">blog</a>
							<a class="dropdown-item" href="{{URL::to('/blog-single')}}">blog Single</a>
						</div>
					</li>
					<li class="nav-item"><a class="nav-link" href="{{URL::to('/contact')}}">Contact</a></li>
					@if(Auth::guest())
					<li class="nav-item"><a class="nav-link" href="{{URL::to('/login')}}">Login</a></li>
					@else
					<li class="nav-item"><a class="nav-link" href="{{URL::to('/login')}}">{{Auth::user()->name}}</a></li>
					<li class="nav-item"><a class="nav-link" href="{{URL::to('/logoutpage')}}">Logout</a></li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
</header>
<!-- End header -->

<body>
	

            @yield('content')

    	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>Integer cursus scelerisque ipsum id efficitur. Donec a dui fringilla, gravida lorem ac, semper magna. Aenean rhoncus ac lectus a interdum. Vivamus semper posuere dui, at ornare turpis ultrices sit amet. Nulla cursus lorem ut nisi porta, ac eleifend arcu ultrices.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday: </span>Closed</p>
					<p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">Ipsum Street, Lorem Tower, MO, Columbia, 508000</p>
					<p class="lead"><a href="#">+01 2000 800 9999</a></p>
					<p><a href="#"> info@admin.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2018 <a href="#">Yamifood Restaurant</a> Design By : 
					<a href="https://html.design/">html design</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="{{asset('public/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('public/js/popper.min.js')}}"></script>
	<script src="{{('public/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
	<script src="{{asset('public/js/jquery.superslides.min.js')}}"></script>
	<script src="{{asset('public/js/images-loded.min.js')}}"></script>
	<script src="{{asset('public/js/isotope.min.js')}}"></script>
	<script src="{{asset('public/js/baguetteBox.min.js')}}"></script>
	<script src="{{asset('public/js/form-validator.min.js')}}"></script>
    <script src="{{asset('public/js/contact-form-script.js')}}"></script>
    <script src="{{('public/js/custom.js')}}"></script>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" 
	src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0&appId=231349251862307&autoLogAppEvents=1" 
	nonce="Ic9ZhzUG"></script>
</body>
</html>