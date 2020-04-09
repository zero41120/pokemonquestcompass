<!-- Set environment and debug flag-->
<?php
	require_once('../includes/config.php');
	if($debug_mode) {  }
		?>
<!-- Show welcome information -->
<html lang="en">
	<?php include_layout_template('header.php'); ?>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.esm.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.esm.bundle.js"></script>
		<link rel="stylesheet" href="css/mini_ingredient.css">
		<link rel="stylesheet" href="css/mini_recipe_card.css">
		<link rel="stylesheet" href="css/pokemon_card.css">
		<link rel="stylesheet" href="css/pokedex.css">
		<script src="js/pokemon.js"></script>
		<script src="js/pot.js"></script>
	</head>
	<body>
		<?php include_layout_template('navigator.php'); ?>
		<div class="probootstrap-main">
			<section class="probootstrap-section probootstrap-no-hover">
				<div class="probootstrap-inner probootstrap-animate fadeInUp probootstrap-animated">
					<div class="container">
						<div class="pokedex-background">
							<!-- Pokemon page -->
							<div class="swiper-container swiper-container-pokemon">
								<div id="pokemon-container" class="swiper-wrapper">
								</div>
							</div>
							<!-- Information page -->
							<div class="swiper-container swiper-container-recipe">
								<div id="recipe-information-container" class="swiper-wrapper">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<?php include_layout_template('footer.php'); ?>
		<script>
			var swiper;
			function initSwiper(){ 
				width = document.getElementById("recipe-information-container").offsetWidth;
				slides = Math.max(parseInt(width / 360), 1);
				console.log(`Init Pokemon Swiper: Width(${width}) / 360 = ${slides}`);
				swiper = new Swiper('.swiper-container-pokemon', {
					autoHeight: true, //enable auto height
					slidesPerView: slides,
				});
			}
			
			var recipeSwiper;
			function initRecipeSwiper(){
				width = document.getElementById("pokemon-container").offsetWidth;
				slides = Math.max(parseInt(width / 260), 1);
				console.log(`Init Recipe Swiper: Width(${width}) / 260 = ${slides}`);
				recipeSwiper = new Swiper('.swiper-container-recipe', {
					autoHeight: true,
					slidesPerView: slides,
				});
			}
		</script>
		<script>
			var pokemonNumbers = [];
			for (var i = 1; i < 152; i++) {
				pokemonNumbers.push(i);
			}
			generatePokemonRows(pokemonNumbers);
			
			function generatePokemonRows(targets){
				pagePre = `<div class="pokemon-page swiper-slide">`;
				rowPre = `<div class="triple-row">`;
				pos = `</div>`;
				html = "" + pagePre + rowPre;
				counter = 0;
				missingPos = 0;
				for (var i = 0; i < targets.length; i++) {
					if (counter == 15) { 
						html += pos + pos + pagePre + rowPre;
						counter = 0;
					}
					html += generatePokemonCardHtml(targets[i], '');
					counter++;
				}
				html += pos;
				document.getElementById("pokemon-container").innerHTML = html;
				initSwiper();
			}
		</script>
		<script>
			var viewingPokemon;
			clickedPokemon(1);
			function clickedPokemon(pokemonId){
				if(viewingPokemon != undefined) {
					viewingPokemon.setAttribute("style", "");
				}
				viewingPokemon = document.getElementById(`poke-${pokemonId}`);
				viewingPokemon.setAttribute("style", "--selected-color: var(--selected-green-color);");
				potChances = getDefaultPokeChance()[pokemonId];
				html = "";
				if(potChances != undefined) {
					var allMethods = getAdvancedMethods();
					for(var i = 0; i < potChances.length; i++){
						//"方可樂大雜燴(普通)":
						potName = "方可樂" + potChances[i][0];
						chance = potChances[i][1];
						methods = allMethods[potName];
						html += generateMiniRecipe(potName, methods, chance);
					}
				} else {
					evolution = getEvolution(pokemonId);
					fromId = evolution[0];
					toId = pokemonId;
					level = evolution[1];
					comment = evolution[2];
					html += generateEvolution(fromId, toId, level, comment);
				}
				document.getElementById("recipe-information-container").innerHTML = html;
			
				if(recipeSwiper == undefined) {
					initRecipeSwiper();
				} else {
					recipeSwiper.update();
					recipeSwiper.slideTo(0);
					evo = document.getElementById("evolution");
					if(evo) { evo.setAttribute("style", ""); }
				}
			}
			
			function generateEvolution(from, to, level, comment){
			html = "";
			html += `<div id="evolution" class="swiper-slide">`;
			html += generatePokemonCardHtml(from, comment ? comment : '等級進化');
			html += `<div class="evolution-card"><div class="evolution-level-title">Lv.</div>`;
			html += `<div class="evolution-level-literal">${level}</div>`;
			html += `<div class="evolution-experience"></div></div>`;
			html += generatePokemonCardHtml(to, '');
			html += `</div>`;
			return html;
			}
			function generateMiniRecipe(potName, methods, chance){
			html = "";
			title = potName;
			name = title.substring(0, title.indexOf('('));
			goodness = title.substring(title.indexOf('(')+1, title.length -1);
			parsedChance = `${Math.max(parseInt(chance), 1)}`;
			potId = getPotId(potName);
			html += `<div class="swiper-slide">`;
			html += `<div class="mini-recipe-card">`
			html += `<div class="mini-recipe-name">${name}</div>`;
			html += `<div class="mini-recipe-goodness">${goodness}</div>`;
			html += `<div class="mini-recipe-chance">`;
				html += `<div class="mini-recipe-chance-literal">${parsedChance}%</div>`;
				html += `<div class="mini-recipe-chance-bar" style="--progress-width: ${parsedChance};">&nbsp</div>`;
			html += `</div>`;
			
			html += `<img class="mini-recipe-image" src="img/cooking/big_pot/${potId}.png" />`;
			html += `<div class="mini-recipe-methods">`;
			for(var i = 0; i < Math.min(methods.length, 4); i++) {
				ings = methods[i];
				html += `<div class="ingredient-bar disable-select">`;
				for(var j = 0; j < ings.length; j++) {
					html += `<div class="ingredient" style="background-image: url(img/cooking/${ings[j]}.png);"></div>`;
				}
				html += `</div>`
			}
			html += `</div></div></div>`;
			return html;
			}
		</script>
	</body>
</html>