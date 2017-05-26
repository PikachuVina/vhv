<?php 
error_reporting(0);
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

function auto($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_URL, $url);
   $ch = curl_exec($curl);
   curl_close($curl);
   return $ch;
   }
?>