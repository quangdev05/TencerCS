<?php

$total_ticket_dang_xu_ly = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `ticket` WHERE `status` = 'xuly' ")) ['COUNT(*)'];
?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">Trang chủ</a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">0</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
        </li>
    </ul>
</nav>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/" class="brand-link">
        <span class="brand-text font-weight-light">QUAY VỀ WEBSITE</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="index.php" class="nav-link active">
                        <p>
                            Trang chủ
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admincs" class="nav-link">
                                <p><i class="nav-icon fa fa-home"></i> TRANG CHỦ </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="ho-tro.php" class="nav-link">
                                <p><i class="nav-icon fa fa-envelope-open"></i> KIỂM DUYỆT ĐƠN <span
                                        class="badge badge-danger"><?=$total_ticket_dang_xu_ly;?></span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="uytin.php" class="nav-link">
                                <p><i class="nav-icon fa fa-plus"></i> THÊM HỒ SƠ UY TÍN </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="chuyen-muc.php" class="nav-link">
                                <p><i class="nav-icon fa fa-plus" aria-hidden="true"></i> THÊM DỊCH VỤ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="cai-dat.php" class="nav-link">
                                <p><i class="nav-icon fa fa-cogs" aria-hidden="true"></i> CÀI ĐẶT WEBSITE</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="cai-dat.php" class="nav-link">
                                <p><i class="nav-icon fa fa-sign-out-alt" aria-hidden="true"></i> ĐĂNG XUẤT</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <?php 
            if(isset($_POST['btnUpFile']))
            {
              $uid = check_string($_POST['uid']);
              if (check_zip('file_zip') == true)
              {
                $uploads_dir = '../backup/';
                $tmp_name = $_FILES['file_zip']['tmp_name'];
                $create = move_uploaded_file($tmp_name, "$uploads_dir/$uid.zip");
                if($create)
                {
                  echo '<script type="text/javascript">swal("Thành Công","Upfile thành công","success");setTimeout(function(){ location.href = "" },1000);</script>'; 
                  die;
                }
              }
            }
            ?>
            <!-- Modal -->
            <div class="modal fade" id="modalDownBackupVia" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">UPFILE BACKUP VIA</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputFile">Upload File Backup (file phải được nén thành ZIP)</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile"
                                                name="file_zip" >
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">UID BACKUP</label>
                                <input type="text" class="form-control" name="uid" placeholder="Nhập UID VIA" required>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">HỦY BỎ</button>
                                <button type="submit" name="btnUpFile"
                                    class="btn btn-primary">UPFILE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>