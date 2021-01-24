<?php
if(!defined('CONST_INCLUDE'))
    die('Acces direct interdit !');
?>

<?php

	include_once('connexionBD.php');


	class ModeleArticle extends Connexion{
		
		public function __construct(){
			# code...
		}

		function lecture(){
            $idArticle=$_GET['idArticle'];
            $prepare = self::$bdd->prepare("SELECT contenu FROM articles WHERE idArticle = ?;");
            $prepare->execute(array($idArticle));
            $contenu = $prepare->fetch()['contenu'];
            return $contenu;
		}

        function get_liste_article(){
            $idSection=$_GET['idSection'];
            $prepare=self::$bdd->prepare("SELECT * FROM articles where idSection=?;");
            $prepare->execute(array($idSection));
            return $prepare->fetchAll();
        }

		function erreur404(){
			$error = self::$bdd->prepare("SELECT contenu FROM page WHERE titre_page = 'erreur404';");
			$error->execute();
			$error = $error->fetch()['contenu'];
			return $error;
		}
	}
?>