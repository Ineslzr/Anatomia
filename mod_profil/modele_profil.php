<?php
include_once'connexionBD.php';


class ModeleProfil extends Connexion{

	public function __construct() {

	}

	function articles_lues(){
		$membre=$_SESSION['nomUtilisateur'];
		$req=self::$bdd->prepare("SELECT titre_article FROM lire where nomUtilisateur=?;");
		$req->execute(array($membre));
		$result=$req->fetchAll();
		return $result;
	}

}