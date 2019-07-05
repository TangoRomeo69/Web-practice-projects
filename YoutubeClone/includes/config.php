<?php
ob_start();//turns on output buffer and only outputs when the full script is executed

date_default_timezone_set("Asia/Dhaka");//sets default timezone

try{
  $con = new PDO("mysql:dbname=VideoTube;host=localhost", "root", "276914049");//connect to db
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e){
  echo "Connection failed: ". $e->getMessage();
}
?>
