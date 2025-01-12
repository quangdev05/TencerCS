<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="footer-top">
					<div class="row">
						<div class="col-md-6 col-lg-3">
							<div class="footer-item">
								<div class="footer-item_text">
									THÔNG TIN WEBSITE
								</div>
								<div class="footer-item_link">
									Điện thoại:
									<a href="#"><?= $site_sdt_momo; ?></a>
								</div>
								<div class="footer-item_link">
									Email:
									<a href="#">quangdev05@gmail.com</a>
								</div>
								<div class="footer-item_link">
									Địa chỉ: Buon Ma Thuot, Dak Lak, Vietnam
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 col-6">
							<div class="footer-item">
								<div class="footer-item_text footer-item_decor">
									DỊCH VỤ NỔI BẬT
								</div>
								<ul class="footer-item_list">
									<li>
										<a href="https://cs.doithe24.net/trust-services">Kiểm tra quỹ bảo hiểm</a>
									</li>
									<li>
										<a href="/post/dieu-khoan.html">Đăng kí quỹ bảo hiểm</a>
									</li>
									<li>
										<a href="https://cs.doithe24.net/scam/create">Tố cáo lừa đảo</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 col-6">
							<div class="footer-item">
								<div class="footer-item_text footer-item_decor">
									THÔNG TIN NỔI BẬT
								</div>
								<ul class="footer-item_list">
									<li>
										<a href="https://thesieuviet.net/">Thesieuviet.net</a>
									</li>
									<li>
										<a href="https://www.facebook.com/quangdev05">Facebook</a>
									</li>
									<li>
										<a href="https://discord.com/invite/5tcGqEwMFt">Discord Community</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-md-6 col-lg-3 col-6">
							<div class="footer-item">
								<div class="footer-item_text footer-item_decor">
									CỘNG ĐỒNG
								</div>
								<ul class="list-unstyled mb-0 footer-item_social">
									<li class="facebook">
										<a href="https://www.facebook.com/quangdev05">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li class="telegram">
										<a href="http://t.me/tencersoftware">
											<i class="fab fa-telegram-plane"></i>
										</a>
									</li>
									<li class="discord">
										<a href="https://discord.com/invite/5tcGqEwMFt">
											<i class="fab fa-discord"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<div class="float-buttons">
	<a href="/scam/create" class="btn-theme btn-theme_primary">TỐ CÁO <span></span></a>
	<a href="/trust-services" class="btn-theme btn-theme_success">CHECK UY TÍN<span></span></a>
</div>
</body>

</html>

<!-- BoxChat -->
<style>
	@keyframes zoom {
		0% {
			transform: scale(.5);
			opacity: 0;
		}

		50% {
			opacity: 1;
		}

		to {
			opacity: 0;
			transform: scale(1);
		}
	}

	@keyframes lucidgentelegram {

		0%,
		to {
			transform: rotate(-25deg);
		}

		50% {
			transform: rotate(25deg);
		}
	}

	.jscroll-to-top {
		bottom: 100px;
	}

	.fcta-telegram-ben-trong-nut svg path {
		fill: #fff;
	}

	.fcta-telegram-vi-tri-nut {
		position: fixed;
		bottom: 55px;
		right: 20px;
		z-index: 999;
	}

	.fcta-telegram-nen-nut,
	.fcta-telegram-mess {
		box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16);
	}

	.fcta-telegram-nen-nut {
		width: 50px;
		height: 50px;
		text-align: center;
		color: #fff;
		background: #0068ff;
		border-radius: 50%;
		position: relative;
		cursor: pointer;
	}

	.fcta-telegram-nen-nut::after,
	.fcta-telegram-nen-nut::before {
		content: "";
		position: absolute;
		border: 1px solid #0068ff;
		background: #0068ff;
		z-index: -1;
		left: -20px;
		right: -20px;
		top: -20px;
		bottom: -20px;
		border-radius: 50%;
		animation: zoom 1.9s linear infinite;
	}

	.fcta-telegram-nen-nut::after {
		animation-delay: .4s;
	}

	.fcta-telegram-ben-trong-nut,
	.fcta-telegram-ben-trong-nut i {
		transition: all 1s;
	}

	.fcta-telegram-ben-trong-nut {
		position: absolute;
		text-align: center;
		width: 30%;
		height: 46%;
		left: 6px;
		bottom: 22px;
		line-height: 50px;
		font-size: 20px;
		opacity: 1
	}

	.fcta-telegram-ben-trong-nut i {
		animation: lucidgentelegram 1s linear infinite;
	}

	.fcta-telegram-nen-nut:hover .fcta-telegram-ben-trong-nut,
	.fcta-telegram-text {
		opacity: 0;
	}

	.fcta-telegram-nen-nut:hover i {
		transform: scale(.5);
		transition: all .5s ease-in;
	}

	.fcta-telegram-text a {
		text-decoration: none;
		color: #fff;
	}

	.fcta-telegram-text {
		position: absolute;
		top: 6px;
		text-transform: uppercase;
		font-size: 12px;
		font-weight: 700;
		transform: scaleX(-1);
		transition: all .5s;
		line-height: 1.5;
	}

	.fcta-telegram-nen-nut:hover .fcta-telegram-text {
		transform: scaleX(1);
		opacity: 1;
	}

	.fcta-telegram-mess {
		position: fixed;
		bottom: 60px;
		right: 58px;
		z-index: 99;
		background: #fff;
		padding: 7px 25px 7px 15px;
		color: #3a9140;
		border-radius: 50px 0 0 50px;
		font-weight: 700;
		font-size: 15px;
	}

	.fcta-telegram-mess span {
		color: #0068ff !important;
	}

	span#fcta-telegram-tracking {
		font-family: Roboto;
		line-height: 1.5;
	}

	.fcta-telegram-text {
		font-family: Roboto;
	}

	.contact-options {
		display: none;
		flex-direction: column;
		gap: 10px;
		position: fixed;
		bottom: 80px;
		right: 20px;
		z-index: 999;
		margin-bottom: 10px;
	}

	.contact-option {
		display: flex;
		align-items: center;
		background: #fff;
		color: #0068ff;
		padding: 5px 15px;
		border-radius: 50px;
		box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16);
		text-decoration: none;
		font-weight: bold;
		transition: all 0.3s;
	}

	.contact-option:hover {
		background: #f0f0f0;
	}

	.contact-option i {
		margin-right: 10px;
	}
</style>
<div onclick="toggleOptions()" class="fcta-telegram-mess">
	<span id="fcta-telegram-tracking">Hỗ trợ 24/7</span>
</div>
<div class="fcta-telegram-vi-tri-nut">
	<div class="fcta-telegram-nen-nut" onclick="toggleOptions()">
		<div class="fcta-telegram-ben-trong-nut">
			<i class="fab fa-telegram fa-2x"></i>
		</div>
		<div class="fcta-telegram-text">Nhắn Ngay </div>
	</div>
</div>
<div id="contactOptions" class="contact-options">
	<a href="https://www.facebook.com/quangdev05" class="contact-option" target="_blank">
		<i class="fab fa-facebook-f"></i>Facebook
	</a>
	<a href="https://discord.gg/HsSUVGSc3c" class="contact-option" target="_blank">
		<i class="fab fa-discord"></i>Discord
	</a>
	<a href="https://t.me/tencersoftware" class="contact-option" target="_blank">
		<i class="fab fa-telegram-plane"></i>Telegram
	</a>
	<a href="https://zalo.me/0969349646" class="contact-option" target="_blank">
		<i class="fas fa-comment-dots"></i>Zalo
	</a>
</div>
<script>
	function toggleOptions() {
		const options = document.getElementById('contactOptions');
		options.style.display = options.style.display === 'flex' ? 'none' : 'flex';
	}
</script>