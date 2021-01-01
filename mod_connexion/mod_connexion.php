<?php

include_once'cont_connexion.php';

class ModConnexion{

	private $controleur;

	public function __construct(){

		$this->controleur=new ContConnexion();

		if(isset($_GET["action"])){
			$action=$_GET["action"];				
		}
		else{
			$action="default";
		}

		switch($action){

			case "form_connexion":
				$this->controleur->form_connexion();
				break;

			case "connexion":
				if(isset($_SESSION['password'])){
					echo "Vous etes déjà connecté";
					echo "c";
				}
				else{
					$this->controleur->connexion();
				}
				break;
			
			case "deconnexion":
				$this->controleur->deconnexion();
				break;
			
			case "form_inscription":
				$this->controleur->form_inscription();
				break;

			case "inscription":
				$this->controleur->inscription();
				break;

			default:
				echo "Pas de valeur";
				break;
		}
	}
}
?>