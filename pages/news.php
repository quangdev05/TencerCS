<?php require_once('include/head.php'); ?>
<title>Trang Chủ</title>
<?php require_once('include/nav.php'); 
$don = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `ticket` WHERE `status` = 'scam' ")) ['COUNT(*)'];
?>
<div id="main" class="main">
    
    <div class="section-gap section-intro">
        <div class="container">
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
                                    <a href="#" class="service-content_title">
                                        Check scammer
                                    </a>
                                    <div class="service-content_desc">
                                        Bạn chỉ cần nhập SDT, STK ngân hàng, thông tin của scammer vào trong ô tìm kiếm sẽ được phơi bày
                                    </div>
                                </div>
                                <div class="service-action">
                                    <a href="#" class="btn-theme btn-theme_white">
                                        Check ngay
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
                                    <a href="scam/create" class="service-content_title">
                                        Tố cáo lừa đảo
                                    </a>
                                    <div class="service-content_desc">
                                        Bạn muốn tố cáo một ai đó đang lừa đảo bạn ,đã đủ chứng cứ để kẻ lừa đảo phải chịu hình phạt
                                    </div>
                                </div>
                                <div class="service-action">
                                    <a href="scam/create" class="btn-theme btn-theme_white">
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
                                    <a href="trust-services" class="service-content_title">
                                        Check quỹ bảo hiểm
                                    </a>
                                    <div class="service-content_desc">
                                        Check quỹ bảo hiểm được Admin VietNam đảm bảo xác nhận uy tín trên từng giao dịch
                                    </div>
                                </div>
                                <div class="service-action">
                                    <a href="trust-services" class="btn-theme btn-theme_white">
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
                                    <a href="https://pqnit.asia" class="service-content_title">
                                        Dịch vụ Thiết Kế PQNIT.ASIA
                                    </a>
                                    <div class="service-content_desc">
                                        Thiết Kế Website Chuẩn Ceo Đối Tác Dữ Liệu 500 khách hàng Tin Tưởng Bởi PQNIT.ASIA
                                    </div>
                                </div>
                                <div class="service-action">
                                    <a href="https://pqnit.asia" class="btn-theme btn-theme_white">
                                        Liên hệ
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
                <div class="section-gap section-article">
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
                                <a href="/" class="article-card card">
                                    <div class="card-header">
                                        <img src="img-pqn/bg-scam.png"
                                             class="mw-100 image-cover transition-default">
                                    </div>
                                    <div class="card-body py-0 d-flex flex-column">
                                        <div class="card-meta">
                                            Ngày đăng:&nbsp;09-05-2022
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
                                <a href="" class="article-card card">
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
        </div>
    </div>
    <div id="global-modal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Thông báo</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                        <p><p>Hệ Thống Kiểm Tra Giao Dịch Viên</p></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                    </div>
                </div>

            </div>
        </div>
    <?php require_once('include/foot.php'); ?>