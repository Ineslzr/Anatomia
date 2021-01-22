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

				case "recup_commentaire":
					$this->controleur->recup_commentaire();
					break;

				case "articles_lues":
					$this->controleur->articles_lues();
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