<?php
	include_once ('connexionBD.php');
	include_once ('vue_lecturePage.php');

	class ModeleLecture_Page extends Connexion{
		
		public function __construct(){
			# code...
		}

		function lecture($titre_page){
			$prepare = self::$bdd->prepare("SELECT contenu FROM page WHERE titre_page = ?;");
			$prepare->execute(array($titre_page));

			$contenu = $prepare->fetch()['contenu'];
			
			return $contenu;
		}


		function erreur404(){
			$error = self::$bdd->prepare("SELECT contenu FROM page WHERE titre_page = 'erreur404';");
			$error->execute();

			$error = $error->fetch()['contenu'];

			return $error;
		}
	}
?>