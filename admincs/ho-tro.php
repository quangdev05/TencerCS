<?php include('head.php'); ?>
<?php include('nav.php'); ?>



<div class="row mb-2">
  <div class="col-sm-6">

  </div>
</div>
<?php
if (isset($_GET['delete'])) {
  $delete = $_GET['delete'];

  $create = mysqli_query($ketnoi, "DELETE FROM `ticket` WHERE `id` = '" . $delete . "' ");

  if ($create) {
    echo '<script type="text/javascript">swal("Thành Công","Xóa thành công","success");setTimeout(function(){ location.href = "ho-tro.php" },500);</script>';
  } else {
    echo '<script type="text/javascript">swal("Lỗi","Lỗi máy chủ","error");setTimeout(function(){ location.href = "ho-tro.php" },1000);</script>';
  }
}
?>

<?php
if (isset($_GET['scam'])) {
  $create = mysqli_query($ketnoi, "UPDATE `ticket` SET 
            `status` = 'scam' WHERE `id` = '" . $_GET['scam'] . "' ");
  $ngay = date('d/m/Y');
  $create = mysqli_query($ketnoi, "UPDATE `ticket` SET 
            `ngayduyet` = '$ngay' WHERE `id` = '" . $_GET['scam'] . "' ");
  $create = mysqli_query($ketnoi, "UPDATE `ticket` SET 
            `ngayupdate` = '$ngay' WHERE `id` = '" . $_GET['scam'] . "' ");
  if ($create) {
    echo '<script type="text/javascript">swal("Thành Công","DUYỆT THÀNH CÔNG","success");setTimeout(function(){ location.href = "ho-tro.php" },1000);</script>';
  } else {
    echo '<script type="text/javascript">swal("Lỗi","LỖI MÁY CHỦ, VUI LÒNG LIÊN HỆ KỸ THUẬT VIÊN","error");setTimeout(function(){ location.href = "ho-tro.php" },1000);</script>';
  }
}
?>
<script>
  $(document).ready(function () {
    setInterval(function () {
      $("#table_auto").load(window.location.href + " #table_auto");
    }, 1000);
  });
</script>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">DANH SÁCH ĐƠN TỐ CÁO</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="table-responsive">
          <table id="datatable1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center">ID</th>
                <th class="text-center">HỌ TÊN</th>
                <th class="text-center">SĐT</th>
                <th class="text-center">STK</th>
                <th class="text-center">NGÂN HÀNG</th>
                <th class="text-center">FACEBOOK</th>
                <th class="text-center">NỘI DUNG TỐ CÁO</th>
                <th class="text-center">ẢNH</th>
                <th class="text-center">NGƯỜI TỐ CÁO</th>
                <th class="text-center">ZALO</th>
                <th class="text-center">NGÀY TỐ CÁO</th>
                <th class="text-center">NGÀY DUYỆT</th>
                <th class="text-center">STATUS</th>
                <th class="text-center">THAO TÁC</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $result = mysqli_query($ketnoi, "SELECT * FROM `ticket` ORDER BY id desc limit 0, 100000");
              while ($row = mysqli_fetch_assoc($result)) {

                ?>
                <tr>
                  <td class="text-center"><?= $row['id']; ?></td>
                  <td class="text-center"><?= $row['username']; ?></td>
                  <td class="text-center"><?= $row['sdt']; ?></td>
                  <td class="text-center"><?= $row['stk']; ?></td>
                  <td class="text-center"><?= $row['ngan_hang']; ?></td>
                  <td class="text-center"><?= $row['link_fb']; ?></td>
                  <td class="text-center"><?= $row['ly_do']; ?></td>
                  <td class="text-center">
                    <?php foreach (mysqli_query($ketnoi, "SELECT * FROM `bangchung` WHERE `code` = '" . $row['code'] . "'") as $img) { ?>
                      <a href="<?= $img['image']; ?>" target="_blank"><Button
                          class="btn btn-sm btn-success">Xem</Button></a>
                    <?php } ?>
                  </td>
                  <td class="text-center"><?= $row['hoten_np']; ?></td>
                  <td class="text-center"><?= $row['sdt_np']; ?></td>
                  <td class="text-center"><?= $row['ngay']; ?></td>
                  <td class="text-center"><?= $row['ngayduyet']; ?></td>
                  <td class="text-center">
                    <?php
                    if ($row['status'] == 'xuly') {
                      echo '<span class="badge bg-primary"> CHỜ DUYỆT</span>';
                    } else if ($row['status'] == 'scam') {
                      echo '<span class="badge bg-success"> ĐÃ DUYỆT</span>';
                    }

                    ?>
                  </td>
                  <td class="text-center">
                    <a href="ho-tro.php?scam=<?= $row['id']; ?>" class="btn btn-default">
                      <i class="fa fa-check" aria-hidden="true"></i>
                    </a>
                    <a href="sua-hotro.php?id=<?= $row['id']; ?>" class="btn btn-default">
                      <i class="fas fa-edit"></i> Sửa
                    </a>
                    <a href="ho-tro.php?delete=<?= $row['id']; ?>" class="btn btn-default">
                      XÓA
                    </a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row (main row) -->

<?php include('foot.php'); ?>