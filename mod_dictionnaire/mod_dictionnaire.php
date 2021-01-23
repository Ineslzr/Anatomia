<?php
if(!defined('CONST_INCLUDE'))
		die('Acces direct interdit !');

include_once 'cont_dictionnaire.php';

class ModDictionnaire {

	private $controleur;

	public function __construct(){

		$this->controleur=new ContDictionnaire();

		if(isset($_GET["action"])){
			$action=$_GET["action"];							
		}
		else {
			$action="accueil_dictionnaire";
		}

		switch($action){

			case "accueil_dictionnaire":
				$this->controleur->accueil_dictionnaire();
				break;
			case "afficher_definition":
				$this->controleur->afficher_definition();
				break;

			default:
				echo "Pas de valeur";
				break;
			}
	}

	function getControleur(){
		return $this->controleur;
	}


}


?>