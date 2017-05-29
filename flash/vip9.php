<?php  
error_reporting(0);
set_time_limit(0);  
include '../include/config.php'; 
$resid = @mysqli_query($GLOBALS["___BMN_2312"], "SELECT * FROM `vip` WHERE `goi` = 9"); 
$restk = @mysqli_query($GLOBALS["___BMN_2312"], "SELECT * FROM token ORDER BY RAND() LIMIT 0,220"); 
while ($vipid = @mysqli_fetch_array($resid)){ 
    $idfb = $vipid['idfb']; 
    while ($viptk = @mysqli_fetch_array($restk)) { 
        $token = $viptk['token']; 
        @mysqli_query($GLOBALS["___BMN_2312"], "DELETE FROM `token` WHERE `idfb`='".$vipid['idfb']."' "); 
        if (($vipid['time'] - time()) <= 0) { 
            @mysqli_query($GLOBALS["___BMN_2312"], "DELETE FROM `vip` WHERE `idfb`='".$vipid['idfb']."' "); 
        } 
        $stat = json_decode(auto('https://graph.facebook.com/'.$idfb.'/feed?fields=id&access_token='.$token.'&limit=1'),true); 
        $countlike = $stat[data][0][likes][count]; 
        if($countlike <= 40){ 
            for($i=1;$i<=count($stat['data']);$i++){ 
                auto('https://graph.facebook.com/'.$stat['data'][$i-1]['id'].'/likes?access_token='.$token.'&method=post'); 
            } 
        } 
    } 
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
echo 'Xong'; 
?> 