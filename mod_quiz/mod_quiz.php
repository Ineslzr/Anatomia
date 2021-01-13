<?php 

include_once 'cont_quiz.php';

class ModQuiz{
	public function __construct(){

		$this->controleur=new ContQuiz();

		if(isset($_GET["action"])){
			$action=$_GET["action"];							
		}
		else {
			$action="default";
		}

			switch($action){

				case "afficher_quiz":
					$this->controleur->afficher_quiz();
					break;

				case "verifierRep":
					$this->controleur->verifierRep();
					break;

                case "afficher_liste_quiz":
                    $this->controleur->afficher_liste_quiz();
                    break;

				default:
					echo "Pas de valeur";
					break;
			}
	}

}

?>