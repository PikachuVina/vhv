<?php
/*
Copy vui lòng để lại dòng này
Bản quyền: BMN.2312
Facebook: BMN.2312
*/
error_reporting(0);
date_default_timezone_set("Asia/Ho_Chi_Minh");
$host = "mysql4.gear.host"; 
$username = "nghia3"; 
$password = "Af6S3oO88D~?"; 
$dbname = "nghia3"; 
$connection = ($GLOBALS["___BMN_2312"] = @mysqli_connect($host, $username, $password)); 
if (!$connection) 
  { 
  die('Could not connect: ' . mysqli_error($GLOBALS["___BMN_2312"])); 

  } 
@mysqli_select_db($GLOBALS["___BMN_2312"], $dbname) or die(mysqli_error($GLOBALS["___BMN_2312"])); 
@mysqli_query($GLOBALS["___BMN_2312"], "SET NAMES utf8"); 
?>