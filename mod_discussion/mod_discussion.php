<?php 

include_once 'cont_discussion.php';

class ModDiscussion{
    private $controleur;

	public function __construct(){
		$this->controleur=new ContDiscussion();

		if(isset($_GET["action"])){
			$action=$_GET["action"];							
		}
		else {
			$action="accueil_discussion";
		}
		switch($action){
			case "afficher_discussion":
				$this->controleur->afficher_discussion();
				break;
            case "accueil_discussion":
                $this->controleur->accueil_discussion();
                break;
			default:
				echo "Pas de valeur";
				break;
		}
	}

	function getControleur(){
	    return $this->controleur;
    }

}

?>