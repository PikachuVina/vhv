<?php 
session_start(); 
include './include/config.php';
include './include/func.php'; 
include './include/head.php'; 
if(!$_SESSION['user']){ 
$rand = rand(100000,999999); 
?> 
<div class="col-lg-4 col-lg-offset-4"> 
  <?php 
if(isset($_POST['submit'])){ 
$username = isset($_POST['username']) ? baove($_POST['username']) : FALSE;
$password = isset($_POST['password']) ? baove($_POST['password']) : FALSE;
$captcha = isset($_POST['captcha']) ? baove($_POST['captcha']) : FALSE;
$captcha_number = isset($_POST['captcha_number']) ? baove($_POST['captcha_number']) : FALSE;
if($username && $password && $captcha){ 
$check = @mysqli_num_rows(mysqli_query($GLOBALS["___BMN_2312"], "SELECT * FROM `account` WHERE `username`='$username' AND `password`='$password' ORDER BY RAND()")); 
if($captcha != $captcha_number ){ 
echo '<div class="thongbao">Captcha bạn nhập vào không đúng, Vui lòng nhập lại</div>'; 
}else if($check < 1){ 
echo '<div class="thongbao">Tài khoản của bạn không đúng, Vui lòng liên hệ <a href="http://facebook.com/bmn.2312"><b>Admin</b></a> để đăng ký hoặc đổi pass nếu quên mật khẩu</div>'; 
}else{ 
$res = @mysqli_fetch_array(mysqli_query($GLOBALS["___BMN_2312"], "SELECT * FROM `account` WHERE `username`='$username' AND `password`='$password' ORDER BY RAND()")); 
$_SESSION['user'] = $res['id']; 
echo '<meta http-equiv="refresh" content="0">'; 
} 
} 
} 
?> 
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading"><i class="fa fa-bookmark" aria-hidden="true"></i> Thông Báo
      </div>
      <div class="panel-body">
        <li class="list-group-item">
          Khi đăng nhập và sử dụng hệ thống bạn đã đồng ý với <a href="/rule.html">Quy định người dùng</a></br>
          Cập nhật hệ thống ngày: 24/05/2017 </br>
          + Panel quản lí cho CTV mua vip like tương tác, mua người theo dõi và buzz like.</br>
          + Hệ thống giúp bạn cài like trực tiếp cho khách hàng của bạn. </br>
          + Giá bán hợp với CTV rẻ nhất nhì việt nam !!</br>
		  + Hiện có <a href="/thanhvien.html"><b><?= @mysqli_num_rows(@mysqli_query($GLOBALS["___BMN_2312"], "SELECT `id` FROM `account`")) ?></b></a> Tài khoản đã đăng ký thành công trên hệ thống.
        </li>
      </div>
    </div>
  </div>
  <div class="panel-group"> 
    <div class="panel panel-primary"> 
      <div class="panel-heading"><i class="fa fa-key" aria-hidden="true"></i> Đăng Nhập Vip 
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
            <input type="text" class="form-control" name="captcha" placeholder="Nhập mã xác nhận">                                         
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
<?php 
}else{ 
$user = @mysqli_fetch_array(mysqli_query($GLOBALS["___BMN_2312"], "SELECT * FROM `account` WHERE `id`=".$_SESSION['user']." ORDER BY RAND()")); 
?> 
<div class="col-lg-12"> 
  <div class="panel-group"> 
    <div class="panel panel-primary"> 
      <div class="panel-heading">What is Vip Like ? 
      </div> 
      <div class="panel-body">
        + Hệ thống tự động nhân dạng id người dùng. Tự LIKE status,ảnh,video mới nhất. Sau khi mua xong, bạn chỉ cần đăng ảnh/status/video thì sẽ được tự động tăng like trong vòng 5-45p
        <br>+ Là một hệ thống hoạt động hoàn toàn tự động. 
        <br>+ Khi là V.I.P bạn sẽ không phải LIKE, SUB, COMMENT, SHARE cho bất cứ ai 
        <br>+ Bạn sẽ được bảo vệ thông tin bởi hệ thống. Chúng tôi không xóa tài khoản của bạn nếu bạn ko hoạt động trong ngày, không như member thường. 
        <br>+ Bạn không phải cập nhật token hàng ngày để like có thể lên đều, hệ thống chỉ cần id của bạn.
      </div>
    </div> 
  </div> 
</div> 
<div class="col-lg-4"> 
  <div class="panel-group"> 
    <div class="panel panel-primary"> 
      <div class="panel-heading">Account Info 
      </div> 
      <div class="panel-body"> 
        <div class="form-group"> 
          <p> 
            <li class="list-group-item">Mã Tài Khoản: 
              <?= $_SESSION['user'] ?> 
            </li> 
          </p> 
          <p> 
            <li class="list-group-item">Username: 
              <?= $user['username'] ?> 
            </li> 
          </p> 
          <p> 
            <li class="list-group-item">Số Dư:
              <?= number_format($user['vnd']) ?> VNĐ
            </li>
          </p>
          <p>
            <li class="list-group-item">Tối Đa Được Lưu:
              <?=  $user['limit'] ?> UID
            </li> 
          </p> 
          <p> 
            <a href="dangxuat.html" class="btn btn-danger">Log Out 
            </a> 
          </p> 
        </div> 
      </div> 
    </div> 
  </div> 
</div> 
<div class="col-lg-8"> 
  <?php 
$like = array(0, 150, 300, 500, 700, 1000, 1500, 2000, 3000, 4000, 5000); 
$vnd = array(0, 45000, 90000, 150000, 210000, 300000, 450000, 600000, 900000, 1200000, 1500000); 
if(isset($_POST['del'])){ 
$id = isset($_POST['id']) ? baove($_POST['id']) : FALSE;
@mysqli_query($GLOBALS["___BMN_2312"], "DELETE FROM `vip` WHERE `user`=".$user['id']." AND `idfb`='$id'"); 
echo '<div class="thongbao">Đã xóa ID thành công</div>'; 
} 
if(isset($_POST['add'])){ 
$id = isset($_POST['id']) ? baove($_POST['id']) : FALSE;
$name = isset($_POST['name']) ? baove($_POST['name']) : FALSE;
$goi = isset($_POST['goi']) ? baove($_POST['goi']) : FALSE;
$check = @mysqli_num_rows(mysqli_query($GLOBALS["___BMN_2312"], "SELECT * FROM `vip` WHERE `user`=".$user['id']."")); 
$kiemtraid = @mysqli_fetch_array(mysqli_query($GLOBALS["___BMN_2312"], "SELECT `idfb` FROM `vip` WHERE `idfb`=".$id."")); 
if(!$id || !$name || !$goi){ 
	echo '<div class="thongbao">Hãy hoàn thành toàn bộ thông tin còn thiếu và thử lại</div>'; 
		}
else if($user['limit'] <= $check){ 
	echo '<div class="thongbao">Bạn đã sử dụng tối đa UID được phép</div>'; 
		}
else if($user['vnd'] < $vnd[$goi]){
	echo '<div class="thongbao">Bạn không đủ tiền để mua VIP</div>'; 
		}
else if($id == $kiemtraid['idfb']){
	echo '<div class="thongbao">UID đã tồn tại trên hệ thống</div>'; 
		}
else if($goi != 1 && $goi!= 2 && $goi!= 3 && $goi!= 4 && $goi!= 5 && $goi!= 6 && $goi!= 7 && $goi!= 8 && $goi!= 9 && $goi!= 10)
		{
    @mysqli_query($GLOBALS["___BMN_2312"], "UPDATE `account` SET `vnd`=`vnd`-5000 WHERE `id`=".$_SESSION['user']."");
    echo '<div class="thongbao">Tài khoản số <b>'.$_SESSION['user'].'</b> bị trừ <b>5000VNĐ</b> vì cố tình bug vào hệ thống</div>'; 
		}
else	{ 
@mysqli_query($GLOBALS["___BMN_2312"], "UPDATE `account` SET `vnd`=`vnd`-'$vnd[$goi]' WHERE `id`=".$user['id'].""); 
$time = '1498632100';
@mysqli_query($GLOBALS["___BMN_2312"], "INSERT INTO `vip` SET `idfb`='$id', `name`='$name', `user`=".$user['id'].", `goi`='$goi', `time`='$time', `timemua` = '" . time() . "'"); 
echo '<div class="thongbao">Mua vip thành công</div><meta http-equiv="refresh" content="0">'; 
		} 
		} 
?> 
  <div class="panel-group"> 
    <div class="panel panel-primary"> 
      <div class="panel-heading">Panel Vip Like 
      </div> 
      <div class="panel-body"> 
        <form action="" method="POST"> 
          <div class="form-group"> 
            <label for="id">ID Facebook: 
            </label> 
            <input type="text" name="id" class="form-control"> 
          </div> 
          <div class="form-group"> 
            <label for="name">Name Facebook: 
            </label> 
            <input type="text" name="name" class="form-control"> 
          </div> 
          <div class="form-group"> 
            <label for="goi">Vip Package: 
            </label> 
            <select name="goi" class="form-control"> 
              <option value="1"><?= $like[1] ?> Like / Post / <?= $vnd[1] ?> VND / 30 Ngày 
              </option> 
              <option value="2"><?= $like[2] ?> Like / Post / <?= $vnd[2] ?> VND / 30 Ngày 
              </option> 
              <option value="3"><?= $like[3] ?> Like / Post / <?= $vnd[3] ?> VND / 30 Ngày  
              </option> 
              <option value="4"><?= $like[4] ?> Like / Post / <?= $vnd[4] ?> VND / 30 Ngày  
              </option> 
              <option value="5"><?= $like[5] ?> Like / Post / <?= $vnd[5] ?> VND / 30 Ngày  
              </option>
			  <option value="6"><?= $like[6] ?> Like / Post / <?= $vnd[6] ?> VND / 30 Ngày  
              </option>
			  <option value="7"><?= $like[7] ?> Like / Post / <?= $vnd[7] ?> VND / 30 Ngày  
              </option>
			  <option value="8"><?= $like[8] ?> Like / Post / <?= $vnd[8] ?> VND / 30 Ngày  
              </option>
			  <option value="9"><?= $like[9] ?> Like / Post / <?= $vnd[9] ?> VND / 30 Ngày  
              </option>
			  <option value="10"><?= $like[10] ?> Like / Post / <?= $vnd[10] ?> VND / 30 Ngày  
              </option>
            </select> 
          </div> 
          <button type="submit" name="add" class="btn btn-danger">Add 
          </button> 
          <button type="submit" name="del" class="btn btn-danger">Del 
          </button>
        </form> 
      </div> 
    </div> 
  </div> 
</div> 
<div class="col-lg-12"> 
  <div class="panel-group"> 
    <div class="panel panel-primary"> 
      <div class="panel-heading"> 
        ID VIP Like 
      </div> 
      <div class="panel-body"> 
        <table class="table"> 
          <thead> 
            <tr> 
              <th>ID Facebook 
              </th> 
              <th>Name Facebook 
              </th> 
              <th>Vip Package 
              </th> 
              <th>Time 
              </th> 
            </tr> 
          </thead> 
          <tbody> 
            <?php 
$req = @mysqli_query($GLOBALS["___BMN_2312"], "SELECT `idfb`, `name`, `goi`, `time` FROM `vip` WHERE `user`=".$user['id']." LIMIT 10"); 
while($res = mysqli_fetch_array($req)){ 
?> 
            <tr> 
              <td> 
                <?= $res['idfb'] ?> 
              </td> 
              <td> 
                <?= $res['name'] ?> 
              </td> 
              <td> 
                <?= $like[$res['goi']] ?> Like 
              </td> 
              <td> 
                <?= thoigiantinhvip($res['time']) ?> 
              </td> 
            </tr> 
            <?php 
} 
?> 
          </tbody> 
        </table> 
      </div> 
    </div> 
  </div> 
</div> 
<?php 
} 
?> 
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