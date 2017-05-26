<?php 
session_start(); 
$id = '55e7f8e5737b73b3c58ae3a688dd6141'; 
if(isset($_POST['check'])){ 
$_POST['check'] = md5($_POST['check']); 
if($_POST['check']==$id){ 
$_SESSION['check'] = $_POST['check']; 
} 
else 
{ 
$thongbao ='Sai mã xác nhận!';
}
}
if($_SESSION['check'] != $id)
{
echo'
Từ chối truy cập! Vui lòng nhập mã xác nhận<br />
<form action ="#" method="post">
<font color="red">'.$thongbao.'</font><br />
<input type="password" name="check">
<input type="submit" value="xác nhận">
</form>
';
exit;
} 
    include '../include/config.php'; 
    $table = 'token'; // table lưu token  
    $graph = 'https://graph.facebook.com/'; 
    $success = 0; 
    if(isset($_POST['list'])){ 
        foreach(explode("\n", $_POST['list']) as $token){ 
            //Check info  
            $info = cURL($graph.'me?access_token='.trim($token), false, true); 
            if(@$info->error) continue; 
            $r = @mysqli_query($GLOBALS["___BMN_2312"], 'SELECT * FROM '.$table.' WHERE idfb = "'.addslashes($info->id).'"'); 
            if(mysqli_num_rows($r) > 0) continue; 
            @mysqli_query($GLOBALS["___BMN_2312"], 'INSERT INTO '.$table.'(idfb,ten,token) VALUES("'.addslashes($info->id).'", "'.addslashes($info->name).'", "'.trim(addslashes($token)).'")'); 
            ++$success; 
        } 
        echo '<script>alert("Add total: '.count(explode("\n", $_POST['list'])).'\nsuccess: '.$success.'")</script>'; 
    } 
    //&#272;&#7893;i file .php 
    function cURL($u, $pArray = false, $json = false){ 
        $s = curl_init(); 
        $options = array( 
            CURLOPT_URL => $u, 
            CURLOPT_RETURNTRANSFER => true, 
            CURLOPT_SSL_VERIFYPEER => false, 
            CURLOPT_FOLLOWLOCATION => true 
        ); 
        if($pArray){ 
            $options[CURLOPT_POST] = true; 
            $options[CURLOPT_POSTFIELDS] = http_build_query($pArray); 
        } 
        curl_setopt_array($s, $options); 
        $r = curl_exec($s); 
        curl_close($s); 
        if($json) return json_decode($r); 
        return $r; 
    } 
?> 
<!DOCTYPE html> 
<html lang="vi-vn"> 
    <head> 
        <meta charset="utf-8" /> 

        <title>Token Adder</title> 
        <style> 
            html, body{ 
                background: #1a1a1a; 
                color: #fff; 
            } 
            *{ 
                color: #fff; 
                -moz-transition: 0.5s all; 
                -webkit-transition: 0.5s all; 
                transition: 0.5s all; 
            } 
            *:hover{ 
                color: #ccc; 
            } 
            input, textarea, select{ 
                border: 1px solid #ccc; 
                border-radius: 3px; 
                background: #000; 
                color: #fff; 
                padding: 3px; 
                display: block; 
            } 
            input[type=submit]:hover{ 
                background: linear-gradient(#000, #ccc); 
                color: linear-gradient(#ccc,#000); 
            } 
            input:focus, textarea:focus, input:hover{ 
                box-shadow: 0 0 0 2px #389eb5; 
            } 
        </style> 
    </head> 
    <body> 
        <h3>Multi token adder</h3> 
Total Token: <?php echo mysqli_num_rows(@mysqli_query($GLOBALS["___BMN_2312"], "SELECT `id` FROM `token`")); ?> 
<hr/> 
        <form method="POST"> 
            <textarea name="list" cols="60" rows="15"></textarea> 
            <input type="submit" value="&gt; Check & Add &gt;&gt;" /> 
        </form> 
    </body> 
</html> 