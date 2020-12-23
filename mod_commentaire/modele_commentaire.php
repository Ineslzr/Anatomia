<?php
include_once'connexion.php';
include_once'vue_commentaire.php';

class ModeleCommentaire extends Connexion{

	public function __construct() {

	}

	function ajout_commentaire(){


		$auteur="toto";
		$commentaire=$_POST['commentaire'];
		$idArticle=$_GET['idArticle'];

		$prepare = self::$bdd->prepare("INSERT INTO commentaires(auteur_commentaire,commentaire,idArticle) VALUES(?,?,?);");
		$prepare-> execute(array($auteur,$commentaire,$idArticle));
		
	}

	function afficher_commentaire(){
		$prepare = self::$bdd->prepare("SELECT auteur_commentaire,commentaire,date_commentaire FROM commentaires;");
		$prepare-> execute();
		return $prepare->fetchAll();
	}


}
