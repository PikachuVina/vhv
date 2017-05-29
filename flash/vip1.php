<?php  
error_reporting(0);
set_time_limit(0);  
require("../_cnF/_star_cn_F.php"); 
require("../_cnF/_star_funC.php");  
$resid = @mysqli_query($GLOBALS["___BMN_2312"], "SELECT * FROM `vip` WHERE `level` = 1"); 
$restk = @mysqli_query($GLOBALS["___BMN_2312"], "SELECT * FROM tokenvip ORDER BY RAND() LIMIT 0,60"); 
while ($vipid = @mysqli_fetch_array($resid)){ 
    $idfb = $vipid['idfb']; 
    while ($viptk = @mysqli_fetch_array($restk)) { 
        $token = $viptk['token']; 
        @mysqli_query($GLOBALS["___BMN_2312"], "DELETE FROM `tokenvip`     WHERE `idfb`='".$vipid['idfb']."' "); 
        @mysqli_query($GLOBALS["___BMN_2312"], "DELETE FROM `tokenios`     WHERE `idfb`='".$vipid['idfb']."' "); 
        @mysqli_query($GLOBALS["___BMN_2312"], "DELETE FROM `tokeniphone`  WHERE `idfb`='".$vipid['idfb']."' "); 
        @mysqli_query($GLOBALS["___BMN_2312"], "DELETE FROM `tokenhtc`     WHERE `idfb`='".$vipid['idfb']."' "); 
        @mysqli_query($GLOBALS["___BMN_2312"], "DELETE FROM `tokenandroid` WHERE `idfb`='".$vipid['idfb']."' "); 
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
echo 'Xong'; 
?> 