<?php
if(!defined('CONST_INCLUDE'))
    die('Acces direct interdit !');
?>

<?php
	include_once'vue_generique.php';

	class VueBBcode extends VueGenerique {

		public function __construct(){

		}

		function accueil_poster_article(){
			?>
			<h1>Ajouter un article !</h1>
			<div class="container">
				<div class="row">
					<p>Bienvenue dans l'espace d'Ajout d'article, ici vous pouvez publier un article sur de nombreux sujets !</p>
					<div class="form-group">
						<button type="submit" class="btn btn-primary" id="article" style="">
							<a href="index.php?module=ajout_article&action=ecrire_article">fom_wysibb</a>
						</button>
					</div>
			 	</div>
			</div>
			<?php
		}

		/*function afficher_article($titre_article,$article){
			echo $titre_article;
			echo $article;
		}*/

		function erreur_champ(){
			echo "Il y a une erreur : votre titre est vide ou a déjà été utilisé ou il est beaucoup trooop long ou vous n'avez pas écrit d'article !";
		}

		function ecrire_article(){
			require_once ('bbcode.html');
		}

		function erreur404($error){
			echo $error;
		}
	}

?>