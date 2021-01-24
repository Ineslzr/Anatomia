<?php
if(!defined('CONST_INCLUDE'))
	die('Acces direct interdit !');
?>

<?php
include_once'connexionBD.php';

	class ModeleDiscussion extends Connexion{
		
		public function __construct() {

		}

		function getMessageParent(){
	        $idSujet=$_GET['idSujet'];
			$prepare = self::$bdd->prepare("SELECT idMessage,auteur_message,message,date_message,parent_id FROM message where parent=1 AND idSujet=?;");
			$prepare-> execute(array($idSujet));
			return $prepare->fetchAll();
		}

		function getMessageChildren(){
	        $idSujet=$_GET['idSujet'];
			$prepare = self::$bdd->prepare("SELECT idMessage,auteur_message,message,date_message,parent_id FROM message where parent=0 AND idSujet=?;");
			$prepare-> execute(array($idSujet));
			return $prepare->fetchAll();
		}

	    function afficher_liste_discussion(){
	        $prepare=self::$bdd->prepare("SELECT * FROM sujetDiscu; ");
	        $prepare-> execute();
	        return $prepare->fetchAll();
	    }
	    
	    function erreur404(){
			$error = self::$bdd->prepare("SELECT contenu FROM page WHERE titre_page = 'erreur404';");
			$error->execute();
			$error = $error->fetch()['contenu'];
			return $error;
		}

	}
?>
