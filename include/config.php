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
 
function thoigiantinhvip($from){
	$to = time();
	$diff = (int)abs($to - $from);
	if($diff <= 60){
		$since = sprintf('Còn Vài Giây');
	}
	else if($diff <= 3600){
		$mins = round($diff / 60);
		$since = sprintf('Còn %s Phút', $mins);
	}
	else if(($diff <= 86400)&&($diff > 3600)){
		$hours = round($diff/3600);
		if($hours <= 1){
			$hours = 1;
		}
		$since = sprintf('Còn %s Giờ', $hours);
	}
	else if($diff >= 86400){
		$days = round($diff / 86400);
		if($days <= 1){
			$days = 1;
		}
		$since = sprintf('Còn %s Ngày', $days);
	}
	return $since;
}
?>