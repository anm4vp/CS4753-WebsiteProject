<!DOCTYPE html>
<html>
 <head>
  <title>Set Up DB</title>
 </head>
 <body>
 <?php
      # Connect to the DB
      $db = new mysqli('localhost', 'root', '', 'chef4hire');
      if ($db->connect_error):
         die ("Could not connect to db: " . $db->connect_error);
      endif;

      # Drop tables in case they already have infromation stored

      $db->query("drop table Users"); 

      # Create the tables
      $result = $db->query(
                "CREATE TABLE Users (user_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, username varchar(30), firstname varchar(30), lastname varchar(30), email varchar(30), address varchar(30), city varchar(30), state varchar(5), zipcode INT)") or die ("Invalid: " . $db->error);
      
      ##### Code we can possibliy use later #####

      /*$word = file("words5.txt");
      //print_r($items);

      # Split each element from the items array and inster into appropriate tables

      # Fill Items tables
      foreach ($word as $wordstring)
      {
          $wordstring = rtrim($wordstring);
          $query = "insert into Words values (\"$wordstring\", NULL)";
          $db->query($query) or die ("Invalid insert " . $db->error);
      }*/

      ##### #####

      # Go to login page
      header("Location: http://localhost:8082/CS4753-WebsiteProject/Chef4Hire/index.html");
?>
 </body>
</html>