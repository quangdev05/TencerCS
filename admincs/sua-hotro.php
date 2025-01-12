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

$AADDCC = mysqli_query($ketnoi, "SELECT * FROM `ticket` WHERE `id` = '" . $id . "' ");
while ($row = mysqli_fetch_array($AADDCC)) {
    if (isset($_POST["btn_submit"])) {
        $code = random('QWERTYUIOPASDFGHJKLZXCVBNM1234567890', '6');
        $ngay = date('d/m/Y');
        mysqli_query($ketnoi, "UPDATE `ticket` SET
    `username` = '" . $_POST['ten'] . "',
    `sdt`= '" . $_POST['sdt'] . "',
    `link_fb` = '" . $_POST['link_fb'] . "',
    `ly_do` = '" . $_POST['ly_do'] . "',
    `status` = '" . $_POST['status'] . "',
    `stk` = '" . $_POST['stk'] . "',
    `hoten_np` = '" . $_POST['hoten_np'] . "',
    `sdt_np` = '" . $_POST['sdt_np'] . "',
    `ngayupdate` = '" . $ngay . "',
    `ngan_hang` = '" . $_POST['ngan_hang'] . "' WHERE `id` = '" . $id . "' ");

        echo '<script type="text/javascript">swal("Thành Công","Save Thành Công","success");
    setTimeout(function(){ location.href = "" },500);</script>';

    }
    ?>

    <div class="row">

        <section class="col-lg-12 connectedSortable">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Sửa Scamer <a href="//<?= $site_tenweb; ?>/profile/<?= $row['code']; ?>"
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
                            <label for="exampleInputEmail1">Số Điện Thoại</label>
                            <input type="text" name="sdt" class="form-control" value="<?= $row['sdt']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Ngân hàng</label>
                            <input type="text" name="ngan_hang" class="form-control" value="<?= $row['ngan_hang']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Số tài khoản</label>
                            <input type="text" name="stk" class="form-control" value="<?= $row['stk']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Facebook</label>
                            <input type="text" name="link_fb" class="form-control" value="<?= $row['link_fb']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Người tố cáo</label>
                            <input type="text" name="hoten_np" class="form-control" value="<?= $row['hoten_np']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Zalo người tố cáo</label>
                            <input type="text" name="sdt_np" class="form-control" value="<?= $row['sdt_np']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nội dung tố cáo</label>
                            <input type="text" name="ly_do" class="form-control" value="<?= $row['ly_do']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Ngày tố cáo</label>
                            <input type="text" name="ngayduyet" class="form-control" value="<?= $row['ngay']; ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Ngày duyệt</label>
                            <input type="text" name="ngayduyet" class="form-control" value="<?= $row['ngayduyet']; ?>"
                                readonly>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Trạng thái</label>
                            <input type="text" name="status" class="form-control" value="<?= $row['status']; ?>" readonly>
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