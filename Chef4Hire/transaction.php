
<html lang="en">
<head>
    <title>PHP - Paypal Payment Gateway Integration</title>
</head>
<body style="background:#E1E1E1">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/latest/css/bootstrap.css" />

<?php
	$paypalUrl='https://www.sandbox.paypal.com/cgi-bin/webscr';
	$paypalId='pjpatidar16-facilitator@gmail.com';
?>

<div class="container text-center">
	<br/>
	<h2><strong>PHP - Paypal Payment Gateway Integration</strong></h2>
	<br/>
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-3 col-md-offset-4 col-lg-3">

			<!-- PRICE ITEM -->
    			<form action="<?php echo $paypalUrl; ?>" method="post" name="frmPayPal1">
					<div class="panel price panel-red">
						    <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
						    <input type="hidden" name="cmd" value="_xclick">
						    <input type="hidden" name="item_name" value="It Solution Stuff">
						    <input type="hidden" name="item_number" value="2">
						    <input type="hidden" name="amount" value="100">
						    <input type="hidden" name="no_shipping" value="1">
						    <input type="hidden" name="currency_code" value="USD">
						    <input type="hidden" name="cancel_return" value="http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/index.html">
							<button class="btn btn-lg btn-block btn-danger" href="#">BUY NOW!</button>
						</div>
					</div>
    			</form>
			<!-- /PRICE ITEM -->

		</div>
	</div>
</div>
</body>
</html>
