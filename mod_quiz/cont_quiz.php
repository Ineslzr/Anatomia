<?php
	include_once'vue_quiz.php';
	include_once'modele_quiz.php';

class ContQuiz {

		private $modele;
		private $vue;

		function __construct(){

			$this->vue = new VueQuiz();
			$this->modele = new ModeleQuiz();

		}	


		function getQuestion(){
			$this->modele->getQuestion();
		}

		function getReponse(){
			$this->modele->getReponse();
		}

		function afficher_quiz(){
				$question=$this->modele->getQuestion();
				$reponse=$this->modele->getReponse();
				$this->vue->afficher_quiz($question,$reponse);
		}


		function verifierRep(){
			$this->modele->verifierRep();
		}

        function afficher_liste_quiz(){
            $tab=$this->modele->afficher_liste_quiz();
            $this->vue->afficher_liste_quiz($tab);
        }



}

?>