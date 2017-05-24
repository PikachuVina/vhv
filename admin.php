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
echo '<div class="thongbao">Thành công</div>'; 
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
            <input class="form-control" placeholder="ID" name="id" type="number" required> 
          </div> 
          <div class="form-group input-group"> 
            <span class="input-group-addon"> 
              <i class="fa fa-usd"> 
              </i> 
            </span> 
            <input class="form-control" placeholder="VND" name="vnd" type="number" required> 
          </div>
		  <div class="form-group input-group"> 
            <span class="input-group-addon"> 
              <i class="fa fa-usd"> 
              </i> 
            </span> 
            <input class="form-control" placeholder="LIMIT" name="limit" type="number" required> 
          </div> 
          <button type="submit" name="submit" class="btn btn-lg btn-danger btn-block"> 
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