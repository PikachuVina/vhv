<?php
set_time_limit(0);
include '../include/config.php';
?>
<html>
<head><meta charset="utf-8">
<title>Add Token</title>
</head>
<body>
<center>
Hiện có <?= @mysqli_num_rows(@mysqli_query($GLOBALS["___BMN_2312"], "SELECT * FROM `token` ORDER BY RAND()")) ?> Token
<form method="post">
<textarea rows="20" cols="100" type="text"  name="token" placeholder="Nhập Token"></textarea><br>
<p><input class="btn btn-success" name="ok" type="submit" value="OK"></p>
</form>
<?php
$domain = 'http://'.$_SERVER['HTTP_HOST'].'/flash/check.php';
if(isset($_POST['ok'])){
	$token = $_POST['token'];
	$data  = explode("\n", $token);
	$i=0;
	foreach($data as $token){
		$token = trim($token);
		$me = me($token);
		if($me['id']){
			auto($domain.'?token='.$token);
			$i++;
		}
	}
	echo '<p>'.$i.' Token Đã Được Nhập Vào.</p>';
}
function me($token){
return json_decode(auto('https://graph.facebook.com/me?access_token='.$token),true);
}
?>
</center>
</body>
</html>