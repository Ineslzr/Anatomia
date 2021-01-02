<?php

include_once 'cont_profil.php';

class ModProfil {

	private $controleur;

	public function __construct(){

		$this->controleur=new ContProfil();

		if(isset($_GET["action"])){
			$action=$_GET["action"];							
		}
		else {
			$action="default";
		}

			switch($action){

				case "articles_lues":
					$this->controleur->articles_lues();
					break;
				default:
					echo "Pas de valeur";
					break;
			}
	}


}


?>