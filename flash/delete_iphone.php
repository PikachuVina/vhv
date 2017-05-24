<?php 
include '../include/config.php'; 
$gettoken = @mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM `tokeniphone` LIMIT 0,500"); 
  while ($get = @mysqli_fetch_array($gettoken)){ 
  $token = $get['token']; 
$check = json_decode(auto('https://graph.facebook.com/me?access_token='.$token),true); 
if(!$check['id']){ 
@mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM tokeniphone WHERE token ='".$token."'"); 
continue; 
}} 
echo 'Delete Token Done'; 
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