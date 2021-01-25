<?php
if(!defined('CONST_INCLUDE'))
    die('Acces direct interdit !');
?>

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

		function afficher_discussion(){
			$messageParent=$this->modele->getMessageParent();
			$messageChildren=$this->modele->getMessageChildren();
			$this->vue->afficher_discussion($messageParent,$messageChildren);
		}

        function accueil_discussion(){
            $tab=$this->modele->afficher_liste_discussion();
            $this->vue->accueil_discussion($tab);
        }

        function erreur404(){
			$error = $this->modele->erreur404();
			$this->vue->erreur404($error);
		}

        function getVue(){
		    return $this->vue;
        }
	}

?>