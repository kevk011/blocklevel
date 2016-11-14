<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="author" content="Kevin Kreuger">
	<meta name="resource-type" content="document">
	<meta name="description" content="Front-end test Blocklevel">
	<meta name="keywords" content="">
	
	<meta name="format-detection" content="telephone=no">

<!-- STYLESHEETS
============================================= -->

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	

	

	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-  
	scalable=no">
</head>

<body>	


	<div class="container-fluid bg">
		<div class="container-fluid home">
			<center><img src="images/logo.png"></center>
			<div class="col-md-3 navigatie">
				<ul>
					<li><a href="#" class="home1 nav-item" data-scroll="home">01 Home</a></li>
					<li><a href="#" class="about2 nav-item" data-scroll="about">02 About</a></li>
					<li><a href="#" class="work3 nav-item" data-scroll="work">03 Work</a></li>
					<li><a href="#" class="contact4 nav-item" data-scroll="contact">04 Contact</a></li>
				</ul>
				<p>2016 - all rights reserved</p>
			</div>
			<div class="col-md-6 content">
				<div class="col-md-6">
					<img src="images/wordmark.png">
				</div>
				<div class="col-md-6">
					<hr align="left">
					<h3>welcome to</h3>
					<h1>blocklevel</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Proin eleifend molestie porttitor. Donec sit amet nunc odio. Ut neque metus, semper non semper at, 					malesuada a nisl.</p>
				</div>
			</div>
			<div class="col-md-offset-2 col-md-1 social">
				<a href="#"><img src="images/facebook.png"></a>
				<a href="#"><img src="images/twitter.png"></a>
				<a href="#"><img src="images/instagram.png"></a>
			</div>
		</div>
	</div>
		
			
		<!-- ABOUT
		============================================= -->	
	
	<div class="container-fluid bg">	
		<div class="container-fluid about">
			<div class="col-md-offset-2 col-md-8 about-content">
				<h1>about<br>blocklevel
					<h3>let us tell you more</h3>
					<h2>about blocklevel</h2>
					<p>Phasellus id rutrum lorem. Nam in erat ex. Nam lacinia arcu non tortor lacinia maximus. Ut lobortis, 				tellus in laoreet tristique, urna neque cursus dui, eget scelerisque libero massa ac urna. Sed cursus sed massa nec posuere. Etiam nec nibh dictum, tempus diam eget, faucibus ipsum. Mauris auctor elit lacinia nulla auctor elementum.</p>
					<a href="#"><button class="btn knop">Read more</button></a>
				</h1>
			</div>
		</div>
	</div>
	
		
		
		<!-- WORK
		============================================= -->

	<div class="container-fluid bg">	
		<div class="container-fluid work">
			<div class="col-md-offset-3 col-md-6 work-content">
	
	
				<h3>work</h3>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="project">
								<h2>adidas runners</h2>
								<h6>UI / UX, Web design, FRONT-END, BACK-END</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod sapien nec justo 									hendrerit imperdiet. Nullam enim felis, volutpat at ante quis, pellentesque fermentum enim.</p>
								<center><a href=""><button class="btn knop2">View project</button></a></center>
							</div>
						</div>
						
						<div class="item">
							<div class="project">
								<h2>adidas runners</h2>
								<h6>UI / UX, Web design, FRONT-END, BACK-END</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod sapien nec justo 									hendrerit imperdiet. Nullam enim felis, volutpat at ante quis, pellentesque fermentum enim.</p>
								<center><a href=""><button class="btn knop2">View project</button></a></center>
							</div>					
						</div>
					</div>
				
				<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<img src="images/left.png">
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<img src="images/right.png">
						<span class="sr-only">Next</span>
					</a>
				</div>
			
				
			</div>
		</div>
	</div>

		
		
		<!-- CONTACT
		============================================= -->

	<div class="container-fluid bg">	
		<div class="container-fluid contact">
			<div class="col-md-offset-4 col-md-4 contact-content">
				<h3>contact</h3>
				<div id="form-messages"></div>				
					<form method="POST" action="contactform.php" class="form-horizontal js-form">			
						<div class="form-group"><input id="name" class="form-control js-name" name="contact_name" type="text" placeholder="Name"><a type="button" onclick="ClearFields();"><img class="remove-text" src="images/remove.png"></a></div>
						<div class="form-group"><input id="email" class="form-control js-email" name="contact_email" type="text" placeholder="Email address"></div>
						<p class="fail-message">You entered an invalid email address</p>				
						<div class="form-group"><textarea id="bericht" name="contact_message" class="form-control js-message" rows="4" placeholder="Message"></textarea></div>
			
		
				
						<center><div class="form-group"><input name="save" id="save" type="submit" class="btn knop1 js-send" value="Submit"></div></center>
					</form>
				</div>
			</div>
		</div>
	</div>
			
		<!-- THANK YOU
		============================================= -->

	<div class="container-fluid bg">	
		<div class="container-fluid exit">
			<div class="col-md-offset-4 col-md-4 exit-content">		
				<div class="exit-content-top">
					<center><font style="color:#b31b27">t</font><font style="color:#e64c2e">h</font><font style="color:#f2c230">a</font><font style="color:#30bfbf">n</font><font style="color:#3078bf">k</font></center>
				</div>
				<div class="exit-content-bottom">
					<center><font style="color:#203880">y</font><font style="color:#651a1e">o</font><font style="color:#8b3628">u</font></center>
				</div>
			</div>
		</div>
	</div>

	



<!-- SCRIPTS
============================================= -->
<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>

<script type="text/javascript" src="js/main.js"></script>
	
	

</body>



</html>





















