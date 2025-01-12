<?php include('head.php');?>
<?php include('nav.php');?>

<?php
if (isset($_GET['delete'])) 
{
    $delete = $_GET['delete'];

    $create = mysqli_query($ketnoi,"DELETE FROM `cards` WHERE `id` = '".$delete."' ");

    if ($create)
    {
      echo '<script type="text/javascript">swal("Thành Công","Xóa thành công","success");setTimeout(function(){ location.href = "uytin.php" },500);</script>'; 
    }
    else
    {
      echo '<script type="text/javascript">swal("Lỗi","Lỗi máy chủ","error");setTimeout(function(){ location.href = "uytin.php" },1000);</script>'; 
    }
}
?>


<div class="row mb-2">
    <div class="col-sm-6">
    </div><!-- /.col -->
</div><!-- /.row -->

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">NHÓM TÀI KHOẢN</h3>
                <div class="text-right">
                    <a type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"
                        class="btn btn-info">TẠO HỒ SƠ</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">ID</th>
                                <th>MÃ</th>
                                <th>TÊN HỒ SƠ</th>
                                <th>AVATAR</th>
                                <th>SĐT</th>
                                <th>ID FB</th>
                                <th>WEBSITE</th>
                                <th>THỂ LOẠI</th>
                                <th>DỊCH VỤ</th>
                                <th>GDTG</th>
                                <th>THAO TÁC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$result = mysqli_query($ketnoi,"SELECT * FROM `cards` ORDER BY id desc ");
while($row = mysqli_fetch_assoc($result))
{
?>
                            <tr>
                                <td><?=$row['id'];?></td>
                                <td><?=$row['code'];?></td>
                                <td><?=$row['username'];?></td>
                                <td><?=$row['avatar'];?></td>
                                <td><?=$row['sdt'];?></td>
                                <td><?=$row['id_fb'];?></td>
                                <td><?=$row['website'];?></td>
                                <td><?=$row['dich_vu'];?></td>
                                <td><?=$row['dv'];?></td>
                                <td><?=$row['gdtg'];?></td>
                                <td>
                                    <a href="sua-uytin.php?id=<?=$row['id'];?>" class="btn btn-default">
                                        <i class="fas fa-edit"></i> Sửa
                                    </a>
                                    <a href="uytin.php?delete=<?=$row['id'];?>" class="btn btn-default">
                                        <i class="fas fa-trash"></i> Xóa
                                    </a>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                VUI LÒNG THAO TÁC CẨN THẬN
            </div>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row (main row) -->

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">TẠO HỒ SƠ UY TÍN</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">TÊN USER:</label>
                        <input type="text" class="form-control" name="title" placeholder="Nhập Tên Hồ Sơ" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ảnh AVATAR</label>
                        <input type="text" class="form-control" name="avatar"
                            placeholder="có thì ghi ko thì thôi" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">SĐT</label>
                        <input type="number" class="form-control" name="sdt"
                            placeholder="Nhập Số Điện Thoại" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ID FB</label>
                        <input type="number" class="form-control" name="idfb"
                            placeholder="Nhập id FB" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">TIỀN BẢO HIỂM:</label>
                        <input type="text" class="form-control" name="money" placeholder="Nhập Số Tiền Hồ Sơ Đã Đóng" required="">
                    </div>
                    
                    <div class="form-group">
                    <label for="exampleInputEmail1">Ngân Hàng <code>mỗi stk cách nhau bằng dấu |</code></label>
                    <input type="text" name="nganhang" class="form-control" placeholder="( MBBANK: xxx|MOMO: xxx )" >
                    </div>
                    
                    <div class="form-group">
                    <label for="exampleInputEmail1">DỊCH VỤ(mỗi dv cách nhau bằng dấu|) </label>
                    <input type="text" name="dv" class="form-control" placeholder="(bán mã nguồn|hacku)">
                    </div>
                    
                    <div class="form-group">
                    <label for="exampleInputEmail1">DỊCH VỤ TRUNG GIAN(mỗi mức giá cách nhau bằng dấu|) </label>
                    <input type="text" name="gdtg" class="form-control" placeholder="(0 – 49 Phí 1k|50 – 149 Phí 2k)">
                    </div>
                  
                    <div class="form-group">
                        <label for="exampleInputEmail1">WEBSITE</label>
                        <input type="text" class="form-control" name="website"
                            placeholder="Nhập link website" required="">
                    </div>
                    <div class="form-group">
              <label for="exampleInputEmail1">THỂ LOẠI</label>
              <select class="custom-select"  name="loai" >
                  <?php
                  $result = mysqli_query($ketnoi,"SELECT * FROM `category` ");
                  while ($row1 = mysqli_fetch_array($result) ) { ?>
                  <option value="<?=$row1['code'];?>"><?=$row1['code'];?></option>
                  <?php } ?>
                  </select>
            </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">MÔ TẢ:</label>
                        <textarea name="note" placeholder="Nhập Mô tả" class="textarea" required=""></textarea>
                    </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">ĐÓNG</button>
                <button type="submit" name="submit" class="btn btn-primary">TẠO</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<?php
if (isset($_POST["submit"])) {
$ten = $_POST["title"];
$code = xoadau($ten);
$create = mysqli_query($ketnoi,"INSERT INTO `cards` SET 
    `username` = '$ten',
    `avatar` = '".$_POST['avatar']."',
    `mo_ta` = '".$_POST['note']."',
    `sdt` = '".$_POST['sdt']."',
    `id_fb` = '".$_POST['idfb']."',
    `website` = '".$_POST['website']."',
    `money` = '".$_POST['money']."',
    `dich_vu` = '".$_POST['loai']."',
    `ngan_hang` = '".$_POST['nganhang']."',
    `gdtg` = '".$_POST['gdtg']."',
    `dv` = '".$_POST['dv']."',
    `code` = '".$code."'  ");

  if($create)
  {
    echo '<script type="text/javascript">swal("Thành Công","Thêm Thành Công","success");
            setTimeout(function(){ location.href = "" },1000);</script>';
  }
  else
  {
    echo '<script type="text/javascript">swal("Lỗi","Lỗi máy chủ","error");</script>'; 
  }
}

?>

<?php include('foot.php');?>