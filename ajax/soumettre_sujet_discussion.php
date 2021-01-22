<?php
	header('Content-Type: application/json');
	
	try{
	    $bdd = new PDO('mysql:host=localhost;dbname=anatomia;charset=utf8', 'root', '');
	}catch (Exception $e){
	    die('Erreur : ' . $e->getMessage());
	}

	$sujet=$_POST['proposition_sujet'];
	$prepare=$bdd->prepare("INSERT INTO sujetdiscu(titre_sujet) VALUES(?);");
	$prepare->execute(array($sujet));

	$lastId=$bdd->lastInsertId();
	$resultat=$bdd->prepare("SELECT date_sujet from sujetdiscu where idSujet=?;");
	$resultat-> execute(array($lastId));

	$tab=array("idSujet"=> $lastId, "sujet"=> $sujet, "date"=>$resultat->fetch()['date_sujet']);
	echo json_encode($tab);
?>