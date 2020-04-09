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
		<link rel="stylesheet" href="css/pot_card.css">
		<link rel="stylesheet" href="css/recipe.css">
		<link rel="stylesheet" href="css/mini_ingredient.css">
		<script src="js/pokemon.js"></script>
		<script src="js/pot.js"></script>
		<div class="probootstrap-main">
			<section class="probootstrap-section probootstrap-no-hover">
				<div class="probootstrap-inner probootstrap-animate fadeInUp">
					<div class="container recipe-grid">
						<!-- Heading -->
						<div class="recipe-header basic-background">
							<div class="cooking-svg"></div>
							<div class="recipe-title">食譜</div>
						</div>
						<!-- Pots -->
						<div id="pot-page" class="disable-select basic-background">
							<script type="text/javascript">
								var types = getPotTypeNames();
								for (var i = 1; i < 19; i++) {
									document.getElementById("pot-page").innerHTML += generatePotCardHtml(i, types[i-1]);
								}
							</script>
						</div>
						<!-- Result -->
						<div class="recipe-result">
							<!-- Method -->
							<div id="method-page" class="basic-background">
								<div id="goodness-0" class="goodness-tab selected-goodness" onclick="clickedGoodness(0)">普通</div>
								<div id="goodness-1" class="goodness-tab" onclick="clickedGoodness(1)">好吃</div>
								<div id="goodness-2" class="goodness-tab" onclick="clickedGoodness(2)">超好吃</div>
								<div id="goodness-3" class="goodness-tab" onclick="clickedGoodness(3)">好吃到不行</div>
								<div id="methods"></div>
							</div>
							<!-- Attraction -->
							<div id="attract-page" class="basic-background">
								<script type="text/javascript">
									document.getElementById("attract-page").innerHTML += generatePokemonCardHtml(0, '0%');
								</script>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</body>
	<?php include_layout_template('footer.php'); ?>
	<script type="text/javascript">
		// Elements 
		var attractElem = document.getElementById("attract-page");
		var potElem = undefined;
		var goodnessElem = document.getElementById("goodness-0");
		var methodElem = document.getElementById("methods");
		// String tracker
		var viewingPot = '';
		var viewingGoodness = '(普通)';
		
		function clickedPot(potId){
			// Remove select
			if(potElem != undefined){
				potElem.classList.remove('selected-pot');
			}
		
			// Select new pot
			potElem = document.getElementById("pot-" + potId);
			potElem.classList.add('selected-pot');
			
			// Get pot information
			var pots = getDefaultPots();
			viewingPot = pots[potId - 1];
		
			// Display
			displayPokemon();
			displayMethod();
		}
		
		function clickedGoodness(goodness){
			// Convert goodness number to string
			switch(goodness){
				case 0: viewingGoodness = '(普通)'; break;
				case 1: viewingGoodness = '(好吃)'; break;
				case 2: viewingGoodness = '(超好吃)'; break;
				case 3: viewingGoodness = '(好吃到不行)'; break;
			}
		
			// Selected goodness tab
			if(goodnessElem != undefined){
				goodnessElem.classList.remove('selected-goodness');
			}
			goodnessElem = document.getElementById("goodness-" + goodness);
			goodnessElem.classList.add('selected-goodness');
		
			// Display if pot is selected
			if(viewingPot != ''){
				displayPokemon();
				displayMethod();
			}
		}
		
		function displayMethod(){
			var potName = viewingPot[1] + viewingGoodness;
		
			var methods = generateMethod(potName);
			var html = '';
			if(methods != undefined){
				methods.forEach(function(method){
					console.log(method);
					html += `<div class="ingredient-bar disable-select">`
					method.forEach(function(ing){
						html += `<div class="ingredient" style="background-image: url(img/cooking/${ing}.png);"></div>`
					});
					html += `</div>`
				});
				if(potName.includes("傳奇")){
					html += '*在不組成其他鍋狀況，建議先以模擬器檢查是否為傳奇湯。';
				}
				if(potName.includes("雜燴")){
					html += '*在不組成其他鍋狀況，建議先以模擬器檢查是否為大雜燴。';
				}
				methodElem.innerHTML = html;
			}
		}
		
		function displayPokemon(){
			var pot_chance = getDefaultChances();
			var pot = viewingPot;
			var potName = pot[1] + viewingGoodness;
			console.log(potName);
			target_pot = pot_chance[potName];
			var sum = 0;
			if(target_pot != undefined) {
				var html = '';
				for (var i = 0; i < target_pot.length; i++) {
					var poke_id = pot_chance[potName][i][0];
					var chance = pot_chance[potName][i][1];
					html += generatePokemonCardHtml(poke_id, chance);
					sum += parseInt(chance.substring(0, chance.length - 1))
				}
				attractElem.innerHTML = html;
				console.log(sum);
			} else {
				methodElem.innerHTML = "無法製作這種口味的料理喔";
				attractElem.innerHTML = generatePokemonCardHtml(0, '0%');
			}
		}
	</script>
	</body>
</html>