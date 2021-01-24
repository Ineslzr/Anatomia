<?php
if(!defined('CONST_INCLUDE'))
	die('Acces direct interdit !');
	include_once'vue_generique.php';

	class VueArticle extends VueGenerique{
		
		public function __construct(){
			parent::__construct();
		}

		function lecture($page){
			echo $page;
		}



		function erreur404($error){
			echo $error;
		}

		function afficher_liste_article($articles){ 
			?>
			<div class="container">
				<br><h1 class="text-center text-primary">Lire un article</h1><br>

				<div id="liste_article">
					<ul>
						<?php
						foreach ($articles as $value) {
							echo "<li class=\"mot\"><a href=\"index.php?module=lire_article&action=lire_article&idArticle=".$value['idArticle']."\">".$value['titre_article']."</a></li>";
						}
						?>
					</ul>
				</div>
				<div style="text-align: center;">
		            <img src="../img/Bitmoji/ines_champiLivreHerbe.png" class="img-center bitmoji">
		            <img src="../img/Bitmoji/darina_lecture.png" class="img-center bitmoji">
		        </div>
			</div>
			<?php
		}
	}
?>