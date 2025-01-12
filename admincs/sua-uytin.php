<?php include('head.php'); ?>
<?php include('nav.php'); ?>

<div class="row mb-2">
  <div class="col-sm-6">

  </div><!-- /.col -->
</div><!-- /.row -->
<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}

$AADDCC = mysqli_query($ketnoi, "SELECT * FROM `cards` WHERE `id` = '" . $id . "' ");
while ($row = mysqli_fetch_array($AADDCC)) {
  if (isset($_POST["btn_submit"])) {
    $code = random('QWERTYUIOPASDFGHJKLZXCVBNM1234567890', '6');
    mysqli_query($ketnoi, "UPDATE `cards` SET
    `username` = '" . $_POST['ten'] . "',
    `sdt`= '" . $_POST['sdt'] . "',
    `id_fb` = '" . $_POST['idfb'] . "',
    `website` = '" . $_POST['website'] . "',
    `dich_vu` = '" . $_POST['loai'] . "',
    `mo_ta` = '" . $_POST['note'] . "',
    `money` = '" . $_POST['money'] . "',
    `vi_momo` = '" . $_POST['momo'] . "',
    `dv` = '" . $_POST['dv'] . "',
    `avatar` = '" . $_POST['avatar'] . "',
    `ngan_hang` = '" . $_POST['nganhang'] . "' WHERE `id` = '" . $id . "' ");

    echo '<script type="text/javascript">swal("Thành Công","Save Thành Công","success");
    setTimeout(function(){ location.href = "" },500);</script>';

  }

  ?>

  <div class="row">

    <section class="col-lg-12 connectedSortable">

      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Sửa Hồ Sơ <a href="//<?= $site_tenweb; ?>/profile/<?= $row['code']; ?>"
              style="text-shadow: 1px 2px 3px Indigo;"><?= $row['username']; ?></a></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="" method="post">
          <div class="card-body">

            <div class="form-group">
              <label for="exampleInputEmail1">Họ và tên</label>
              <input type="text" name="ten" class="form-control" value="<?= $row['username']; ?>">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Avatar</label>
              <input type="text" name="avatar" class="form-control" value="<?= $row['avatar']; ?>">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Số Điện Thoại</label>
              <input type="text" name="sdt" class="form-control" value="<?= $row['sdt']; ?>">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">ID FB</label>
              <input type="text" name="idfb" class="form-control" value="<?= $row['id_fb']; ?>">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Tiền Bảo Hiểm</label>
              <input type="text" name="money" class="form-control" value="<?= $row['money']; ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Website</label>
              <input type="text" name="website" class="form-control" value="<?= $row['website']; ?>">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Ngân hàng</label>
              <input type="text" name="nganhang" class="form-control" value="<?= $row['ngan_hang']; ?>">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Dịch vụ</label>
              <input type="text" name="dv" class="form-control" value="<?= $row['dv']; ?>">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Danh mục</label>
              <select class="custom-select" name="loai">
                <?php
                $result = mysqli_query($ketnoi, "SELECT * FROM `category` ");
                while ($row1 = mysqli_fetch_array($result)) { ?>
                  <option value="<?= $row1['code']; ?>"><?= $row1['code']; ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">MÔ TẢ:</label>
              <textarea name="note" placeholder="Nhập Mô tả" class="form-control"
                required=""><?= $row['mo_ta']; ?></textarea>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" name="btn_submit" class="btn btn-primary">Lưu</button>
            </div>
        </form>
      </div>
    </section>

  </div>
<?php } ?>


<?php include('foot.php'); ?>