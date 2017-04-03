<?php
$mailpath = 'PHPmailer';
$path = get_include_path();
set_include_path($path . PATH_SEPARATOR . $mailpath);
require('PHPmailer/PHPMailerAutoload.php');

	# Connet to DB
	$db = new mysqli('localhost', 'root', '', 'chef4hire');
	      if ($db->connect_error):
	         die ("Could not connect to db: " . $db->connect_error);
	      endif;

	$username = $_POST["User"];
	$firstname = $_POST['FirstName'];
	$lastname = $_POST['LastName'];
	$email = $_POST['Email'];
	$address = $_POST['Address'];
	$city = $_POST['City'];
	$state = $_POST['State'];
	$zipcode = $_POST['ZipCode'];
	$password = $_POST['Password'];


	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->Host = "smtp.gmail.com";                             // Enable SMTP authentication
	$mail->Username = 'pjpatidar16@gmail.com';                 // SMTP username
	$mail->Password = 'basketball4life';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom('pjpatidar16@gmail.com');
	$mail->addAddress($email);     // Add a recipient


	$mail->Subject = 'Chef-4-Hire Confirmation Email';
	$mail->Body    = 'Thank you for signing up with Chef-4-Hire';


	$alreadythere = 0;

	$query = "select username from Users";
	$result = $db->query($query) or die ("Invalid selection " . $db->error);
	$rows = $result->num_rows;
	for($i = 0; $i < $rows; $i++){
		if ($result->fetch_array()['username'] == $username):
			$alreadythere = 1;
		endif;
	}

	if ($alreadythere == 0 && $mail->send()):
		$query = "insert into Users values (NULL, '$username', '$firstname', '$lastname', '$email', '$address', '$city', '$state', '$zipcode' , '$password')";
		$db->query($query) or die ("Invalid insert " . $db->error);
		header("Location: http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/shopping.php");
	else:
		header("Location: http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/Duplicate.html");
	endif;
?>
