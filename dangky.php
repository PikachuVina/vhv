<?php 
include './include/config.php'; 
include './include/head.php'; 
$rand = rand(100000,999999); 
?> 
<div class="col-lg-4 col-lg-offset-4"> 
        <?php 
if(isset($_POST['submit'])){ 
$username = htmlspecialchars($_POST['username']); 
$password = htmlspecialchars($_POST['password']); 
$captcha = htmlspecialchars($_POST['captcha']); 
$captcha_number = htmlspecialchars($_POST['captcha_number']); 
$check = @mysqli_num_rows(@mysqli_query($GLOBALS["___BMN_2312"], "SELECT * FROM `ACCOUNT` WHERE `username`='$username'")); 
if(!$username || !$password || $captcha != $captcha_number){ 
echo '<div class="thongbao">Hãy nhập lại Captcha</div>'; 
}else if($check > 0){ 
echo '<div class="thongbao">Username đã tồn tại</div>'; 
}else{ 
@mysqli_query($GLOBALS["___BMN_2312"], "INSERT INTO `ACCOUNT` SET 
`username`='$username', 
`password`='$password', 
`vnd`='0',
"); 
echo '<div class="thongbao">Đăng ký thành công</div>'; 
echo '<meta http-equiv="refresh" content="0;url=index.html">'; 
} 
} 
?> 
  <div class="panel-group"> 
    <div class="panel panel-primary"> 
      <div class="panel-heading">Đăng Ký Tài Khoản 
      </div> 
      <div class="panel-body"> 
        <form action="" method="POST"> 
          <div class="form-group input-group"> 
            <span class="input-group-addon"> 
              <i class="fa fa-user"> 
              </i>  
            </span> 
            <input class="form-control" placeholder="Username" name="username" type="text" required> 
          </div> 
          <div class="form-group input-group"> 
            <span class="input-group-addon"> 
              <i class="fa fa-lock"> 
              </i> 
            </span> 
            <input class="form-control" placeholder="Password" name="password" type="password" required> 
          </div>
          <div class="form-group input-group"> 
            <span class="input-group-addon"><input type="text" id="captcha_number" name="captcha_number" value="<?= $rand ?>" readonly=""></span> 
            <input type="number" class="form-control" name="captcha" placeholder="Captcha" required>                                         
          </div> 
          <button type="submit" name="submit" class="btn btn-lg btn-danger btn-block"> 
            <i class="fa fa-sign-in fa-fw"> 
            </i> Submit 
          </button> 
        </form> 
      </div> 
    </div> 
  </div> 
</div> 
<style> 
#captcha_number{ 
    width:66px; 
    height:20px; 
    text-align:center; 
    background:#333;color:#fff; 
    font-weight:bold; 
} 
</style> 
<?php 
include './include/foot.php'; 
?>