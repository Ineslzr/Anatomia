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

			for($i=1;$i<=5;$i++){
				$question=$this->modele->getQuestion($i);
				$reponse=$this->modele->getReponse($i);
				$this->vue->afficher_quiz($question,$reponse);
			}
				
		}


		function verifierRep(){
			$this->modele->verifierRep();
		}



}

?>