<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Warisan Budaya | Indonesia</title>
    {{HTML::style('assets/main/css/bootstrap.min.css')}}    
    {{HTML::style('assets/main/css/font-awesome.min.css')}}    
    {{HTML::style('assets/main/css/main.css')}}	
	{{HTML::style('assets/main/css/animate.css')}}	
	{{HTML::style('assets/main/css/responsive.css')}}

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="assets/main/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/main/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/main/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/main/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/main/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header" role="banner">		
		<div class="main-nav">
			<div class="container">
				<div class="header-top">
					<div class="pull-right social-icons">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>
				</div>     
		        <div class="row">	        		
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand" href="index.html">
		                	<img class="img-responsive" src="assets/main/images/logo.png" alt="logo">
		                </a>                    
		            </div>
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">                 
		                    <li class="scroll active"><a href="#home">Home</a></li>
		                    <li class="scroll"><a href="#explore">COMING SOON</a></li>                                              
		                </ul>
		            </div>
		        </div>
	        </div>
        </div>                    
    </header>
    <!--/#header--> 

    <section id="home">	
		<div id="main-slider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-slider" data-slide-to="0" class="active"></li>
				<li data-target="#main-slider" data-slide-to="1"></li>
				<li data-target="#main-slider" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="img-responsive" src="assets/main/images/logo-slider1.jpg" alt="slider">						
					<div class="carousel-caption">
						<center>
						<h2>COMING SOON</h2>
						<h4>WARISAN BUDAYA INDONESIA</h4>
						</center>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="assets/main/images/logo-slider2.jpg" alt="slider">	
					<div class="carousel-caption">
						<center>
						<h2>COMING SOON</h2>
						<h4>WARISAN BUDAYA INDONESIA</h4>
						</center>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="assets/main/images/logo-slider3.jpg" alt="slider">	
					<div class="carousel-caption">
						<center>
						<h2>COMING SOON</h2>
						<h4>WARISAN BUDAYA INDONESIA</h4>
						</center>
					</div>
				</div>				
			</div>
		</div>    	
    </section>
	<!--/#home-->

	<section id="explore">
		<div class="container">
			<div class="row">
				<div class="watch">
					<img class="img-responsive" src="assets/main/images/watch.png" alt="">
				</div>				
				<div class="col-md-4 col-md-offset-2 col-sm-5">
					<h2>SEDANG DALAM PENGEMBANGAN</h2>
				</div>				
				<div class="col-sm-7 col-md-6">					
					<ul id="countdown">
						<li>					
							<span class="days time-font">00</span>
							<p>days </p>
						</li>
						<li>
							<span class="hours time-font">00</span>
							<p class="">hours </p>
						</li>
						<li>
							<span class="minutes time-font">00</span>
							<p class="">minutes</p>
						</li>
						<li>
							<span class="seconds time-font">00</span>
							<p class="">seconds</p>
						</li>				
					</ul>
				</div>
				<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
			</div>
		</div>
	</section><!--/#explore-->

    <footer id="footer">
        <div class="container">
            <div class="text-center">
                <p> Warisan Budaya Indonesia | AICT Indonesia &copy; 2015</a></p>                
            </div>
        </div>
    </footer>
    <!--/#footer-->
    {{HTML::script('assets/main/js/jquery.js')}}
    {{HTML::script('assets/main/js/bootstrap.min.js')}}
    {{HTML::script('assets/main/http://maps.google.com/maps/api/js?sensor=true')}}
    {{HTML::script('assets/main/js/gmaps.js')}}
    {{HTML::script('assets/main/js/smoothscroll.js')}}
    {{HTML::script('assets/main/js/smoothscroll.js')}}
    {{HTML::script('assets/main/js/jquery.parallax.js')}}
    {{HTML::script('assets/main/js/coundown-timer.js')}}
    {{HTML::script('assets/main/js/jquery.scrollTo.js')}}
    {{HTML::script('assets/main/js/jquery.nav.js')}}
    {{HTML::script('assets/main/js/main.js')}} 
</body>
</html>