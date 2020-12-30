<?php

	include_once'vue_connexion.php';
	include_once'modele_connexion.php';

class ContConnexion{
	private $modele;
	private $vue;

	function __construct(){

		$this->vue = new VueConnexion();
		$this->modele = new ModeleConnexion();
	}

	function form_connexion(){
		$this->vue->form_connexion();

	}

	function connexion(){
		$tab=$this->modele->connexion();
		var_dump($tab);
		$isPasswordCorrect=password_verify($_POST['password'],$tab['password']);

        if($isPasswordCorrect){
        		$_SESSION['nomUtilisateur']=$tab['nomUtilisateur'];
				$_SESSION['password']=$tab['password'];
				echo "Vous êtes connecté !";
		}	
		else {
			echo "Mauvais identifiant ou mot de passe !";
		}
	}


	function form_inscription(){
		$this->vue->form_inscription();
	}

	function inscription(){
		$this->modele->inscription($this->recupererIdMdpEmail());
	}


	function recupererIdMdpEmail(){

		$identifiant=$_POST['nomUtilisateur'];
		$pass_hash=password_hash($_POST['password'],PASSWORD_DEFAULT);
		$email=$_POST['email'];

		$tab=array("nomUtilisateur"=>$identifiant, "password" =>$pass_hash,"email"=>$email);

		return $tab;

	}

	function deconnexion(){
		$this->modele->deconnexion();
	}

}








?>