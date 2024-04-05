<?php
$db_servername="127.0.0.1";
$db_username="root";
$db_password="";
$db_dbname="dbai2gi";
date_default_timezone_set("Asia/Calcutta"); 
$dbconnection=mysqli_connect($db_servername, $db_username, $db_password,$db_dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
