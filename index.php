<?php require_once('include/head.php'); ?>
<title>Trang Chủ</title>
<?php require_once('include/nav.php');
$don = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `ticket` WHERE `status` = 'scam' "))['COUNT(*)'];
$don2 = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `ticket` WHERE `status` = 'xuly' "))['COUNT(*)'];
?>
<div id="main" class="main">

    <div class="section-gap section-intro">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <div class="title">
                            KIỂM TRA &amp; TỐ CÁO SCAMMER
                        </div>
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
                            <form method="GET" action="/scam/search">
                                <div class="form-group position-relative">
                                    <input type="text" class="form-control" name="query"
                                        placeholder="Nhập số điện thoại, số tài khoản ngân hàng ...">
                                    <button type="submit">
                                        <i class="far fa-search"></i>
                                    </button>
                                </div>
                                <a href="scam/create" class="btn-theme btn-theme_primary">
                                    TỐ CÁO LỪA ĐẢO
                                    <span></span>
                                </a>
                                <a href="trust-services" class="btn-theme btn-theme_success">
                                    XEM QUỸ BẢO HIỂM
                                    <span></span>
                                </a>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <div class="intro-image">
                                <img src="https://doithe24.net/images/tencer-cs/logo.png" class="w-51 img-fluid h-auto" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="section-heading">
                        <div class="title">
                            <?= $don; ?> SCAM BỊ TỐ CÁO: <?= date('d/m/Y'); ?>
                        </div>
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
    <div class="section-gap section-service">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <div class="title">
                            Dịch Vụ Nổi Bật
                        </div>
                        <div class="line"></div>
                        <div class="desc">
                            Các tin tức nổi bật về tình trạng scam hiện nay. Hãy đọc tin tức để phòng hờ các kẻ xấu lợi
                            dụng scam
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row row-col-10">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="service-card">
                                <div class="service-bg_main"></div>
                                <div class="service-bg_before"></div>
                                <div class="service-bg_after"></div>
                                <div class="service-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="service-content">
                                    <a href="/" class="service-content_title">
                                        Kiểm Tra Lừa Đảo
                                    </a>
                                    <div class="service-content_desc">
                                        Bạn chỉ cần nhập SDT, STK ngân hàng, thông tin của scammer vào trong ô tìm kiếm
                                        sẽ được phơi bày
                                    </div>
                                </div>
                                <div class="service-action">
                                    <a href="/" class="btn-theme btn-theme_white">
                                        Truy Cập
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="service-card">
                                <div class="service-bg_main"></div>
                                <div class="service-bg_before"></div>
                                <div class="service-bg_after"></div>
                                <div class="service-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="service-content">
                                    <a href="/scam/create" class="service-content_title">
                                        Tố cáo lừa đảo
                                    </a>
                                    <div class="service-content_desc">
                                        Bạn muốn tố cáo một ai đó đang lừa đảo bạn ,đã đủ chứng cứ để kẻ lừa đảo phải
                                        chịu hình phạt
                                    </div>
                                </div>
                                <div class="service-action">
                                    <a href="/scam/create" class="btn-theme btn-theme_white">
                                        Tố cáo
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="service-card">
                                <div class="service-bg_main"></div>
                                <div class="service-bg_before"></div>
                                <div class="service-bg_after"></div>
                                <div class="service-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="service-content">
                                    <a href="/trust-services" class="service-content_title">
                                        Check quỹ bảo hiểm
                                    </a>
                                    <div class="service-content_desc">
                                        Check quỹ bảo hiểm được Admin VietNam đảm bảo xác nhận uy tín trên từng giao
                                        dịch
                                    </div>
                                </div>
                                <div class="service-action">
                                    <a href="/trust-services" class="btn-theme btn-theme_white">
                                        Check quỹ
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="service-card">
                                <div class="service-bg_main"></div>
                                <div class="service-bg_before"></div>
                                <div class="service-bg_after"></div>
                                <div class="service-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="service-content">
                                    <a href="https://thesieuviet.net/" class="service-content_title">
                                        THESIEUVIET.NET
                                    </a>
                                    <div class="service-content_desc">
                                        GẠCH THẺ UY TÍN THẤP NHẤT THỊ TRƯỜNG
                                    </div>
                                </div>
                                <div class="service-action">
                                    <a href="https://thesieuviet.net/" class="btn-theme btn-theme_white">
                                        Truy Cập
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="section-gap section-article">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <div class="title">
                                Tin tức nổi bật
                            </div>
                            <div class="line"></div>
                            <div class="desc">
                                Các tin tức nổi bật về tình trạng scam hiện nay. Hãy đọc tin tức để phòng hờ các kẻ xấu lợi dụng scam
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row row-col-10">
                                                        <div class="col-12 col-sm-6 col-lg-3">
                                <a href="https://ramdom8k.click" class="article-card card">
                                    <div class="card-header">
                                        <img src="img-pqn/bg-scam.png"
                                             class="mw-100 image-cover transition-default">
                                    </div>
                                    <div class="card-body py-0 d-flex flex-column">
                                        <div class="card-meta">
                                            Ngày đăng:&nbsp;21-12-2022
                                        </div>
                                        <div class="card-title">
                                            Đổi thẻ cào thành tiền mặt
                                        </div>
                                        <div class="card-text">
                                            
                                        </div>
                                        <div class="card-link mt-auto">
                                            Xem chi tiết <i class="far fa-long-arrow-alt-right"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                                            <div class="col-12 col-sm-6 col-lg-3">
                                <a href="https://www.facebook.com/namvo.az" class="article-card card">
                                    <div class="card-header">
                                        <img src="img-pqn/bg-scam.png"
                                             class="mw-100 image-cover transition-default">
                                    </div>
                                    <div class="card-body py-0 d-flex flex-column">
                                        <div class="card-meta">
                                            Ngày đăng:&nbsp;14-03-2022
                                        </div>
                                        <div class="card-title">
                                            Supper Team Admin VietNam
                                        </div>
                                        <div class="card-text">
                                            Super Team Admin
                                        </div>
                                        <div class="card-link mt-auto">
                                            Xem chi tiết <i class="far fa-long-arrow-alt-right"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                                        </div>
                    </div>
                </div>
            </div>
        </div>-->
</div>
<div id="global-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><span style="color: #0babe0;">Thông báo</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <p>
                <p><?= $site['modal']; ?></p>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="HideModal()">Ẩn</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
            </div>
        </div>

    </div>
</div>
<?php require_once('include/foot.php'); ?>