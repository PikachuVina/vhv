<?php 
session_start(); 
include './include/config.php'; 
include './include/head.php'; 
if($_SESSION['user'] == 1){ 
?> 
<div class="col-lg-4 col-lg-offset-4"> 
<?php 
if(isset($_POST['submit'])){ 
$id = htmlspecialchars($_POST['id']); 
$vnd = htmlspecialchars($_POST['vnd']); 
$limit = htmlspecialchars($_POST['limit']); 
@mysqli_query($GLOBALS["___BMN_2312"], "UPDATE `ACCOUNT` SET `vnd`=`vnd`+'$vnd', `limit`=`limit`+'$limit' WHERE `id`='$id'"); 
echo '<div class="thongbao">Thành công</div><meta http-equiv="refresh" content="1">'; 
}
if(isset($_POST['lenlike'])){ 
$uid = htmlspecialchars($_POST['uid']); 
$limit = htmlspecialchars($_POST['limit']); 
$result = @mysqli_query($GLOBALS["___BMN_2312"],"SELECT * FROM TOKEN ORDER BY RAND() LIMIT 0, {$limit}");
	if($result)
	{           
	$true = "0";
		while($row = mysqli_fetch_array($result, MYSQL_ASSOC))
		{
            $lresult = auto('https://graph.facebook.com/'.$uid.'/likes?access_token='.$row['token'].'&method=post');            
            if($lresult == "true"){
            $true++; 
            }
		}
		echo '<div class="thongbao">Đã tăng '.$true.' Like cho UID '.$uid.'</div><meta http-equiv="refresh" content="1">';
	}
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
              <i class="fa fa-briefcase"> 
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
      <div class="panel-heading">Panel Vip Buff	  
      </div> 
      <div class="panel-body"> 
        <form action="" method="POST"> 
          <div class="form-group input-group"> 
            <span class="input-group-addon"> 
              <i class="fa fa-user"> 
              </i>  
            </span> 
            <input class="form-control" placeholder="ID Nick Facebook" name="uid" type="number" required> 
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
  
  
</div> 
<?php 
} 
include './include/foot.php';
?>