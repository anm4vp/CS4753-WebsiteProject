<?php

	# Connet to DB
	$db = new mysqli('localhost', 'root', 'secret', 'chef4hire');
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
	$alreadythere = 0;

	$query = "select username from Users";
	$result = $db->query($query) or die ("Invalid selection " . $db->error);
	$rows = $result->num_rows;
	for($i = 0; $i < $rows; $i++){
		if ($result->fetch_array()['username'] == $username):
			$alreadythere = 1;
		endif;
	}
	
	if ($alreadythere == 0):
		$query = "insert into Users values (NULL, '$firstname', '$lastname', '$username', '$email', '$address', '$city', '$state', '$zipcode')";
		$db->query($query) or die ("Invalid insert " . $db->error);
		header("Location: http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/addUser.html");
	else:
		header("Location: http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/Duplicate.html");
	endif;
?>