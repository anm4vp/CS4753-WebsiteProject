<?php
define('DB_NAME', 'chef4hire');
$con= mysql_connect('localhost', 'root', '') or die("Failed to connect to MySQL: " . mysql_error());

$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

$ID = $_POST['username'];
$Password = $_POST['password'];

function SignIn() {
  if(empty($_POST['username']))
  {
    echo "<script>
        window.location.href='http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/login.html';
          alert('Username empty');
  </script>";

  }
  if(empty($_POST['password']))
  {
    echo "<script>
        window.location.href='http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/login.html';
          alert('Password empty');
  </script>";
  }
  session_start(); //starting the session for user profile page
  $_SESSION['login'] = true;
  $query = mysql_query("SELECT * FROM users where username = '$_POST[username]' AND Password = '$_POST[password]'") or die(mysql_error());
  $row = mysql_fetch_array($query) or die(mysql_error());

  if(!empty($row['username']) AND !empty($row['Password'])) {
    $_SESSION['username'] = $row['Password'];
    header("Location: http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/shopping.php");
  }

}

if(isset($_POST['submit']))
{
  SignIn();
}

 ?>
