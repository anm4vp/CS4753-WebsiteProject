<?php
session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == TRUE){
  $_SESSION = array();
  session_destroy();
}
header("Location: http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/index.php");
?>
