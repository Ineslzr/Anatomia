<?php
if(!defined('CONST_INCLUDE'))
	die('Acces direct interdit !');
?>

<?php
	include_once'connexionBD.php';
	include_once'vue_quiz.php';

	class ModeleQuiz extends Connexion{

		public function __construct() {

		}

		function getQuestion(){
			$idQuiz=$_GET['idQuiz'];

			$prepare = self::$bdd->prepare("SELECT idQuestion,intitule FROM question where idQuiz=?; ");
			$prepare-> execute(array($idQuiz));
			return $prepare-> fetchAll();
		}

		function getReponse(){
			$idQuiz=$_GET['idQuiz'];
			$prepare = self::$bdd->prepare("SELECT idReponse,reponse,reponse.idQuestion FROM reponse inner join question on reponse.idQuestion=question.idQuestion AND question.idQuiz=?;");
			$prepare-> execute(array($idQuiz));
			return $prepare-> fetchAll();
		}

	    function afficher_liste_quiz(){
	        $prepare=self::$bdd->prepare("SELECT idQuiz, nom_quiz FROM quiz; ");
	        $prepare-> execute();
	        return $prepare->fetchAll();
	    }

	    function erreur404(){
			$error = self::$bdd->prepare("SELECT contenu FROM page WHERE titre_page = 'erreur404';");
			$error->execute();
			$error = $error->fetch()['contenu'];
			return $error;
		}
	}
?>
