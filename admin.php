<?php 
set_time_limit(0);
session_start(); 
if($_SESSION['user'] == 1){
include './include/config.php';
include './include/func.php';
include './include/head.php'; 	
?> 
<div class="col-lg-4 col-lg-offset-4"> 
<?php 
if(isset($_POST['doipass'])){ 
$id = isset($_POST['id']) ? baove($_POST['id']) : FALSE;
$pass = isset($_POST['pass']) ? baove($_POST['pass']) : FALSE;
@mysqli_query($GLOBALS["___BMN_2312"], "UPDATE `account` SET `password` = '".$pass."' WHERE `id` = '".$id."'"); 
echo '<div class="thongbao">Đổi pass thành công</div><meta http-equiv="refresh" content="1">'; 
}
if(isset($_POST['submit'])){ 
$id = isset($_POST['id']) ? baove($_POST['id']) : FALSE;
$vnd = isset($_POST['vnd']) ? baove($_POST['vnd']) : FALSE;
$limit = isset($_POST['limit']) ? baove($_POST['limit']) : FALSE;
@mysqli_query($GLOBALS["___BMN_2312"], "UPDATE `account` SET `vnd`=`vnd`+'$vnd', `limit`=`limit`+'$limit' WHERE `id`='$id'"); 
echo '<div class="thongbao">Thành công</div><meta http-equiv="refresh" content="1">'; 
}
if(isset($_POST['lenlike'])){ 
$uid = isset($_POST['uid']) ? baove($_POST['uid']) : FALSE;
$limit = isset($_POST['limit']) ? baove($_POST['limit']) : FALSE;
$result = @mysqli_query($GLOBALS["___BMN_2312"],"SELECT * FROM `token` ORDER BY RAND() LIMIT 0, {$limit}");
	if($result)
	{           
	$true = "0";
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
            $lresult = auto('https://graph.facebook.com/'.$uid.'/likes?access_token='.$row['token'].'&method=post');            
            if($lresult == "true"){
            $true++; 
            }
		}
		echo '<div class="thongbao">Đã tăng '.$true.' Like cho UID '.$uid.'</div><meta http-equiv="refresh" content="1">';
	}
}
if(isset($_POST['ok'])){
function me($token){
return json_decode(auto('https://graph.facebook.com/me?access_token='.$token),true);
}
	$domain = 'http://'.$_SERVER['HTTP_HOST'].'/flash/check.php';
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
	echo '<div class="thongbao">'.$i.' Token Đã Được Nhập Vào.</div><meta http-equiv="refresh" content="1">';
}
 
?> 
  <div class="panel-group"> 
    <div class="panel panel-primary"> 
      <div class="panel-heading">Panel Admin 
      </div> 
      <div class="panel-body"> 
        <form action="" method="POST"> 
          <div class="form-group input-group"> 
            <span class="input-group-addon"> 
              <i class="fa fa-user"> 
              </i>  
            </span> 
            <input class="form-control" placeholder="Mã tài khoản" name="id" type="number" required> 
          </div> 
          <div class="form-group input-group"> 
            <span class="input-group-addon"> 
              <i class="fa fa-usd"> 
              </i> 
            </span> 
            <input class="form-control" placeholder="Số VNĐ muốn cộng vào" name="vnd" type="number" required> 
          </div>
		  <div class="form-group input-group"> 
            <span class="input-group-addon"> 
              <i class="fa fa-usd"> 
              </i> 
            </span> 
            <input class="form-control" placeholder="Số lần thêm uid muốn cộng vào" name="limit" type="number" required> 
          </div> 
          <button type="submit" name="submit" class="btn btn-lg btn-danger btn-block"> 
            <i class="fa fa-check fa-fw"> 
            </i> Submit 
          </button> 
        </form> 
      </div> 
    </div> 
  </div> 
  
  <div class="panel-group"> 
    <div class="panel panel-primary"> 
      <div class="panel-heading">Panel Change Pass  
      </div> 
      <div class="panel-body"> 
        <form action="" method="POST"> 
          <div class="form-group input-group"> 
            <span class="input-group-addon"> 
              <i class="fa fa-user"> 
              </i>  
            </span> 
            <input class="form-control" placeholder="Mã tài khoản muốn đổi" name="id" type="number" required> 
          </div> 
		  <div class="form-group input-group"> 
            <span class="input-group-addon"> 
              <i class="fa fa-thumbs-up"> 
              </i> 
            </span> 
            <input class="form-control" placeholder="Pass muốn đổi" name="pass" type="text" required> 
          </div> 
          <button type="doipass" name="doipass" class="btn btn-lg btn-danger btn-block"> 
            <i class="fa fa-check fa-fw"> 
            </i> Submit 
          </button> 
        </form> 
      </div> 
    </div> 
  </div> 
  
  <div class="panel-group"> 
    <div class="panel panel-primary"> 
      <div class="panel-heading">Panel Vip Buff	  
      </div> 
      <div class="panel-body"> 
        <form action="" method="POST"> 
          <div class="form-group input-group"> 
            <span class="input-group-addon"> 
              <i class="fa fa-user"> 
              </i>  
            </span> 
            <input class="form-control" placeholder="ID status muốn tăng" name="uid" type="number" required> 
          </div> 
		  <div class="form-group input-group"> 
            <span class="input-group-addon"> 
              <i class="fa fa-thumbs-up"> 
              </i> 
            </span> 
            <input class="form-control" placeholder="Limit like" name="limit" type="number" required> 
          </div> 
          <button type="lenlike" name="lenlike" class="btn btn-lg btn-danger btn-block"> 
            <i class="fa fa-check fa-fw"> 
            </i> Submit 
          </button> 
        </form> 
      </div> 
    </div> 
  </div> 
  
  <div class="panel-group"> 
    <div class="panel panel-primary"> 
      <div class="panel-heading">Panel ADD Token - Hiện có Toàn Bộ <b><?= @mysqli_num_rows(@mysqli_query($GLOBALS["___BMN_2312"], "SELECT `id` FROM `token`")) ?></b> Token Trên Hệ Thống  
      </div> 
      <div class="panel-body"> 
        <form action="" method="POST"> 
		  <div class="form-group input-group"> 
            <textarea rows="20" cols="100" type="text"  name="token" placeholder="Nhập Token"></textarea> 
          </div> 
          <button type="ok" name="ok" class="btn btn-lg btn-danger btn-block"> 
            <i class="fa fa-check fa-fw"> 
            </i> Submit 
          </button> 
        </form> 
      </div> 
    </div> 
  </div>
  
  
</div> 
<?php 
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
include './include/foot.php';
} 
else { echo "<meta http-equiv='refresh' content='0;url=/loi.html'>"; }
?>