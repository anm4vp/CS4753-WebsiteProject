<?php
    /*
        * Home Page - has Sample Buyer credentials, Camera (Product) Details and Instructiosn for using the code sample
    */
    include('apiCallsData.php');
    include('header.php');
    include('paypalConfig.php');

    //setting the environment for Checkout script
    if(SANDBOX_FLAG) {
        $environment = SANDBOX_ENV;
    } else {
        $environment = LIVE_ENV;
    }
?>

<!DOCTYPE HTML>
<!--
Strongly Typed by HTML5 UP
html5up.net | @ajlkn
Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
	<title>Thank You</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>
<body class="homepage">
	<div id="page-wrapper">

		<!-- Header -->
		<div id="header-wrapper">
			<div id="header" class="container">

				<!-- Logo -->
				<h1 id="logo"><a href="index.html">Chef-4-Hire</a></h1>
			</br>
			<img src="images/Picture1transparent.jpg" width="125" height="95"></img>
		</br>
		<h3>Never be Hungry Again!</h3>

		<!-- Nav -->
		<nav id="nav">
			<ul>
				<li><a class="icon fa-home" href="index.html"><span>Home</span></a></li>
				<li><a class="icon fa-users" href="about.html"><span>About Us</span></a></li>
				<li><a class="icon fa-pencil" href='signup.html'><span>Sign up</span></a></li>
			</ul>
		</nav>

	</div>
</div>
<!-- Main -->
<div id="main-wrapper">
	<div id="main" class="container">
		<div id="content">

			<!-- Post -->
			<article class="box post">
				<header>
					<h2>Thank you for signing up with Chef-4-Hire!</h2>
				</header>
				<span class="image featured"><img src="images/image9.jpg" alt="" /></span>
				<div id="checkoutContainer"></div>
				</article>
			</div>
		</div>
	</div>
	<div id="footer-wrapper">
		<div id="footer" class="container">
			<header>
				<h2>Questions or comments? <strong>Get in touch:</strong></h2>
			</header>
			<div class="row">
				<div class="6u 12u(mobile)">
					<section>
						<form method="post" action="#">
							<div class="row 50%">
								<div class="6u 12u(mobile)">
									<input name="name" placeholder="Name" type="text" />
								</div>
								<div class="6u 12u(mobile)">
									<input name="email" placeholder="Email" type="text" />
								</div>
							</div>
							<div class="row 50%">
								<div class="12u">
									<textarea name="message" placeholder="Message"></textarea>
								</div>
							</div>
							<div class="row 50%">
								<div class="12u">
									<a href="#" class="form-button-submit button icon fa-envelope">Send Message</a>
								</div>
							</div>
						</form>
					</section>
				</div>
				<div class="6u 12u(mobile)">
					<section>

						<div class="row">
							<div class="6u 12u(mobile)">
								<ul class="icons">
									<li class="icon fa-home">
											<a href="index.html">Home</a>
									</li>
									<li class="icon fa-users">
										<a href="about.html">About us</a>
									</li>
									<li class="icon fa-pencil">
										<a href="signup.html">Sign Up</a>
									</li>
								</ul>
							</div>
							<div class="6u 12u(mobile)">
								<ul class="icons">
									<li class="icon fa-twitter">
										<a href="#">@CHEF4HIRE</a>
									</li>
									<li class="icon fa-instagram">
										<a href="#">instagram.com/CHEF4HIRE</a>
									</li>

									<li class="icon fa-facebook">
										<a href="#">facebook.com/CHEF4HIRE</a>
									</li>
								</ul>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</br>
		<div id="copyright" class="container">
			<ul class="links">
				<li>&copy; Chef-4-Hire 2017. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
			</ul>
		</div>
	</div>
</div>




<!-- Scripts -->

<script type="text/javascript">
     window.paypalCheckoutReady = function () {
         paypal.checkout.setup('E9GCL5FX4TU2C', {
             container: 'checkoutContainer', //{String|HTMLElement|Array} where you want the PayPal button to reside
             environment: 'sandbox' //or 'production' depending on your environment
         });
     };
</script>
<script src="//www.paypalobjects.com/api/checkout.js" async></script>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/skel-viewport.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>
