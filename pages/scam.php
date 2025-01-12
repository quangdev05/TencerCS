<?php
require_once('../include/head.php');
if (isset($_GET['code'])) {
    $code = $_GET['code'];
}
$result = $ketnoi->query("SELECT * FROM `ticket` WHERE `code` = '$code' AND `status` = 'scam' ");
while($row = mysqli_fetch_assoc($result)){
mysqli_query($ketnoi, "UPDATE `ticket` SET view = view + 1 WHERE `code` = '$code' ");
?>
<title>Scamer | <?=$row['username'];?></title>
<?php require_once('../include/nav.php'); ?>
<div id="main" class="main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Lừa đảo</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Scamer - <?=$row['username'];?></a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="section-gap section-scammer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="scammer-box">
                        <div class="scammer-box_title">
                            <i class="fas fa-exclamation"></i>
                            Cảnh báo lừa đảo
                        </div>
                        <div class="scammer-box_wrap">
                            <div class="scammer-item">
                                <div class="scammer-item_icon">
                                    <i class="fas fa-user-alt"></i>
                                    Họ và tên:
                                </div>
                                <div class="scammer-item_content">
                                    <?=$row['username'];?>
                                </div>
                            </div>
                            <?php
$sdt = $row['sdt'];

$sdt_hien = substr($sdt, 0, 3) . '****' . substr($sdt, -3);
?>
<div class="scammer-item">
    <div class="scammer-item_icon">
        <i class="fas fa-phone-alt"></i>
        Số điện thoại:
    </div>
    <div class="scammer-item_content">
        <?= $sdt_hien; ?> <img style="margin-left: 10px;" width="15" height="15" src="https://checkscam.vn/wp-content/themes/dkqh/a/i/121212.png" alt="Thông tin cá nhân được ẩn theo quy định của pháp luật !" title="Thông tin cá nhân được ẩn theo quy định của pháp luật !">
        <a href="javascript:void(0)">
        </a>
    </div>
</div>
<?php
$stk = $row['stk'];

$stk_hien = substr($stk, 0, 3) . '****' . substr($stk, -3);
$current_url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
                            <div class="scammer-item">
                                <div class="scammer-item_icon">
                                    <i class="fas fa-university"></i>
                                    Ngân hàng
                                </div>
                                <div class="scammer-item_content">
                                    <?=$row['ngan_hang'];?>
                                </div>
                            </div>
                            <div class="scammer-item">
                                <div class="scammer-item_icon">
                                    <i class="fas fa-credit-card"></i>
                                    Số tài khoản
                                </div>
                                <div class="scammer-item_content">
                                <?= $stk_hien; ?> <img style="margin-left: 10px;" width="15" height="15" src="https://checkscam.vn/wp-content/themes/dkqh/a/i/121212.png" alt="Thông tin cá nhân được ẩn theo quy định của pháp luật !" title="Thông tin cá nhân được ẩn theo quy định của pháp luật !">
                                    <a href="javascript:void(0)">
                                    </a>
                                </div>
                            </div>
                            <div class="scammer-item flex-wrap flex-md-nowrap">
                                <div class="scammer-item_icon">
                                    <i class="fas fa-images"></i>
                                    Ảnh chụp bằng chứng
                                </div>
                                <div class="scammer-item_content">
                                    <div class="scammer-item_content__image">
    <?php $img = mysqli_query($ketnoi,"SELECT * FROM `bangchung` WHERE `code` = '$code' ORDER BY id desc");while($bc = mysqli_fetch_assoc($img)) { ?>
                                        <div class="scammer-item_content__image-item">
                                            <a href="<?=$bc['image'];?>" data-fancybox="image-scammer">
                                                <img src="<?=$bc['image'];?>" alt="" />
                                            </a>
                                        </div>
    <?php } ?>                                    
                                    </div>
                                </div>
                            </div>
                            <div class="scammer-item flex-wrap flex-md-nowrap">
                                <div class="scammer-item_icon">
                                    <i class="fas fa-pen-square"></i>
                                    Nội dung cảnh báo
                                </div>
                                <?php
                                $solan = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `ticket` WHERE `stk` = '$stk' "))['COUNT(*)'];
                                $latestUpdate = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT `ngayupdate` FROM `ticket` WHERE `stk` = '$stk' ORDER BY `ngayupdate` DESC LIMIT 1"))['ngayupdate'];
                                ?>
                                <div class="scammer-item_content">
                                <?=$row['ly_do'];?><br><br>
                                🔎 Bài cảnh báo <b><?=$row['username'];?></b>. Duyệt ngày <b><?=$row['ngayduyet'];?></b>, cập nhật lần cuối vào ngày <b><?=$latestUpdate;?></b>, hiện đang có <b><?=$row['view'];?> lượt xem và tìm kiếm</b>. 
                                Cho đến thời điểm hiện tại thông tin <b><?=$row['username'];?>, chủ stk: <?= $stk_hien; ?></b>
                                đã bị cảnh báo <b><?= $solan ?></b> lần trên hệ thống TencerCS.<br><br>
                                __________<br>
                                📑 Nguồn: <a href="<?= $current_url ?>" target="_blank"><?= $current_url ?></a>
  <style>
    body {
      margin: 0;
      padding: 0;
      height: 200vh;
    }

    .overlay-image {
      position: absolute;
      z-index: 9999;
      opacity: 0.7;
    }

    @media (min-width: 768px) {
      .overlay-image {
        top: 345px; 
        left: 420px;
        width: 150px;
      }
    }

    @media (max-width: 767px) {
      .overlay-image {
        top: 348px;
        left: 115px;
        width: 130px;
      }
    }
  </style>
                                <img class="overlay-image" src="https://doithe24.net/images/tencer-cs/scam-alert.png" alt="Overlay Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="scammer-box">
                        <div class="scammer-box_title">
                            <i class="fas fa-user-alt"></i>
                            Người tố cáo
                        </div>
                        <div class="scammer-box_wrap">
                            <div class="scammer-item">
                                <div class="scammer-item_icon">
                                    <i class="fas fa-user-alt"></i>
                                    Họ và tên:
                                </div>
                                <div class="scammer-item_content">
                                <?=substr($row['hoten_np'], 0, 5).'*****';?>
                                </div>
                            </div>
                            <div class="scammer-item">
                                <div class="scammer-item_icon">
                                    <i class="fas fa-phone-alt"></i>
                                    Zalo liên hệ:
                                </div>
                                <div class="scammer-item_content">
                                    <?=substr($row['sdt_np'], 0, 5).'*****';?>
                                </div>
                            </div>
                            <div class="scammer-item">
                                <div class="scammer-item_icon">
                                    <i class="fas fa-sync-alt"></i>
                                    Tôi Muốn Gỡ Bài:
                                </div>
                                <div class="scammer-item_content">
                                Dùng Zalo số <b>"<?=substr($row['sdt_np'], 0, 5).'*****';?>"</b>
                                gửi <b>"Yêu Cầu Gỡ"</b> tới <a href="https://zalo.me/0969349646"target="_blank" >TencerCS<span style="color:#0000EE;"></span></a></b></div>
                                </div>
                                </div>
                                </div>
                                <div class="scammer-box">
                        <div class="scammer-box_title">
                            <i class="fas fa-user-alt"></i>
                            Danh sách Scamer
                        </div>
                        <div class="scam-list">
                        <?php
                        $i = 1;
                        $result = mysqli_query($ketnoi, "SELECT * FROM `ticket` WHERE `status` = 'scam' ORDER BY id desc limit 0, 10");
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <div class="scam-item d-flex align-items-center py-3 px-4 border bg-white">
                                <div class="scam-title">
                                    <span class="scam-title_icon">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <a href="/scamer/<?= $row['code']; ?>" class="scam-title_link">
                                        <?= $i++; ?>. <?= $row['username']; ?>
                                    </a>
                                </div>
                                <div class="scam-info ml-auto">
                                    <span class="scam-info_time">
                                        <i class="fas fa-clock"></i>
                                        <?= $row['ngay']; ?>
                                    </span>
                                    <span class="scam-info_eye">
                                        <i class="fas fa-eye"></i>
                                        <?= $row['view']; ?>
                                    </span>
                                </div>
                            </div>
                            <?php
                        } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('../include/foot.php'); } ?>
