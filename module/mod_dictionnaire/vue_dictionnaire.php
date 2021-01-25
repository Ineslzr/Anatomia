<?php
if(!defined('CONST_INCLUDE'))
    die('Acces direct interdit !');
?>

<?php

		include_once'vue_generique.php';

	class VueDictionnaire extends VueGenerique{

		public function __construct() {
			parent::__construct();
		}

		function accueil_dictionnaire($tab){ 
			?>

			<div class="container">
				<br>
				<h1 class="text-center text-primary">Dictionnaire</h1>
				<br>
				<h2 class="text-center text-success"><p>Vous ne connaissez pas un mot ?</p><p>Pas de panique, consultez notre dictionnaire et retrouver la défintion dont vous avez besoin !</p></h2>
				<br>
				<br>
				<br>
				<input id="search_bar" onkeyup="rechercher()" type="text" name="search_bar" placeholder="Rechercher..."> 
				<br>
				<br>
				<br>
				<div id="liste_mots">

				<ul>
					<?php
						foreach ($tab as $value) {
							echo "<li class=\"mot\"><a href=\"index.php?module=dictionnaire&action=afficher_definition&idMot=".$value['idMot']."\">".$value['mot']."</a></li>";				
						}
					?>
				</ul>
				<div style="text-align: center;">
                	<img src="../img/Bitmoji/ines_livres.png" class="img-center bitmoji">
                	<img src="../img/Bitmoji/darina_nuageInterrogation.png" class="img-center bitmoji">
            	</div>
			 	</div>
			 	<br>
			 	<br>
			 </div>
			<?php
		}

		function afficher_definition($definition){ 
			?>
			<div class="container">
				<br>
				<br>
				<h1 class="text-center text-primary">Dictionnaire</h1>
				<br>
				<h2 class="text-center text-success"><p>Et voilà votre définition !</p></h2>
				<div style="text-align: center;">
					<br>
					<br>
					<br>
				<?php 
					foreach($definition as $value){
						echo "<h3>".$value['definition']."</h3>"; 
					}
				?>
				<div style="text-align: center;">
                		<img src="../img/Bitmoji/ines_lectureEtChat.png" class="img-center bitmoji"><img src="../img/Bitmoji/darina_lecture.png" class="img-center bitmoji">
            		</div>
				</div>
			<br>
			<br>
			</div>
			<?php
		}
	}
?>

