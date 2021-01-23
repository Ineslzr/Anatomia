<?php
header('Content-Type: application/json');
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=anatomia;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

//if(isset($_POST['envoi_parent'])) {
	$auteur="toto";
	$commentaire=$_POST['commentaire'];
	$idArticle=1;

	$prepare = $bdd->prepare("INSERT INTO commentaires(auteur_commentaire,commentaire,idArticle) VALUES(?,?,?);");
	$prepare-> execute(array($auteur,$commentaire,$idArticle));

	$lastId=$bdd->lastInsertId();
	$resultat = $bdd->prepare("SELECT date_commentaire from commentaires where idCommentaire =?");
	$resultat-> execute(array($lastId));


	
	$tab = array ("auteur" => $auteur, "commentaire"=> $commentaire, "date"=>$resultat->fetch()['date_commentaire']);
	echo json_encode($tab);
//}

?>