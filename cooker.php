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
		<!-- Resources -->
		<link rel="stylesheet" href="css/pokemon_card.css">
		<link rel="stylesheet" href="css/cooking.css">
		<link rel="stylesheet" href="css/ingredient.css">
		<script src="js/pokemon.js"></script>
		<script src="js/pot.js"></script>
		<div class="probootstrap-main">
			<section class="probootstrap-section probootstrap-no-hover">
				<div class="probootstrap-inner probootstrap-animate fadeInUp">
					<div class="container basic-background">
						<!-- Heading -->
						<div class="row">
							<div class="col-md-12 section-heading text-center probootstrap-animate fadeInUp probootstrap-animated">
								<h2 class="mb70">料理模擬器</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<!-- Simulator -->
								<div id="cooking-page">
									<!-- Pot -->
									<div class="cooking-pot" style="background-image: url(/img/cooking/pot.png);">
										<img id="slot-1" /> <img id="slot-2" /> <img id="slot-3" /> <img id="slot-4" /> <img id="slot-5" />
									</div>
									<!-- ingredient -->
									<div class="ingredient-bar disable-select ingredient-bar-small">
										<div id='sr' class="ingredient tip-top" style="background-image: url(img/cooking/sr.png);" onclick="clickIngredient('sr')">
											<span class="info-ingredient">小巧<br/>柔軟<br/>紅色<br/>蘑菇</span>
										</div>
										<div id='sb' class="ingredient tip-top" style="background-image: url(img/cooking/sb.png);" onclick="clickIngredient('sb')">
											<span class="info-ingredient">小巧<br/>柔軟<br/>藍色<br/>甜的</span>
										</div>
										<div id='sy' class="ingredient tip-top" style="background-image: url(img/cooking/sy.png);" onclick="clickIngredient('sy')">
											<span class="info-ingredient">小巧<br/>堅硬<br/>黃色<br/>植物</span>
										</div>
										<div id='sg' class="ingredient tip-top" style="background-image: url(img/cooking/sg.png);" onclick="clickIngredient('sg')">
											<span class="info-ingredient">小巧<br/>堅硬<br/>灰色<br/>礦物</span>
										</div>
										<div id='sm' class="ingredient tip-top" style="background-image: url(img/cooking/sm.png);" onclick="clickIngredient('sm')">
											<span class="info-ingredient">珍貴x2</span>
										</div>
									</div>
									<div class="ingredient-bar disable-select ingredient-bar-big">
										<div id='br' class="ingredient tip-bottom" style="background-image: url(img/cooking/br.png);" onclick="clickIngredient('br')">
											<span class="info-ingredient">珍貴<br/>柔軟<br/>紅色<br/>植物</span>
										</div>
										<div id='bb' class="ingredient tip-bottom" style="background-image: url(img/cooking/bb.png);" onclick="clickIngredient('bb')">
											<span class="info-ingredient">珍貴<br/>堅硬<br/>藍色<br/>礦物</span>
										</div>
										<div id='by' class="ingredient tip-bottom" style="background-image: url(img/cooking/by.png);" onclick="clickIngredient('by')">
											<span class="info-ingredient">珍貴<br/>柔軟<br/>黃色<br/>甜的</span>
										</div>
										<div id='bg' class="ingredient tip-bottom" style="background-image: url(img/cooking/bg.png);" onclick="clickIngredient('bg')">
											<span class="info-ingredient">珍貴<br/>柔軟<br/>灰色<br/>蘑菇</span>
										</div>
										<div id='bm' class="ingredient tip-bottom" style="background-image: url(img/cooking/bm.png);" onclick="clickIngredient('bm')">
											<span class="info-ingredient">珍貴<br/>特別</span>
										</div>
									</div>
									<!-- Result -->
									<div class="cooking-result">
										<div class="result-header">
											<span id="result-id">?</span>
											<span id="result-name">方可樂的美味料理</span>
										</div>
										<img id="result-image" src="img/cooking/small_pot/1.png"/>
										<div class="result-desc-title">
											<span>材料</span>
											<span>寶可夢</span>
										</div>
										<div class="result-desc-detail" id="result-comp">請放入更多材料</div>
										<div class="result-desc-detail" id="result-type">請放入更多材料</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<!-- Attraction -->
								<div id="attract-page">
									<!-- <script type="text/javascript">
										for (var i = 1; i < 20; i++) {
											document.getElementById("attract-page").innerHTML += generatePokemonCardHtml(i, '0%');
										}
										</script> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</body>
	<?php include_layout_template('footer.php'); ?>
	<script type="text/javascript">
		var idSlot = document.getElementById("result-id");
		var titleSlot = document.getElementById("result-name");
		var receipeSlot = document.getElementById("result-comp");
		var attractSlot = document.getElementById("result-type");
		var attractPage = document.getElementById("attract-page");
		var resultImageSlot = document.getElementById('result-image');
		var ingredients = [];
		/**
		 * This function responds to image click and saves the ingredient to 
		 * ingredients array. If the length of ingredients reaches 5, it calls
		 * displayPot(). 
		 */
		var clickIngredient = function(type){
			var slotId = "slot-" + (ingredients.length + 1);
			var imagePath = "img/cooking/" + type + ".png";
		
			switch(ingredients.length) {
				case 0: 
					resetDisplay(); // notice no break
				case 1: case 2: case 3:
					ingredients.push(type);
					document.getElementById(slotId).src = imagePath;
					break;
				case 4: 
					ingredients.push(type);
					document.getElementById(slotId).src = imagePath;
					displayPot();
					ingredients = []
					break;
			} 		
		}
		
		var resetDisplay = function(){
			for (var i = 2; i <= 5; i++) {
				document.getElementById("slot-" + i).src = "img/cooking/invisible.png";
			}
			idSlot.innerHTML = '?';
			titleSlot.innerHTML = '方可樂的美味料理';
			receipeSlot.innerHTML = '請放入更多材料';
			attractSlot.innerHTML = '請放入更多材料';
			attractPage.innerHTML = '';
			resultImageSlot.src = "img/cooking/small_pot/1.png"; 
		
		}
		
		var displayPot = function(){
			var result = getIngredientAttribute(ingredients);
			var pot = identifyPod(result);
			console.log(pot);
			idSlot.innerHTML = pot[0];
			titleSlot.innerHTML = pot[1];
			receipeSlot.innerHTML = pot[2] + (pot[3]==""? "": "，"+pot[3]);
			attractSlot.innerHTML = pot[4];
			resultImageSlot.src = "img/cooking/small_pot/" +pot[0]+ ".png";
			var html = '';
			var pot_chance = getDefaultChances();
			target_pot = pot_chance[pot[1]];
			console.log(target_pot);
			for (var i = 0; i < target_pot.length; i++) {
				var poke_id = pot_chance[pot[1]][i][0];
				var chance = pot_chance[pot[1]][i][1];
				html += generatePokemonCardHtml(poke_id, chance);
			}
			attractPage.innerHTML = html;
		}
		
	</script>
	</body>
</html>