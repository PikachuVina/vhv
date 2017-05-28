<?php
include './include/config.php';
include './include/head.php';
?>

<div class="col-lg-8 col-lg-offset-2">
  <div class="panel panel-primary">
    <div class="panel-heading">
      </i> Danh Sách Thành Viên Toàn Hệ Thống
    </div>
    <div class="panel-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Mã tài khoản</th>
			<th>Username</th>
            <th>VNĐ</th>
			<th>Limit UID</th>
          </tr>
        </thead>
        <tbody>
<?php
	$infotv = @mysqli_query($GLOBALS["___BMN_2312"], "SELECT * FROM `ACCOUNT` order by id");
	 while ($getinfo = @mysqli_fetch_array($infotv)){
		$matk= $getinfo['id'];
		$username= $getinfo['username'];
		$vnd= $getinfo['vnd'];
		$limit= $getinfo['limit'];
?>
          <tr>
            <td><?php echo $matk; ?></td>
            <td><?php echo $username; ?></td>
			<td><?php echo $vnd; ?></td>
			<td><?php echo $limit; ?></td>
          </tr>
<?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php
include './include/foot.php';
