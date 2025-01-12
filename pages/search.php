<?php require_once('../include/head.php'); ?>
<?php
if (isset($_GET['query'])) {
    $search = htmlspecialchars($_GET['query']);
    $sql = mysqli_query($ketnoi, "SELECT * FROM `ticket` WHERE (`stk` like '%$search%') OR (`sdt` like '%$search%') AND `status` = 'scam' ");
    $num = mysqli_num_rows($sql);
    $don = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `ticket` WHERE `status` = 'scam' "))['COUNT(*)'];
    $don2 = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `ticket` WHERE `status` = 'xuly' "))['COUNT(*)'];
    ?>
    <title>Dịch vụ uy tín</title>
    <?php require_once('../include/nav.php'); ?>
    <div id="main" class="main">
        <div class="section-gap section-intro">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <div class="title">
                                KIỂM TRA &amp; TỐ CÁO SCAMMER
                            </div>
                            <div class="line"></div>
                            <div class="desc">
                                <p>Check&nbsp;<strong>"SĐT, STK Ngân Hàng..."</strong>&nbsp;trước khi giao dịch, bằng cách
                                    nhập vào&nbsp;<strong>"ô Tìm Kiếm"</strong>.<br />Hiện có&nbsp;<strong><?= $don ?> dữ
                                        liệu
                                        Scam &amp; <?= $don2 ?> đơn tố cáo đang chờ duyệt</strong>, sẽ giúp bạn mua
                                    bán an
                                    toàn hơn khi online !!!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <form method="GET" action="search">
                                    <div class="form-group position-relative">
                                        <input type="text" class="form-control" name="query"
                                            placeholder="Nhập số điện thoại, số tài khoản ngân hàng ...">
                                        <button type="submit">
                                            <i class="far fa-search"></i>
                                        </button>
                                    </div>
                                    <a href="/service/denounce" class="btn-theme btn-theme_primary">
                                        Gửi Tố Cáo Scam
                                        <span></span>
                                    </a>
                                    <a href="service/reputation" class="btn-theme btn-theme_success">
                                        Check Quỹ Bảo Hiểm
                                        <span></span>
                                    </a>
                                </form>
                            </div>

                            <div class="col-lg-6">
                                <div class="intro-image">
                                    <img src="https://doithe24.net/images/tencer-cs/logo.png" class="w-51 img-fluid h-auto" alt="" />
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="section-heading mt-4">
                            <div class="desc">
                                <h4>Tìm thấy <?= $num; ?> thông tin lừa đảo liên quan đến: "<?= $search; ?>"</h4>
                            </div>
                        </div>
                        <?php
                        $i = 1;
                        foreach ($sql as $row) {
                            ?>
                            <div class="scam-list">
                                <div class="scam-item d-flex align-items-center py-3 px-4 border bg-white">
                                    <div class="scam-title">
                                        <span class="scam-title_icon">
                                            <i class="fas fa-user"></i>
                                        </span>
                                        <a href="/scamer/<?= $row['code']; ?>" class="scam-title_link">
                                            <?= $row['username']; ?>
                                        </a>
                                    </div>
                                    <div class="scam-info ml-auto">
                                        <span class="scam-info_time">
                                            <i class="fas fa-clock"></i>
                                            <?= $row['ngay']; ?>
                                        </span>
                                        <span class="scam-info_phone">
                                            <i class="fas fa-money-bill-alt"></i>
                                            <?= $row['stk']; ?>
                                        </span>
                                        <span class="scam-info_eye">
                                            <i class="fas fa-eye"></i>
                                            <?= $row['view']; ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('../include/foot.php');
} ?>