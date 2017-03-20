<?php
$paypalUrl='https://www.sandbox.paypal.com/cgi-bin/webscr';
$paypalId='pjpatidar16-facilitator@gmail.com';
?>

<html>
<head>
  <title>Shop Now</title>
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
<!-- Post -->
<div id="features-wrapper2">
  <section id="features" class="container">
    <header>
      <h2>Shop Now</h2>
    </header>
    <div class="row">
      <div class="4u 12u(mobile)">

        <!-- Feature -->
        <section>
          <a  class="image featured"><img src="images/AmericanFoodCover.jpg" width="265" height="230"alt="" /></a>
          <header>
            <h3>American Hamburger<h3>
            </header>
            <form action="<?php echo $paypalUrl; ?>"  method="post" >
              <div class="panel price panel-red">
                <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                <input type="hidden" name="cmd" value="_xclick">
                <input type="hidden" name="item_name" value="American Burger">
                <input type="hidden" name="item_number" value="1">
                <input type="hidden" name="amount" value="8.99">
                <input type="hidden" name="no_shipping" value="1">
                <input type="hidden" name="currency_code" value="USD">
                <input type="hidden" name="cancel_return" value="http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/index.html">
                <input type="hidden" name="return" value="http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/index.html">
                <button class="btn btn-lg btn-block btn-danger" href="#">EAT NOW!</button>
              </div>
            </form>
            </div>
            <div class="4u 12u(mobile)">

              <!-- Feature -->

                <a class="image featured"><img src="images/ChineseFoodCover.jpg" width="265" height="230"alt="" /></a>
                <header>
                  <h3>Chinese Noodles<h3>
                  </header>
                  <form action="<?php echo $paypalUrl; ?>"  method="post" >
                    <div class="panel price panel-red">
                      <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                      <input type="hidden" name="cmd" value="_xclick">
                      <input type="hidden" name="item_name" value="Chinese Noodles">
                      <input type="hidden" name="item_number" value="2">
                      <input type="hidden" name="amount" value="11.99">
                      <input type="hidden" name="no_shipping" value="1">
                      <input type="hidden" name="currency_code" value="USD">
                      <input type="hidden" name="cancel_return" value="http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/index.html">
                      <input type="hidden" name="return" value="http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/index.html">
                      <button class="btn btn-lg btn-block btn-danger" href="#">EAT NOW!</button>
                    </div>
                    </form>
                  </div>


            <div class="4u 12u(mobile)">

              <!-- Feature -->

                <a  class="image featured"><img src="images/IndianFoodCover.jpg" width="265" height="230"alt="" /></a>
                <header>
                  <h3>Authentic Samosa<h3>
                  </header>
                  <form action="<?php echo $paypalUrl; ?>"  method="post" >
                    <div class="panel price panel-red">
                      <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                      <input type="hidden" name="cmd" value="_xclick">
                      <input type="hidden" name="item_name" value="Samosa">
                      <input type="hidden" name="item_number" value="3">
                      <input type="hidden" name="amount" value="4.99">
                      <input type="hidden" name="no_shipping" value="1">
                      <input type="hidden" name="currency_code" value="USD">
                      <input type="hidden" name="cancel_return" value="http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/index.html">
                      <input type="hidden" name="return" value="http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/index.html">
                      <button class="btn btn-lg btn-block btn-danger" href="#">EAT NOW!</button>
                    </div>
                  </form>
                  </div>
                   </section>
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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/skel-viewport.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>
