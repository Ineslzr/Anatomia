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
			default:
				echo "Pas de valeur";
				break;
		}
	}

}

?>