<!--Configuration file for page attributes-->

<?php
//turns on output buffer and only outputs when the full script is executed
ob_start();
//set default timezone
date_default_timezone_set("Asia/Dhaka");//sets default timezone
//check for connection to DB
try{
  //create the connection variable
  $con = new PDO("mysql:dbname=VideoTube;host=localhost", "root", "276914049");
  //set PDO to return errors if any
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
//display error if DB not connected
catch (PDOException $e){
  echo "Connection failed: ". $e->getMessage();
}
?>
