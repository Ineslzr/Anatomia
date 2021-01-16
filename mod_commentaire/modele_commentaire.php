<?php
include_once'connexionBD.php';
include_once'vue_commentaire.php';

class ModeleCommentaire extends Connexion{

	private $vue;
	public function __construct() {
		$this->vue=new VueCommentaire();
	}

	function ajout_commentaire(){


		$auteur=$_SESSION['nomUtilisateur'];
		$commentaire=$_POST['commentaire'];
		$idArticle=$_GET['idArticle'];

		$prepare = self::$bdd->prepare("INSERT INTO commentaires(auteur_commentaire,commentaire,idArticle) VALUES(?,?,?);");
		$prepare-> execute(array($auteur,$commentaire,$idArticle));

		$tab=self::afficher_commentaire();
		$this->vue->afficher_commentaire($tab);
		
	}

	function afficher_commentaire(){
		$prepare = self::$bdd->prepare("SELECT auteur_commentaire,commentaire,date_commentaire FROM commentaires;");
		$prepare-> execute();
		return $prepare->fetchAll();
	}

	function recup_commentaire(){
		$commentaire=$_POST['commentaire'];
		var_dump($commentaire);
		$req=self::$bdd->prepare("SELECT auteur_commentaire,commentaire,date_commentaire FROM commentaires where commentaire=?;");
		$req->execute(array($commentaire));
		return $req->fetchAll();
	}

	function articles_lues(){
		$membre=$_SESSION['nomUtilisateur'];
		$req=self::$bdd->prepare("SELECT titre_article FROM lire where nomUtilisateur=?;");
		$req->execute(array($membre));
		$result=$req->fetchAll();
		return $result;
	}

}
