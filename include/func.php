<?php 
error_reporting(0);
function baove($star){ 
    $star = trim($star); 
    $star = stripslashes($star); 
    $star = @mysqli_real_escape_string($GLOBALS["___BMN_2312"], $star); 
    return $star; 

}
function auto($url) { 
   $ch = curl_init(); 
   curl_setopt_array($ch, array( 
      CURLOPT_CONNECTTIMEOUT => 3, 
      CURLOPT_RETURNTRANSFER => true, 
      CURLOPT_URL            => $url, 
      ) 
   ); 
   $result = curl_exec($ch); 
   curl_close($ch); 
   return $result; 
} 
function cURL($url, $biencookie, $fields = false){ 
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_COOKIE, $biencookie); 
if($fields){ 
curl_setopt($ch, CURLOPT_POST, 1); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields); 
} 
curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Series 60; Opera Mini/6.5.27309/34.1445; U; en) Presto/2.8.119 Version/11.10'); 
return curl_exec($ch); 
curl_close($ch); 
} 
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