<?php
if(!defined('CONST_INCLUDE'))
    die('Acces direct interdit !');
?>

<?php
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
			<div class="container-fluid">
				<div class="row">
					<section class="container col-md-7">
						<br>
						<h1 class="text-center text-primary">Lire un article</h1>
						<br>
						<br>

						<div id="liste_article">
							<ul>
								<br>
								<br>
								<?php
								foreach ($articles as $value) {
									echo "<li class=\"mot\"><a href=\"index.php?module=lire_article&action=lire_article&idArticle=".$value['idArticle']."\">".$value['titre_article']."</a></li>";
								}
								?>
								<br>
								<br>
							</ul>
						</div>
						<div style="text-align: center;">
				            <img src="../img/Bitmoji/ines_champiLivreHerbe.png" class="img-center bitmoji"><img src="../img/Bitmoji/darina_lecture.png" class="img-center bitmoji">
				        </div>
				    </section>
			<?php
		}
	}
?>