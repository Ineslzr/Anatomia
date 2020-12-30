<?php
include_once'connexionBD.php';
include_once'vue_connexion.php';

class ModeleConnexion extends Connexion {
	private $vue;

	public function __construct() {
		$this->vue = new VueConnexion();

	}

	function inscription($tab){

		$id=$tab['nomUtilisateur'];
		$password=$tab['password'];
		$email=$tab['email'];

			

		if(strlen($id) <= 255 && strlen($password) <= 255 && filter_var($email, FILTER_VALIDATE_EMAIL) != false ) {
			
			$requete=self::$bdd->prepare("SELECT nomUtilisateur FROM membre where nomUtilisateur=? ;");
			$requete->execute(array($id));
			
			if(!empty($requete->fetch())){
				echo 'Cet utilisateur existe déjà';
				$this->vue->form_inscription();
			}
			else{
			//Insertion
				$req=self::$bdd->prepare("INSERT INTO membre(nomUtilisateur,password,email) VALUES(?,?,?); ");
				$req->execute(array($id,$password,$email));
			}
		}
		else {
			echo "Taille d'utilisateur ou de mot de passe incorrecte ou email invalide ";
			$this->vue->form_inscription();
		}
		

	}

	function connexion(){
        $nomUtilisateur=$_POST['nomUtilisateur'];

        try {
            $selectprep =self::$bdd->prepare("SELECT nomUtilisateur,password FROM membre WHERE nomUtilisateur=?;");
            $selectprep->execute(array($nomUtilisateur));           
            $resultat=$selectprep->fetch();
           	return $resultat;        
        }
        catch(PDOexception $e){
            echo $e->getMessage(). $e->getCode();
        }

	}

	function deconnexion(){
		$_SESSION=array();
		session_destroy();
		echo ("Vous etes deconnecté");
	}

}

?>