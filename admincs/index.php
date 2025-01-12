<?php include('head.php');?>
<?php include('nav.php');?>

<div class="row mb-2">
    <div class="col-sm-12">
        <br>
       
    </div><!-- /.col -->
</div><!-- /.row -->

<?php
$don = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `ticket` WHERE `status` = 'xuly' ")) ['COUNT(*)'];
$uytin = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `cards`")) ['COUNT(*)'];
$dv = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `category`")) ['COUNT(*)'];

?>

<div class="row">

<div class="col-lg-6 col-6">
					
						<div class="card card-service box-service-panel">
						    <div class="card-body" data-toggle="tooltip" data-placement="bottom" title="Trao đổi người theo dõi profile để kiếm tiền.">
						        <div class="box-body text-center">
						           <a>Tố Cáo Scam:</a><br>
				                	<h3><?=$don?></h3>
				                    <hr>
				                    <a rel="nofollow" href="/admincs/ho-tro.php"><button class="btn btn-danger btn-block">Xem Ngay</button></a>
				                </div>
						    </div>
						</div>
			    </div>

<div class="col-lg-6 col-6">
						<div class="card card-service box-service-panel">
						    <div class="card-body" data-toggle="tooltip" data-placement="bottom" title="Trao đổi người theo dõi profile để kiếm tiền.">
						        <div class="box-body text-center">
						           <a>Hồ Sơ Uy Tín:</a><br>
				                	<h3><?=$uytin?></h3>
				                    <hr>
				                    <a rel="nofollow" href="/admincs/uytin.php"><button class="btn btn-success btn-block">Xem Ngay</button></a>
				                </div>
						    </div>
						</div>
			    </div>
			</div>    
<script>
  $(function () {
    $("#datatable2").DataTable({
      "responsive": false,
      "autoWidth": false,
    });
  });
</script>
<?php include('foot.php');?>