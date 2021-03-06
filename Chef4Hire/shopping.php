<?php
$paypalUrl='https://www.sandbox.paypal.com/cgi-bin/webscr';
$paypalId='pjpatidar16-facilitator@gmail.com';
define('DB_NAME', 'chef4hire');
$con= mysql_connect('localhost', 'root', '') or die("Failed to connect to MySQL: " . mysql_error());

$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

session_start();
if(isset($_SESSION['loggedin'])){
  if ($_SESSION['loggedin'] == TRUE){
    $name = $_SESSION['username'];
  }
} else {
  // if not logged in, can't shop -> so redirect
  header("Location: http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/login.html");
}
// $ID = rtrim($_POST['username']);
// $Password = rtrim($_POST['password']);
//
// function SignIn() {
//   if(empty($_POST['username']))
//   {
//     echo "<script>
//     window.location.href='http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/login.html';
//     alert('Username empty');
//     </script>";
//
//   }
//   if(empty($_POST['password']))
//   {
//     echo "<script>
//     window.location.href='http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/login.html';
//     alert('Password empty');
//     </script>";
//   }
//   session_start(); //starting the session for user profile page
//   $_SESSION['login'] = true;
//   $query = mysql_query("SELECT * FROM users where username = '$_POST[username]' AND Password = '$_POST[password]'") or die(mysql_error());
//   $row = mysql_fetch_array($query) or die(mysql_error());
//
//   if(!empty($row['username']) AND !empty($row['Password'])) {
//     $_SESSION['username'] = $row['Password'];
//     header("Location: http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/shopping.php");
//   }
//
// }
//
// if(isset($_POST['submit']))
// {
//   //SignIn();
//   session_start();
//   if(empty($_POST['username'])){
//     header("Location: http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/login.html");
//   } else {
//     $_SESSION['username'] = $_POST['username'];
//     $_SESSION['loggedin'] = TRUE;
//     $name = $_SESSION['username'];
//   }
//
// }

?>


<!DOCTYPE HTML>
<!--
Strongly Typed by HTML5 UP
html5up.net | @ajlkn
Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
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
        <?php
        if(isset($_SESSION['loggedin'])){
          if ($_SESSION['loggedin'] == TRUE){
    				echo "<li><a class=\"icon fa-home\" href='index.php'><span>Home</span></a></li>";
    				echo "<li><a class=\"icon fa-users\" href='about.php'><span>About Us</span></a></li>";
            echo "<li><a class=\"icon fa-spoon\" href='shopping.php'><span>Shop Now</span></a></li>";
    				echo "<li><a class=\"icon fa-sign-in\" href='logout.php'><span>Log Out</span></a></li>";
          }
        } else {
          echo "<li><a class=\"icon fa-home\" href='index.php'><span>Home</span></a></li>";
  				echo "<li><a class=\"icon fa-users\" href='about.php'><span>About Us</span></a></li>";
  				echo "<li><a class=\"icon fa-pencil\" href='signup.php'><span>Sign up</span></a></li>";
  				echo "<li><a class=\"icon fa-sign-in\" href='login.html'><span>Log in</span></a></li>";
        }
        ?>
      </ul>
    </nav>

  </div>
</div>
<!-- Post -->
<div id="features-wrapper2">
  <section id="features" class="container">
    <header>
      <div><h2>Welcome, <?php echo $name; ?>!</h2></div>
    </br>
    <h2>Select Your Meal Below</h2>
  </br>
  <h3>American</h3>
</header>
<div class="row">
  <div class="4u 12u(mobile)">

    <!-- Feature -->
    <section>
      <a  class="image featured"><img src="images/AmericanFoodCover.jpg" width="265" height="230"alt="" /></a>
      <header>
        <h3>Hamburger and Fries<h3>
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

        <a class="image featured"><img src="images/pizza.jpg" width="265" height="230"alt="" /></a>
        <header>
          <h3>Pizza<h3>
          </header>
          <form action="<?php echo $paypalUrl; ?>"  method="post" >
            <div class="panel price panel-red">
              <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
              <input type="hidden" name="cmd" value="_xclick">
              <input type="hidden" name="item_name" value="Pizza">
              <input type="hidden" name="item_number" value="2">
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

          <a  class="image featured"><img src="images/MacNCheese.jpg" width="265" height="230"alt="" /></a>
          <header>
            <h3>Macaroni and Cheese<h3>
            </header>
            <form action="<?php echo $paypalUrl; ?>"  method="post" >
              <div class="panel price panel-red">
                <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                <input type="hidden" name="cmd" value="_xclick">
                <input type="hidden" name="item_name" value="MacNCheese">
                <input type="hidden" name="item_number" value="3">
                <input type="hidden" name="amount" value="7.99">
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
    <div id="features-wrapper2">
      <section id="features" class="container">
        <header>
          <h3>Indian</h3>
        </header>
        <div class="row">
          <div class="4u 12u(mobile)">

            <!-- Feature -->
            <section>
              <a  class="image featured"><img src="images/curry.jpg" width="265" height="230"alt="" /></a>
              <header>
                <h3>Curry<h3>
                </header>
                <form action="<?php echo $paypalUrl; ?>"  method="post" >
                  <div class="panel price panel-red">
                    <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="item_name" value="Curry">
                    <input type="hidden" name="item_number" value="4">
                    <input type="hidden" name="amount" value="5.99">
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

                <a class="image featured"><img src="images/naan.jpg" width="265" height="230"alt="" /></a>
                <header>
                  <h3>Naan<h3>
                  </header>
                  <form action="<?php echo $paypalUrl; ?>"  method="post" >
                    <div class="panel price panel-red">
                      <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                      <input type="hidden" name="cmd" value="_xclick">
                      <input type="hidden" name="item_name" value="Naan">
                      <input type="hidden" name="item_number" value="5">
                      <input type="hidden" name="amount" value="3.99">
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
                        <input type="hidden" name="item_number" value="6">
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
            <div id="features-wrapper2">
              <section id="features" class="container">
                <header>
                  <h3>West African</h3>
                </header>
                <div class="row">
                  <div class="4u 12u(mobile)">

                    <!-- Feature -->
                    <section>
                      <a  class="image featured"><img src="images/fufu .jpg" width="265" height="230"alt="" /></a>
                      <header>
                        <h3>Fufu and Soup<h3>
                        </header>
                        <form action="<?php echo $paypalUrl; ?>"  method="post" >
                          <div class="panel price panel-red">
                            <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="item_name" value="Fufu">
                            <input type="hidden" name="item_number" value="7">
                            <input type="hidden" name="amount" value="9.99">
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

                        <a class="image featured"><img src="images/plantains.jpg" width="265" height="230"alt="" /></a>
                        <header>
                          <h3>Fried Plantains<h3>
                          </header>
                          <form action="<?php echo $paypalUrl; ?>"  method="post" >
                            <div class="panel price panel-red">
                              <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                              <input type="hidden" name="cmd" value="_xclick">
                              <input type="hidden" name="item_name" value="Plantain">
                              <input type="hidden" name="item_number" value="8">
                              <input type="hidden" name="amount" value="4.99">
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

                          <a  class="image featured"><img src="images/WestAfricanCover.jpg" width="265" height="230"alt="" /></a>
                          <header>
                            <h3>Jollof Rice<h3>
                            </header>
                            <form action="<?php echo $paypalUrl; ?>"  method="post" >
                              <div class="panel price panel-red">
                                <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                                <input type="hidden" name="cmd" value="_xclick">
                                <input type="hidden" name="item_name" value="Jollof">
                                <input type="hidden" name="item_number" value="9">
                                <input type="hidden" name="amount" value="10.99">
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
                    <div id="features-wrapper2">
                      <section id="features" class="container">
                        <header>
                          <h3>Italian</h3>
                        </header>
                        <div class="row">
                          <div class="4u 12u(mobile)">

                            <!-- Feature -->
                            <section>
                              <a  class="image featured"><img src="images/ItalianFoodCover.jpg" width="265" height="230"alt="" /></a>
                              <header>
                                <h3>Penne Alla Vodka<h3>
                                </header>
                                <form action="<?php echo $paypalUrl; ?>"  method="post" >
                                  <div class="panel price panel-red">
                                    <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                                    <input type="hidden" name="cmd" value="_xclick">
                                    <input type="hidden" name="item_name" value="Penne">
                                    <input type="hidden" name="item_number" value="10">
                                    <input type="hidden" name="amount" value="10.99">
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

                                <a class="image featured"><img src="images/Bruschetta.jpg" width="265" height="230"alt="" /></a>
                                <header>
                                  <h3>Bruschetta<h3>
                                  </header>
                                  <form action="<?php echo $paypalUrl; ?>"  method="post" >
                                    <div class="panel price panel-red">
                                      <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                                      <input type="hidden" name="cmd" value="_xclick">
                                      <input type="hidden" name="item_name" value="Bruschetta">
                                      <input type="hidden" name="item_number" value="11">
                                      <input type="hidden" name="amount" value="5.99">
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

                                  <a  class="image featured"><img src="images/spagetti.jpg" width="265" height="230"alt="" /></a>
                                  <header>
                                    <h3>Spagetti and Meatballs<h3>
                                    </header>
                                    <form action="<?php echo $paypalUrl; ?>"  method="post" >
                                      <div class="panel price panel-red">
                                        <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                                        <input type="hidden" name="cmd" value="_xclick">
                                        <input type="hidden" name="item_name" value="Spagetti">
                                        <input type="hidden" name="item_number" value="12">
                                        <input type="hidden" name="amount" value="9.99">
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
                            <div id="features-wrapper2">
                              <section id="features" class="container">
                                <header>
                                  <h3>Mexican</h3>
                                </header>
                                <div class="row">
                                  <div class="4u 12u(mobile)">

                                    <!-- Feature -->
                                    <section>
                                      <a  class="image featured"><img src="images/AuthenticMexicanCover.jpg" width="265" height="230"alt="" /></a>
                                      <header>
                                        <h3>Tacos<h3>
                                        </header>
                                        <form action="<?php echo $paypalUrl; ?>"  method="post" >
                                          <div class="panel price panel-red">
                                            <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                                            <input type="hidden" name="cmd" value="_xclick">
                                            <input type="hidden" name="item_name" value="tacos">
                                            <input type="hidden" name="item_number" value="13">
                                            <input type="hidden" name="amount" value="7.99">
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

                                        <a class="image featured"><img src="images/Quesadilla.jpg" width="265" height="230"alt="" /></a>
                                        <header>
                                          <h3>Chicken Quesadilla<h3>
                                          </header>
                                          <form action="<?php echo $paypalUrl; ?>"  method="post" >
                                            <div class="panel price panel-red">
                                              <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                                              <input type="hidden" name="cmd" value="_xclick">
                                              <input type="hidden" name="item_name" value="Quesadilla">
                                              <input type="hidden" name="item_number" value="14">
                                              <input type="hidden" name="amount" value="7.99">
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

                                          <a  class="image featured"><img src="images/fajitas.jpg" width="265" height="230"alt="" /></a>
                                          <header>
                                            <h3>Beef Fajitas <h3>
                                            </header>
                                            <form action="<?php echo $paypalUrl; ?>"  method="post" >
                                              <div class="panel price panel-red">
                                                <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                                                <input type="hidden" name="cmd" value="_xclick">
                                                <input type="hidden" name="item_name" value="fajitas">
                                                <input type="hidden" name="item_number" value="15">
                                                <input type="hidden" name="amount" value="12.99">
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
                                    <div id="features-wrapper2">
                                      <section id="features" class="container">
                                        <header>
                                          <h3>Ethopian</h3>
                                        </header>
                                        <div class="row">
                                          <div class="4u 12u(mobile)">

                                            <!-- Feature -->
                                            <section>
                                              <a  class="image featured"><img src="images/EthopianFoodCover.jpg" width="265" height="230"alt="" /></a>
                                              <header>
                                                <h3>Injera and Stew<h3>
                                                </header>
                                                <form action="<?php echo $paypalUrl; ?>"  method="post" >
                                                  <div class="panel price panel-red">
                                                    <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                                                    <input type="hidden" name="cmd" value="_xclick">
                                                    <input type="hidden" name="item_name" value="Injera">
                                                    <input type="hidden" name="item_number" value="16">
                                                    <input type="hidden" name="amount" value="12.99">
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

                                                <a class="image featured"><img src="images/gurage.jpg" width="265" height="230"alt="" /></a>
                                                <header>
                                                  <h3>Gurage<h3>
                                                  </header>
                                                  <form action="<?php echo $paypalUrl; ?>"  method="post" >
                                                    <div class="panel price panel-red">
                                                      <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                                                      <input type="hidden" name="cmd" value="_xclick">
                                                      <input type="hidden" name="item_name" value="Gurage">
                                                      <input type="hidden" name="item_number" value="17">
                                                      <input type="hidden" name="amount" value="6.99">
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

                                                  <a  class="image featured"><img src="images/fitfit.jpg" width="265" height="230"alt="" /></a>
                                                  <header>
                                                    <h3>Fit Fit <h3>
                                                    </header>
                                                    <form action="<?php echo $paypalUrl; ?>"  method="post" >
                                                      <div class="panel price panel-red">
                                                        <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                                                        <input type="hidden" name="cmd" value="_xclick">
                                                        <input type="hidden" name="item_name" value="Fitfit">
                                                        <input type="hidden" name="item_number" value="18">
                                                        <input type="hidden" name="amount" value="6.99">
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
                                            <div id="features-wrapper2">
                                              <section id="features" class="container">
                                                <header>
                                                  <h3>Thai</h3>
                                                </header>
                                                <div class="row">
                                                  <div class="4u 12u(mobile)">

                                                    <!-- Feature -->
                                                    <section>
                                                      <a  class="image featured"><img src="images/ThaiFoodCover.jpg" width="265" height="230"alt="" /></a>
                                                      <header>
                                                        <h3>Drunken Noodles<h3>
                                                        </header>
                                                        <form action="<?php echo $paypalUrl; ?>"  method="post" >
                                                          <div class="panel price panel-red">
                                                            <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                                                            <input type="hidden" name="cmd" value="_xclick">
                                                            <input type="hidden" name="item_name" value="DrunkenNoodles">
                                                            <input type="hidden" name="item_number" value="19">
                                                            <input type="hidden" name="amount" value="10.99">
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

                                                        <a class="image featured"><img src="images/tomyam.jpg" width="265" height="230"alt="" /></a>
                                                        <header>
                                                          <h3>Tom Yam<h3>
                                                          </header>
                                                          <form action="<?php echo $paypalUrl; ?>"  method="post" >
                                                            <div class="panel price panel-red">
                                                              <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                                                              <input type="hidden" name="cmd" value="_xclick">
                                                              <input type="hidden" name="item_name" value="tomyam">
                                                              <input type="hidden" name="item_number" value="20">
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

                                                          <a  class="image featured"><img src="images/basilchicken.jpg" width="265" height="230"alt="" /></a>
                                                          <header>
                                                            <h3>Basil Chicken<h3>
                                                            </header>
                                                            <form action="<?php echo $paypalUrl; ?>"  method="post" >
                                                              <div class="panel price panel-red">
                                                                <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                                                                <input type="hidden" name="cmd" value="_xclick">
                                                                <input type="hidden" name="item_name" value="BasilChicken">
                                                                <input type="hidden" name="item_number" value="21">
                                                                <input type="hidden" name="amount" value="10.99">
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
                                                    <div id="features-wrapper2">
                                                      <section id="features" class="container">
                                                        <header>
                                                          <h3>Mediterranean</h3>
                                                        </header>
                                                        <div class="row">
                                                          <div class="4u 12u(mobile)">

                                                            <!-- Feature -->
                                                            <section>
                                                              <a  class="image featured"><img src="images/Greek-MedFoodCover.jpg" width="265" height="230"alt="" /></a>
                                                              <header>
                                                                <h3>Skewers<h3>
                                                                </header>
                                                                <form action="<?php echo $paypalUrl; ?>"  method="post" >
                                                                  <div class="panel price panel-red">
                                                                    <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                                                                    <input type="hidden" name="cmd" value="_xclick">
                                                                    <input type="hidden" name="item_name" value="skewers">
                                                                    <input type="hidden" name="item_number" value="22">
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

                                                                <a class="image featured"><img src="images/gyro.jpg" width="265" height="230"alt="" /></a>
                                                                <header>
                                                                  <h3>Gyro<h3>
                                                                  </header>
                                                                  <form action="<?php echo $paypalUrl; ?>"  method="post" >
                                                                    <div class="panel price panel-red">
                                                                      <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                                                                      <input type="hidden" name="cmd" value="_xclick">
                                                                      <input type="hidden" name="item_name" value="Gyro">
                                                                      <input type="hidden" name="item_number" value="23">
                                                                      <input type="hidden" name="amount" value="6.99">
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

                                                                  <a  class="image featured"><img src="images/falafel.jpg" width="265" height="230"alt="" /></a>
                                                                  <header>
                                                                    <h3>Falafel<h3>
                                                                    </header>
                                                                    <form action="<?php echo $paypalUrl; ?>"  method="post" >
                                                                      <div class="panel price panel-red">
                                                                        <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                                                                        <input type="hidden" name="cmd" value="_xclick">
                                                                        <input type="hidden" name="item_name" value="falafel">
                                                                        <input type="hidden" name="item_number" value="24">
                                                                        <input type="hidden" name="amount" value="5.99">
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
                                                            <div id="features-wrapper2">
                                                              <section id="features" class="container">
                                                                <header>
                                                                  <h3>Chinese</h3>
                                                                </header>
                                                                <div class="row">
                                                                  <div class="4u 12u(mobile)">

                                                                    <!-- Feature -->
                                                                    <section>
                                                                      <a  class="image featured"><img src="images/ChineseFoodCover.jpg" width="265" height="230"alt="" /></a>
                                                                      <header>
                                                                        <h3>Lo Mein<h3>
                                                                        </header>
                                                                        <form action="<?php echo $paypalUrl; ?>"  method="post" >
                                                                          <div class="panel price panel-red">
                                                                            <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                                                                            <input type="hidden" name="cmd" value="_xclick">
                                                                            <input type="hidden" name="item_name" value="Noodles">
                                                                            <input type="hidden" name="item_number" value="25">
                                                                            <input type="hidden" name="amount" value="7.99">
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

                                                                        <a class="image featured"><img src="images/KungPao.jpg" width="265" height="230"alt="" /></a>
                                                                        <header>
                                                                          <h3>Kung Pao Chicken<h3>
                                                                          </header>
                                                                          <form action="<?php echo $paypalUrl; ?>"  method="post" >
                                                                            <div class="panel price panel-red">
                                                                              <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                                                                              <input type="hidden" name="cmd" value="_xclick">
                                                                              <input type="hidden" name="item_name" value="KungPao">
                                                                              <input type="hidden" name="item_number" value="26">
                                                                              <input type="hidden" name="amount" value="9.99">
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

                                                                          <a  class="image featured"><img src="images/dumplings.jpg" width="265" height="230"alt="" /></a>
                                                                          <header>
                                                                            <h3>Dumplings<h3>
                                                                            </header>
                                                                            <form action="<?php echo $paypalUrl; ?>"  method="post" >
                                                                              <div class="panel price panel-red">
                                                                                <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                                                                                <input type="hidden" name="cmd" value="_xclick">
                                                                                <input type="hidden" name="item_name" value="dumplings">
                                                                                <input type="hidden" name="item_number" value="27">
                                                                                <input type="hidden" name="amount" value="7.99">
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
                                                                                      <a href="index.php">Home</a>
                                                                                    </li>
                                                                                    <li class="icon fa-users">
                                                                                      <a href="about.php">About us</a>
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
