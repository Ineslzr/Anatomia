<?php 

include_once 'cont_discussion.php';

class ModDiscussion{
	public function __construct(){

		$this->controleur=new ContDiscussion();

		if(isset($_GET["action"])){
			$action=$_GET["action"];							
		}
		else {
			$action="ajout_message";
		}

		switch($action){

			case "ajout_message":
				$this->controleur->ajout_message();
				break;

			case "afficher_discussion":
				$this->controleur->afficher_discussion();
				break;

			case "form_reponse":
				$this->controleur->form_reponse();
				break;

            case "afficher_liste_discussion":
                $this->controleur->afficher_liste_discussion();
                break;

            case "soumettre_sujet":
                $this->controleur->soumettre_sujet();
                break;

			default:
				echo "Pas de valeur";
				break;
		}
	}

}

?>