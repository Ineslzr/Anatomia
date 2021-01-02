<?php
	include_once'vue_commentaire.php';
	include_once'modele_commentaire.php';

class ContCommentaire {

		private $modele;
		private $vue;

		function __construct(){

			$this->vue = new VueCommentaire();
			$this->modele = new ModeleCommentaire();

		}	

		function ajout_commentaire(){
			$this->modele->ajout_commentaire();
		}

		function afficher_commentaire(){
			$tab=$this->modele->afficher_commentaire();
			$this->vue->afficher_commentaire($tab);

		}

		function recup_commentaire(){
			$this->modele->recup_commentaire();
		}

		function articles_lues(){
			$tab=$this->modele->articles_lues();
			$this->vue->articles_lues($tab);
		}



}

?>