<?php session_start(); ?>

<?php
			require_once "connexionBD.php";

			Connexion::initConnexion();

			$module = isset($_GET['module']) ? $_GET['module']: "default";
			switch($module) {
				case "commentaire" :
					include "./mod_commentaire/mod_commentaire.php";
					$module=new ModCommentaire();
					break;

				case "connexion":
					include "./mod_connexion/mod_connexion.php";
					$module=new ModConnexion();	
					break;

				case "quiz":
					include "./mod_quiz/mod_quiz.php";
					$module=new ModQuiz();
					break;

				case "discussion":
					include "./mod_discussion/mod_discussion.php";
					$module=new ModDiscussion();
					break;

				case "profil":
					include "./mod_profil/mod_profil.php";
					$module=new ModProfil();
					break;

				default :
					die ("Interdiction d'accès à ce module");
			}
?>



