<!-- Set environment and debug flag-->
<?php
	require_once('../includes/config.php');
	if($debug_mode) {  }
	?>
<!-- Show welcome information -->
<html lang="en">
	<?php include_layout_template('header.php'); ?>
	<head>
		<link rel="stylesheet" href="css/news.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.esm.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.esm.bundle.js"></script>
	</head>
	<body>
		<?php include_layout_template('navigator.php'); ?>
		<div class="probootstrap-main">
		<section class="probootstrap-section probootstrap-no-hover">
			<div class"container">
			<div class="probootstrap-text">
				<div class="probootstrap-inner">
					<div class="container">
						<h1 class="heading text-center">更新日誌</h1>
						<div class="probootstrap-animate fadeIn probootstrap-animated" data-animate-effect="fadeIn">
							<div class="pokedex-background">
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<?php 
											$logs = array_reverse(glob("log/*.html"));
											$pre = '<div class="swiper-slide">';
											$pos = '</div>';
											foreach ($logs as $index => $log) {
											  echo($pre);
											  include($log);
											  echo($pos);
											}
											?>
										<div class="swiper-pagination"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</section>
		</div>
		<?php include_layout_template('footer.php'); ?>
		<script>
			var slideCount = screen.width > 600 ? 2 : 1;
			 var swiper = new Swiper('.swiper-container', {
			  height: "70vw",
			  spaceBetween: 30,
			  pagination: {
			    el: '.swiper-pagination',
			    type: 'fraction',
			  },
			  slidesPerView: slideCount,
			  spaceBetween: 20,
			});
		</script>
	</body>
</html>