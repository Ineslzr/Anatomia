<?php
	include_once('connexionBD.php');
	include_once ('vue_article.php');

	class ModArticle extends Connexion{
		
		public function __construct(){
			# code...
		}

		function lecture($titre_article){
			$prepare = self::$bdd->prepare("SELECT contenu FROM page WHERE titre_article = ?;");
			$prepare->execute(array($titre_article));

			$contenu = $prepare->fetch()['contenu'];
			
			return $contenu;
		}


		function erreur404(){
			$error = self::$bdd->prepare("SELECT contenu FROM page WHERE titre_page = 'erreur404';");
			$error->execute();

			$error = $error->fetch()['contenu'];

			return $error;
		}

		function erreur404(){
			$error = self::$bdd->prepare("SELECT contenu FROM page WHERE titre_page = 'erreur404';");
			$error->execute();
			$error = $error->fetch()['contenu'];
			return $error;
		}
	}
?>