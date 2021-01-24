<?php
if(!defined('CONST_INCLUDE'))
    die('Acces direct interdit !');
?>

<?php

include_once'connexionBD.php';


class ModeleDictionnaire extends Connexion{
		
	public function __construct() {
		
	}

	function get_mot(){
		$prepare=self::$bdd->prepare("SELECT * FROM definition; ");
		$prepare-> execute();
		return $prepare->fetchAll();
	}

	function get_definition(){
		$idMot=$_GET['idMot'];
		$prepare=self::$bdd->prepare("SELECT definition FROM definition where idMot=?");
		$prepare->execute(array($idMot));
		return $prepare->fetchAll();
	}



}
