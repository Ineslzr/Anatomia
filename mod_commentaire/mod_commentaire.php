<?php

include_once 'cont_commentaire.php';

class ModCommentaire {

	private $controleur;

	public function __construct(){

		$this->controleur=new ContCommentaire();

		if(isset($_GET["action"])){
			$action=$_GET["action"];							
		}
		else {
			$action="ajout_commentaire";
		}

			switch($action){

				case "ajout_commentaire":
					$this->controleur->ajout_commentaire();
					break;

				case "afficher_commentaire":
					$this->controleur->afficher_commentaire();
					break;
				default:
					echo "Pas de valeur";
					break;
			}
	}


}


?>