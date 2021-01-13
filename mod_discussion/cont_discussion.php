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

        function afficher_liste_discussion(){
            $tab=$this->modele->afficher_liste_discussion();
            $this->vue->afficher_liste_discussion($tab);
        }

        function soumettre_sujet(){
            $this->modele->soumettre_sujet();
            $this->afficher_discussion();
        }


}

?>