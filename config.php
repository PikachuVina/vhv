<?php
/*
Copy vui lòng để lại dòng này
Bản quyền: BMN.2312
Facebook: BMN.2312
*/
error_reporting(0);
$host = "localhost"; 
$username = "nghia3"; 
$password = "Af6S3oaw8D~?"; 
$dbname = "nghia3"; 
$connection = ($GLOBALS["___BMN_2312"] = @mysqli_connect($host, $username, $password)); 
if (!$connection) 
  { 
  die('Could not connect: ' . mysqli_error($GLOBALS["___BMN_2312"])); 

  } 
@mysqli_select_db($GLOBALS["___BMN_2312"], $dbname) or die(mysqli_error($GLOBALS["___BMN_2312"])); 
@mysqli_query($GLOBALS["___BMN_2312"], "SET NAMES utf8"); 

function auto($url) { 
   $ch = curl_init(); 
   curl_setopt_array($ch, array( 
      CURLOPT_CONNECTTIMEOUT => 5, 
      CURLOPT_RETURNTRANSFER => true, 
      CURLOPT_URL            => $url, 
      ) 
   ); 
   $result = curl_exec($ch); 
   curl_close($ch); 
   return $result; 
} 
?>