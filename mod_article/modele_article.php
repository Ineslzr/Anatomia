<?php
	include_once('connexionBD.php');
	include_once ('vue_article.php');

	class ModArticle extends Connexion{
		
		public function __construct(){
			# code...
		}

		function lecture($titre_article){
			$prepare = self::$bdd->prepare("SELECT contenu FROM articles WHERE titre_article = ?;");
			$prepare->execute(array($titre_article));

			$contenu = $prepare->fetch()['contenu'];
			
			return $contenu;
		}

		function groupe_article($section){
			$prepare = self::$bdd->prepare("SELECT titre_article FROM articles WHERE idSection = ?;");
			$prepare->execute(array($section));

			$groupe_article = $prepare->fetch()['titre_article'];
			
			return $groupe_article;
		}

		function erreur404(){
			$error = self::$bdd->prepare("SELECT contenu FROM page WHERE titre_page = 'erreur404';");
			$error->execute();
			$error = $error->fetch()['contenu'];
			return $error;
		}
	}
?>