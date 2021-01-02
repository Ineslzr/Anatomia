<?php
	include_once'vue_discussion.php';
	include_once'modele_discussion.php';

class ContDiscussion {

		private $modele;
		private $vue;

		function __construct(){

			$this->vue = new VueDiscussion();
			$this->modele = new ModeleDiscussion();

		}	

		function ajout_message(){
			$this->modele->ajout_message();
		}

		function afficher_discussion(){
			
			$messageParent=$this->modele->getMessageParent();
			$messageChildren=$this->modele->getMessageChildren();
			$this->vue->afficher_discussion($messageParent,$messageChildren);
		}

		function form_reponse(){
			$this->vue->form_reponse();
		}


}

?>