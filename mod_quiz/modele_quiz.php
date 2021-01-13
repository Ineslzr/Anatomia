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

	function verifierRep(){

		if(isset($_POST['choix'])){
			$selected =$_POST['choix'];
			
			$prepare = self::$bdd->prepare("SELECT correct FROM reponse where idReponse=?; ");
			$prepare-> execute(array((int)$selected));
			$tab=$prepare->fetch();
			if($tab['correct']==0){
				echo "Mauvaise réponse";
			}
			else {
				echo "Bonne réponse";
			}

		}
	}

    function afficher_liste_quiz(){
        $prepare=self::$bdd->prepare("SELECT idQuiz, nom_quiz FROM quiz; ");
        $prepare-> execute();
        return $prepare->fetchAll();
    }


	

}
