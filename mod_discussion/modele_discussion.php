<?php
include_once'connexionBD.php';
include_once'vue_discussion.php';

class ModeleDiscussion extends Connexion{
	private $vue;
	
	public function __construct() {
		$this->vue=new VueDiscussion();
	}

	function ajout_message(){

		$auteur="toto";
		$message=$_POST['message'];
		$idSujet=$_GET['idSujet'];
		$parent=$_POST['parent'];
		$parent_id=$_POST['parent_id'];

		$prepare = self::$bdd->prepare("INSERT INTO message(auteur_message,message,parent,parent_id,idSujet) VALUES(?,?,?,?,?);");
		$prepare-> execute(array($auteur,$message,$parent,$parent_id,$idSujet));


		$tab1=self::getMessageParent();
		$tab2=self::getMessageChildren();
		$this->vue->afficher_discussion($tab1,$tab2);
		
	}

	function getMessageParent(){
		$prepare = self::$bdd->prepare("SELECT idMessage,auteur_message,message,date_message,parent_id FROM message where parent=1;");
		$prepare-> execute();
		return $prepare->fetchAll();
	}

	function getMessageChildren(){
		$prepare = self::$bdd->prepare("SELECT idMessage,auteur_message,message,date_message,parent_id FROM message where parent=0;");
		$prepare-> execute();
		return $prepare->fetchAll();
	}
}
