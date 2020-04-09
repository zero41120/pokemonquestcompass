<!-- Set environment and debug flag-->
<?php error_reporting( E_ALL ); ?>

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
						<h1 class="heading">歡迎來到探險尋寶指南針</h1>
						<p>指南針是一種用於指示方向的工具。而探險尋寶指南針，將會帶著你在可樂島成為寶可夢大師!</p>
						<p>這邊有寶可夢圖鑑，戰鬥技能推薦，食譜，料理模擬器。許多東西還在開發中，未來還會新增更多功能!</p>
						<p><a href="recipe.php" class="btn btn-primary">進入食譜</a></p>
					</div>
				</div>
			</section>
			<!-- END section -->
			<section class="probootstrap-section-half probootstrap-reverse">
				<div class="probootstrap-image probootstrap-animate" data-animate-effect="fadeIn" style="background-image: url(img/image_2.png)"></div>
				<div class="probootstrap-text">
					<div class="probootstrap-inner probootstrap-animate">
						<h1 class="heading">料理模擬器</h1>
						<p>手上有食材，可是不知道會吸引什麼寶可夢嗎?</p>
						<p><a href="cooker.php" class="btn btn-primary">開始料理</a></p>
					</div>
				</div>
			</section>
			<!-- END section -->
			<section class="probootstrap-section-half">
				<div class="probootstrap-image probootstrap-animate" data-animate-effect="fadeIn" style="background-image: url(img/image_3.png)"></div>
				<div class="probootstrap-text">
					<div class="probootstrap-inner probootstrap-animate">
						<h1 class="heading">圖鑑</h1>
						<p>不知道如何取得寶可夢嗎？利用圖鑑來查看升級等級還有吸引的料理！</p>
						<p><a href="pokedex.php" class="btn btn-primary">檢視圖鑑</a></p>
					</div>
				</div>
			</section>
			-->
			<!-- END section -->
		</div>
		<?php include_layout_template('footer.php'); ?>
	</body>
</html>