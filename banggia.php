<?php
include './include/config.php';
include './include/head.php';
$like = array(0, 200, 500, 1000, 2000, 5000);
$vnd = array(0, 100000, 200000, 350000, 600000, 1000000);
$contact = '<a class="btn btn-danger" href="https://www.facebook.com/messages/t/bmn.2312" target="_blank">Mua Ngay</a>';
?>
<div class="col-lg-8 col-lg-offset-2">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <i class="fa fa-thumbs-o-up">
      </i> Bảng Giá Vip Like
    </div>
    <div class="panel-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Gói Like/Post
            </th>
            <th>Số Post/1 Ngày
              <br>
            </th>
            <th>Giá/1 Tháng
            </th>
            <th>
              <b>Liên Hệ
              </b>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?= $like[1] ?>+
            </td>
            <td>15
            </td>
            <td><?= $vnd[1] ?>
            </td>
            <td>
              <?= $contact ?>
            </td>
          </tr>
          <tr>
            <td><?= $like[2] ?>+
            </td>
            <td>15
            </td>
            <td><?= $vnd[2] ?>
            </td>
            <td>
              <?= $contact ?>
            </td>
          </tr>
          <tr>
            <td><?= $like[3] ?>+
            </td>
            <td>15
            </td>
            <td><?= $vnd[3] ?>
            </td>
            <td>
              <?= $contact ?>
            </td>
          </tr>
          <tr>
            <td><?= $like[4] ?>+
            </td>
            <td>15
            </td>
            <td><?= $vnd[4] ?>
            </td>
            <td>
              <?= $contact ?>
            </td>
          </tr>
          <tr>
            <td><?= $like[5] ?>+
            </td>
            <td>15
            </td>
            <td><?= $vnd[5] ?>
            </td>
            <td>
              <?= $contact ?>
            </td>
          </tr>
        </tbody>
		<font color="green"><b>
<br>

<font color="red"><b>➡</b> Mời bạn inbox Facebook: 
<a rel="nofollow" href="http://fb.com/100004294419791" title="Tìm trên facebook.com"> Bùi Mạnh Nghĩa</a> nạp tiền và hỗ trợ!</font>
 <br>
<font color="red"><b>➡</b> Ngoài ra Cộng tác viên có thể nâng giá của gói like lên và bán lại cho khách.<br>
<font color="red"><b>➡</b> Like sẽ bắt đầu lên từ 0-30 phút kể từ khi cài. Vì vậy nếu có bị chậm thì mọi người cứ bình tĩnh!!<br>
<b>➡</b> Lưu ý: Like là người dùng facebook thật 100% và bạn có thể chọn tốc độ like lên chậm hoặc nhanh, vui lòng liên hệ <a rel="nofollow" href="http://fb.com/100004294419791" title="Tìm trên facebook.com">An Vu</a> để biết thêm chi tiết.
</font></font></b></font>
      </table>
    </div>
  </div>
</div>
<?php
include './include/foot.php';
