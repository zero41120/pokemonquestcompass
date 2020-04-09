<!-- Set environment and debug flag-->
<?php
	require_once('../includes/config.php');
	if($debug_mode) {  }
	?>
<!-- Show welcome information -->
<html lang="en">
	<?php include_layout_template('header.php'); ?>
	<body>
		<?php include_layout_template('navigator.php'); ?>
		<div class="probootstrap-main">
			<section class="probootstrap-section-half">
				<div class="probootstrap-image probootstrap-animate fadeIn probootstrap-animated" data-animate-effect="fadeIn" style="background-image: url(img/image_1.png)"></div>
				<div class="probootstrap-text">
					<div class="probootstrap-inner probootstrap-animate fadeInUp probootstrap-animated">
						<h1 class="heading">關於探險尋寶指南針</h1>
						<h4>「興趣使然之肥宅程序員的指南針」</h4>
						<p>站長自己是在Switch 主機上開始這款遊戲的，初起是在<a href="https://docs.google.com/spreadsheets/u/1/d/1K0fPNvQVzBhMsXSnBIJLYql_2o4wVZCKmYPT9Snhqrc/htmlview?sle=true#">寶可夢探險尋寶食譜</a>上尋找需要的資料，培養自己最喜歡的寶可夢。只是很多時候透過查表很不便，本來只是想隨便寫個計算器，不知道為什麼就變成模擬器了。</p>
						<p>如果有什麼建議或想說說話，歡迎透過粉絲專頁聯絡本肥宅。</p>
						<p><a href="https://www.facebook.com/pg/PokemonQuestCompass" class="btn btn-primary">粉絲專頁</a></p>
					</div>
				</div>
			</section>
			<!-- END section -->
			<section class="probootstrap-section">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="service left-icon probootstrap-animate fadeInUp probootstrap-animated">
								<div class="icon"><i class="icon-hammer2"></i></div>
								<div class="text">
									<h3 class="heading">伺服器</h3>
									<p>「伺服器很廢，只有1G的RAM」</p>
									<p>站長喜歡從一個全新的系統中開始安裝環境和開發，使用的是DigitalOcean最便宜的Droplet，哎呀，夠用拉。
									</p>
									<p><a class="btn btn-primary" href="https://cloud.digitalocean.com/">DigitalOcean</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="service left-icon probootstrap-animate fadeInUp probootstrap-animated">
								<div class="icon">
									<i class="icon-table"></i>
								</div>
								<div class="text">
									<h3 class="heading">資料提供</h3>
									<p>「資料不是偷來的辣」</p>
									<p>模擬器資料皆擷取自<a href="https://docs.google.com/spreadsheets/u/1/d/1K0fPNvQVzBhMsXSnBIJLYql_2o4wVZCKmYPT9Snhqrc/htmlview?sle=true#">寶可夢探險尋寶食譜</a>，若有任何問題請聯繫其創建者洪士評先生。</p>
									<br/>
									<p><a class="btn btn-primary"  href="https://line.me/ti/p/Un05EfWzlu">Line</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="service left-icon probootstrap-animate fadeInUp probootstrap-animated">
								<div class="icon">
									<i class="icon-rocket"></i>
								</div>
								<div class="text">
									<h3 class="heading">維穩軍費</h3>
									<p>「所有贊助將用作本應用的伺服器支出。」</p>
									<p class="whisper-message">好、好啦，在確保這個月和下個月還有下下個月的費用沒問題的時候，站長可能會拿去買一杯奶茶喝啦……一杯。</p>
									<p><a class="btn btn-primary" href="https://paypal.me/PokemonQuestCompass">Paypal Donation</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="service left-icon probootstrap-animate fadeInUp probootstrap-animated">
								<div class="icon">
									<i class="icon-bug"></i>
								</div>
								<div class="text">
									<h3 class="heading">科技使用</h3>
									<p>「Yo~ 寫Bug囉！」</p>
									<p>伺服器為LAMP架構：
										<a href="https://www.ubuntu.com/">Linux</a>, 
										<a href="https://httpd.apache.org/">Apache</a>, 
										<a href="https://www.mysql.com/">MySQL</a>, 
										<a href="http://php.net/"> PHP</a>。
										當然大部分的功能還是用<a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript"> Javascript</a>實作的，
										則資料處理是使用<a href="https://www.python.org/"> Python</a>。
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="service left-icon probootstrap-animate fadeInUp probootstrap-animated">
								<div class="icon">
									<i class="icon-heart"></i>
								</div>
								<div class="text">
									<h3 class="heading">喜歡的寶可夢</h3>
									<p>「雪拉比，因為有一顆抱枕」</p>
									<p>其實雪拉比是小時候的抱枕，現在站長應該是比較喜歡沙奈朵啦。</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="service left-icon probootstrap-animate fadeInUp probootstrap-animated">
								<div class="icon">
									<i class="icon-spinner3"></i>
								</div>
								<div class="text">
									<h3 class="heading">想不出來</h3>
									<p>「站長已經沒梗了」</p>
									<p>為了要湊齊六個，這樣比較好看，所以這邊的文字都是濫竽充數拉。</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- END section -->
		</div>
		<?php include_layout_template('footer.php'); ?>
	</body>
</html>