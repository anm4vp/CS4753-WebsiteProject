<?php
define('DB_NAME', 'chef4hire');
$con= mysql_connect('localhost', 'root', '') or die("Failed to connect to MySQL: " . mysql_error());

$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

session_start();

if(empty($_POST['username']) || empty($_POST['password'])){
  header("Location: http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/error.php");
} else {
  $id = rtrim($_POST['username']);
  $pass = rtrim($_POST['password']);

  $result = mysql_query("SELECT * FROM users where username = '$id' AND Password = '$pass'") or die(mysql_error());
  $num_rows = mysql_num_rows($result);


  if($num_rows != 0) {
    $row = mysql_fetch_array($result) or die(mysql_error());
    if(strcmp($id, $row['username']) == 0 && strcmp($pass, $row['password']) == 0){
      $_SESSION['username'] = $id;
      $_SESSION['loggedin'] = TRUE;
      header("Location: http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/shopping.php");

    } else {
      header("Location: http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/error.php");
    }
  } else {
    header("Location: http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/error.php");
  }
}

?>
