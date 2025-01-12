<?php require_once('head.php');?>
<?php require_once('nav.php');?>
<?php
    if (isset($_POST["submit"]) && isset($_SESSION['admin']))
    {
        
      $create = $ketnoi->query("UPDATE `setting` SET
        `site_logo` = '".$_POST['site_logo']."',
        `facebook` = '".$_POST['facebook']."',
        `sdt_admin` = '".$_POST['site_sdt_momo']."',
        `site_tenweb` = '".$_POST['site_tenweb']."',
        `modal` = '".$_POST['modal']."',
        `site_mota` = '".$_POST['site_mota']."' ");

      if ($create)
      {
        echo '<script type="text/javascript">swal("Thành Công","Lưu thành công","success");setTimeout(function(){ location.href = "" },1000);</script>'; 
        die;
      }
      else
      {
        echo '<script type="text/javascript">swal("Thất Bại","Lỗi máy chủ","error");setTimeout(function(){ location.href = "" },1000);</script>'; 
        die;
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
            <form class="form-horizontal" enctype="multipart/form-data" action="" method="post">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-center">Thông Tin</h3>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh Logo Web</label>
                                <input type="text" class="form-control" name="site_logo" placeholder="logo"
                                    value="<?=$site_logo;?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">TÊN WEB</label>
                                <input type="text" class="form-control" name="site_tenweb" placeholder="SERVICEADMIN.INFO"
                                    value="<?=$site_tenweb;?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">MÔ TẢ</label>
                                <input type="text" class="form-control" name="site_mota"
                                    placeholder="Hệ thống tố cáo scamer" value="<?=$site_mota;?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Link Fb Admin</label>
                                <input type="url" class="form-control" name="facebook" placeholder="https://www.facebook.com/namvo.az"
                                    value="<?=$site['facebook'];?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">SDT Admin</label>
                                <input type="text" class="form-control" placeholder="Nhập số điện thoại"
                                    name="site_sdt_momo" value="<?=$site_sdt_momo;?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Setting TB</label>
                                <textarea name="modal" placeholder="Nhập Mô tả" class="textarea"><?=$site['modal'];?></textarea>
                            </div>
                        </div>
                        
                        
                    <button name="submit" type="submit" class="btn btn-info btn-block">LƯU THAY ĐỔI</button>
                
                    </div>
            </form>
        </div>
    </div>
    <!-- /.card -->
</div>


 <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" action="" method="post">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-center">Thay Đổi Thông Tin ADMIN</h3>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tài Khoản Admin</label>
                                <input type="text" class="form-control" name="user" placeholder="Nhập Tài Khoản"
                                    value="<?=$user['username'];?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pass Admin</label>
                                <input type="text" class="form-control" placeholder="Nhập Mật Khẩu"
                                    name="pass" value="<?=$user['password'];?>">
                            </div>
                        </div>
                    <button name="luupass" type="submit" class="btn btn-success btn-block">THAY ĐỔI</button>
                    </div>
            </form>
        </div>
    </div>
</div>
<?php
if(isset($_POST['luupass'])) {
$create = $ketnoi->query("UPDATE `users` SET
    `username` = '".$_POST['user']."',
    `password` = '".$_POST['pass']."' ");

if ($create) {
echo '<script type="text/javascript">swal("Thành Công","Thay Đổi thành công","success");setTimeout(function(){ location.href = "" },1000);</script>'; 
die;
} else {
echo '<script type="text/javascript">swal("Thất Bại","Lỗi máy chủ","error");setTimeout(function(){ location.href = "" },1000);</script>'; 
die;
}


}
?>

<!-- /.col -->
</div>
<!-- /.row (main row) -->
<?php require_once('foot.php');?>
<script src="dist/jquery-asColor.js"></script>
<script src="dist/jquery-asGradient.js"></script>
<script src="dist/jquery-asColorPicker.js"></script>
<script src="dist/colorpicker.js"></script>
<script>
$(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
    })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', {
        'placeholder': 'mm/dd/yyyy'
    })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY hh:mm A'
        }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker({
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month')
                    .endOf('month')
                ]
            },
            startDate: moment().subtract(29, 'days'),
            endDate: moment()
        },
        function(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
        format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function() {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

})
</script>