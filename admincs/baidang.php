<?php include('head.php');?>
<?php include('nav.php');?>



        <div class="row mb-2">
          <div class="col-sm-6">

          </div>
        </div>
<?php
if (isset($_GET['xoa'])) {
    $delete = $_GET['xoa'];

    $create = mysqli_query($ketnoi,"DELETE FROM `tmanh` WHERE `id` = '".$delete."' ");

    if ($create) {
      echo '<script type="text/javascript">swal("Thành Công","Xóa thành công","success");setTimeout(function(){ location.href = "baidang.php" },500);</script>'; 
    } else {
      echo '<script type="text/javascript">swal("Lỗi","Lỗi máy chủ","error");setTimeout(function(){ location.href = "baidang.php" },1000);</script>'; 
    }
}
?>

<?php
    if (isset($_GET['duyet'])) {
          $create = mysqli_query($ketnoi,"UPDATE `tmanh` SET 
            `status` = 'hoantat' WHERE `id` = '".$_GET['duyet']."' ");
          if ($create) {
            echo '<script type="text/javascript">swal("Thành Công","DUYỆT THÀNH CÔNG","success");setTimeout(function(){ location.href = "baidang.php" },1000);</script>'; 
          } else {
            echo '<script type="text/javascript">swal("Lỗi","LỖI MÁY CHỦ, VUI LÒNG LIÊN HỆ KỸ THUẬT VIÊN","error");setTimeout(function(){ location.href = "baidang.php" },1000);</script>'; 
          }
    }
    
    
    if (isset($_GET['xuly'])) {
          $create = mysqli_query($ketnoi,"UPDATE `tmanh` SET 
            `status` = 'xuly' WHERE `id` = '".$_GET['xuly']."' ");
          if ($create) {
            echo '<script type="text/javascript">swal("Thành Công","XỬ LÝ THÀNH CÔNG","success");setTimeout(function(){ location.href = "baidang.php" },1000);</script>'; 
          } else {
            echo '<script type="text/javascript">swal("Lỗi","LỖI MÁY CHỦ, VUI LÒNG LIÊN HỆ KỸ THUẬT VIÊN","error");setTimeout(function(){ location.href = "baidang.php" },1000);</script>'; 
          }
    }
?>
<script> 
$(document).ready(function(){
setInterval(function(){
      $("#table_auto").load(window.location.href + " #table_auto" );
}, 1000);
});
</script>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DANH SÁCH BÀI QUẢNG CÁO</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                <table id="datatable1" class="table table-bordered table-striped">
                  <thead>                  
                    <tr>
                      <th class="text-center">TITLE</th>
                      <th class="text-center">NOTE</th>
                      <th class="text-center">ẢNH</th>
                      <th class="text-center">STATUS</th>
                      <th class="text-center">THAO TÁC</th>
                    </tr>
                  </thead>
                  <tbody>
<?php
$result = mysqli_query($ketnoi,"SELECT * FROM `tmanh` ORDER BY id desc limit 0, 100000");
while($row = mysqli_fetch_assoc($result))
{

?>
                    <tr>
                      <td class="text-center"><?=$row['title'];?></td>
                      <td><?=$row['note'];?></td>
                      <td class="text-center"><img src="<?=$row['anh'];?>" alt="demo1" height="80px"></td>
                      <td class="text-center">
                      <?php
                        if ($row['status'] == 'xuly')
                          {
                            echo '<span class="badge bg-primary"> CHỜ DUYỆT</span>';
                          }
                          else if ($row['status'] == 'hoantat')
                          {
                            echo '<span class="badge bg-success"> ĐÃ DUYỆT</span>';
                          }

                      ?>
                      </td>
                      <td class="text-center">
                        <?php if($row['status'] == "hoantat") { ?><a href="?xuly=<?=$row['id'];?>" class="btn btn-default">
                          <i class="fas fa-times" aria-hidden="true"></i>
                        </a><?php } else { ?><a href="?duyet=<?=$row['id'];?>" class="btn btn-default">
                          <i class="fa fa-check" aria-hidden="true"></i>
                        </a><?php } ?>
                        <a href="?xoa=<?=$row['id'];?>" class="btn btn-default">
                          XÓA
                        </a>
                      </td>  
                    </tr>
<?php }?>
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
     
<?php include('foot.php');?>