<?php require_once('../include/head.php'); ?>
<?php require_once('../include/nav.php');
if (isset($_GET['code'])) {
    $id = $_GET['code'];
}
$result = mysqli_query($ketnoi, "SELECT * FROM `cards` WHERE `code` = '" . $id . "' ORDER BY id desc limit 0, 1");
while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <title><?= $row['username']; ?> | Bảo Hiểm Hồ Sơ Uy Tín</title>
    <div id="main" class="main">


        <div class="section-gap section-profile">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-10">
                        <div class="profile-inner">
                            <div class="profile-avatar">
                                <img src="<?= $row['avatar']; ?> alt="">
                        </div>
                        <div class=" profile-title">
                                <?= $row['username']; ?> <img src="https://i.imgur.com/Fcupuom.gif" alt="Đã Xác Minh"
                                    style="height: 23px;">
                            </div>
                            <?php
                            $fb_accounts = explode('|', $row['id_fb']);
                            $fb_main = $fb_accounts[0];
                            $fb_secondary = isset($fb_accounts[1]) ? $fb_accounts[1] : '';
                            ?>
                            <div class="profile-buttons">
                                <div class="btn-checkmess">
                                    <a href="https://m.me/<?= htmlspecialchars($fb_main); ?>/"
                                        class="btn-theme btn-theme_primary" target="_blank">
                                        <i class="fab fa-facebook-messenger"></i>
                                        Check Mess
                                        <span></span>
                                    </a>
                                    <a href="http://m.me/<?= htmlspecialchars($fb_main); ?>/" class="description-hidden">
                                        <span>Ấn vào "Check Mess" nhắn tin cho GDV để chắc chắn rằng bạn đang giao dịch với
                                            Real</span>
                                        <button>
                                            Đóng
                                        </button>
                                    </a>
                                    <div class="description-overlay"></div>
                                </div>
                                <a href="https://facebook.com/<?= htmlspecialchars($fb_main); ?>/"
                                    class="btn-theme btn-theme_primary" target="_blank">
                                    <i class="fab fa-facebook-f "></i>
                                    Check Facebook
                                    <!-- <a href="https://t.me/tencercs" class="btn-theme btn-theme_primary" target="_blank">
                                    <i class="fab fa-telegram "></i>
                                    Bot Auto Check -->
                                    <span style="top: -28.9062px; left: 424.172px;"></span>
                                </a>
                            </div>
                            <div class="profile-boxs">
                                <div class="row row-col-15">
                                    <div class="col-md-6">
                                        <div class="profile-box"
                                            style="border: 1.5px solid #157DEC;border-radius: 10px;-moz-border-radius: 24px;-webkit-border-radius:20px;">
                                            <div class="profile-box_content">
                                                <div class="profile-box_content__title">
                                                    Thông tin liên hệ
                                                </div>
                                                <div class="profile-box_content__list">
                                                    <p>
                                                        <span><i class="fab fa-facebook-f"></i></span>
                                                        Facebook:
                                                        <a href="https://facebook.com/<?= htmlspecialchars($fb_main); ?>"
                                                            target="_blank">
                                                            <?= htmlspecialchars($fb_main); ?>
                                                        </a>
                                                    </p>
                                                    <?php if (!empty($fb_secondary)): ?>
                                                        <p>
                                                            <span><i class="fab fa-facebook-f"></i></span>
                                                            Facebook (phụ):
                                                            <a href="https://facebook.com/<?= htmlspecialchars($fb_secondary); ?>"
                                                                target="_blank">
                                                                <?= htmlspecialchars($fb_secondary); ?>
                                                            </a>
                                                        </p>
                                                    <?php endif; ?>
                                                    <p>
                                                        <span>

                                                            <img src="/assets/default/images/zalo.webp" alt="">
                                                        </span>
                                                        Zalo:
                                                        <a href="https://zalo.me/<?= $row['sdt']; ?>/" target="_blank">
                                                            <?= $row['sdt']; ?>
                                                        </a>
                                                    </p>
                                                    <?php
                                                    $websites = explode('|', $row['website']);
                                                    if (count($websites) === 1) {
                                                        echo '<p>
            <span>
                <i class="far fa-globe"></i>
            </span>
            Website: <a href="//' . $websites[0] . '/" target="_blank">' . $websites[0] . '</a>
          </p>';
                                                    } else {
                                                        echo '<p>
            <span>
                <i class="far fa-globe"></i>
            </span>
            Website: <br>';
                                                        foreach ($websites as $website) {
                                                            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="//' . $website . '/" target="_blank">' . $website . '</a><br>';
                                                        }
                                                        echo '</p>';
                                                    }
                                                    ?>

                                                </div>
                                                <div class="profile-box_content__image">
                                                    <img src="https://quickchart.io/qr?text=https://facebook.com/<?= htmlspecialchars($fb_main); ?>"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="profile-box"
                                            style="border: 1.5px solid #157DEC;border-radius: 10px;-moz-border-radius: 24px;-webkit-border-radius:20px;">
                                            <div class="profile-box_content">
                                                <div class="profile-box_content__title">
                                                    Quỹ Bảo Hiểm <?= $site_tenweb; ?>
                                                </div>
                                                <div class="profile-box_content__desc">
                                                    <b>Khách hàng sẽ được <b><strong
                                                                class="text-success"><?= $site_tenweb; ?></strong></b> bảo
                                                        đảm an toàn cho bạn với số tiền nằm trong Quỹ Bảo Hiểm
                                                        <strong class="text-danger""><?= ($row['money']); ?></strong> của <strong><?= $row['username']; ?></strong></p>
                                            </div>
                                            <div class=" profile-box_content__image">
                                                            <img src="https://cdn-icons-png.flaticon.com/512/508/508250.png"
                                                                alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-boxs">
                                <div class="profile-box profile-box_nopr"
                                    style="border: 1.5px solid #157DEC;border-radius: 10px;-moz-border-radius: 24px;-webkit-border-radius:20px;">
                                    <div class="profile-box_content">
                                        <div class="profile-box_content__title">
                                            <span style="color: #0babe0;"> Tài Khoản Ngân Hàng Của <strong
                                                    class="text-danger""><?= $row['username']; ?></strong>
                                    :</div>
                                   <ul class=" pl-3 mb-0">
                                                    <?php
                                                    $atm = $row['ngan_hang'];
                                                    $delimiters = array("|");
                                                    $atm = str_replace($delimiters, $delimiters[0], $atm);
                                                    $arrKeyword = explode($delimiters[0], $atm);
                                                    foreach ($arrKeyword as $key) {
                                                        echo '<li>' . $key . '</li>';
                                                    }
                                                    ?>
                                                    </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-boxs">
                                    <div class="profile-box profile-box_nopr"
                                        style="border: 1.5px solid #157DEC;border-radius: 10px;-moz-border-radius: 24px;-webkit-border-radius:20px;">
                                        <div class="profile-box_content">
                                            <div class="profile-box_content__title">
                                                <font color="#157DEC">Dịch Vụ Cung Cấp</font>
                                            </div>
                                            <ul class="pl-3 mb-0">
                                                <?php
                                                $atm = $row['dv'];
                                                $delimiters = array("|");
                                                $atm = str_replace($delimiters, $delimiters[0], $atm);
                                                $arrKeyword = explode($delimiters[0], $atm);
                                                foreach ($arrKeyword as $key) {
                                                    echo '<li>' . $key . '</li>';
                                                }
                                                ?>
                                                <style>
                                                    body {
                                                        margin: 0;
                                                        padding: 0;
                                                        height: 200vh;
                                                    }

                                                    .overlay-image {
                                                        position: absolute;
                                                        z-index: 9999;
                                                        opacity: 0.5;
                                                    }

                                                    @media (min-width: 768px) {
                                                        .overlay-image {
                                                            top: 30px;
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
                                                <img class="overlay-image"
                                                    src="https://doithe24.net/images/tencer-cs/uytin.png"
                                                    alt="Overlay Image">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-boxs">
                                    <div class="profile-box profile-box_nopr"
                                        style="border: 1.5px solid #157DEC;border-radius: 10px;-moz-border-radius: 24px;-webkit-border-radius:20px;">
                                        <div class="profile-box_content">
                                            <div class="profile-box_content__title">
                                                <font color="#157DEC">Dịch Vụ Trung Gian</font>
                                            </div>
                                            <ul class="pl-3 mb-0">
                                                <?php
                                                $atm = $row['gdtg'];
                                                $delimiters = array("|");
                                                $atm = str_replace($delimiters, $delimiters[0], $atm);
                                                $arrKeyword = explode($delimiters[0], $atm);
                                                foreach ($arrKeyword as $key) {
                                                    echo '<li>' . $key . '</li>';
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-boxs">
                                    <div class="profile-box profile-box_nopr"
                                        style="border: 1.5px solid #157DEC;border-radius: 10px;-moz-border-radius: 24px;-webkit-border-radius:20px;">
                                        <div class="profile-box_content">
                                            <div class="profile-box_content__title">
                                                <font color="#157DEC">Mô Tả</font>
                                            </div>
                                            <div class="mb-3 ">
                                                <?= $row['mo_ta']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-boxs">
                                    <div class="profile-box profile-box_nopr"
                                        style="border: 1.5px solid #157DEC;border-radius: 10px;-moz-border-radius: 24px;-webkit-border-radius:20px;">
                                        <div class="profile-box_content">
                                            <div class="profile-box_content__title">
                                                <font color="#157DEC">Lưu ý</font>
                                            </div>
                                            <p>Tránh trường hợp Nick Fake, Ảnh Fake, Link Fake, Rửa Tiền…. Người dùng hãy
                                                nhớ Chát đúng Facebook, Gọi đúng SĐT, Chuyển khoản đúng những STK có ở trong
                                                trong link bảo hiểm này. <b><strong class="text-success"> CS.DOITHE24.NET
                                                    </strong> cam kết bạn sẽ an toàn trong mọi giao dịch!<p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="profile-desc">
                                Mọi giao dịch của bạn với <b>"<strong
                                        class="text-danger""><?= $row['username']; ?></strong>" </b> sẽ được <b><strong
                                                class="text-success"><?= $site_tenweb; ?> </strong>
                                            Bảo vệ</b> với số tiền nằm trong <strong>Quỹ bảo hiểm <strong
                                                class="text-danger""><?= ($row['money']); ?></strong> khi bạn
                            tuân theo
                            <a href=" /post/dieu-khoan.html">Điều Khoản Sử Dụng</a>
                                                của <strong class="text-success"> <?= $site_tenweb; ?> </strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('../include/foot.php'); ?>
<?php } ?>