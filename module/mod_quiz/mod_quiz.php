<?php
if(!defined('CONST_INCLUDE'))
    die('Acces direct interdit !');
?>

<?php

	include_once 'cont_quiz.php';

	class ModQuiz{
	    
	    private $controleur;
		public function __construct(){

			$this->controleur=new ContQuiz();

			if(isset($_GET["action"])){
				$action=$_GET["action"];							
			}
			else {
				$action="accueil_quiz";
			}

			switch($action){

				case "afficher_quiz":
					$this->controleur->afficher_quiz();
					break;
                case "accueil_quiz":
                    $this->controleur->accueil_quiz();
                    break;

				default:
					$this->controleur->erreur404(); 
					break;
			}
		}

	    function getControleur(){
	        return $this->controleur;
	    }
	}
?>