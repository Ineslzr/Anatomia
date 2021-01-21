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
	$message=$_POST['message'];
	$idSujet=$_POST['idSujet'];
	$parent=$_POST['parent'];
	$parent_id=$_POST['parent_id'];

	$prepare = $bdd->prepare("INSERT INTO message(auteur_message,message,parent,parent_id,idSujet) VALUES(?,?,?,?,?);");
	$prepare-> execute(array($auteur,$message,$parent,$parent_id,$idSujet));

	$lastId=$bdd->lastInsertId();
	$resultat = $bdd->prepare("SELECT date_message from message where idMessage =?");
	$resultat-> execute(array($lastId));


	
	$tab = array ("auteur" => $auteur, "message"=> $message, "date"=>$resultat->fetch()['date_message'], "id"=> $lastId);
	echo json_encode($tab);
//}

?>