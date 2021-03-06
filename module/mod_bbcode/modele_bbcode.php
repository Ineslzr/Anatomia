<?php
if(!defined('CONST_INCLUDE'))
    die('Acces direct interdit !');
?>

<?php
	include_once ('connexionBD.php');
	include_once ('vue_bbcode.php');

	class ModeleBBcode extends Connexion{
		
		public function __construct(){
		}

		function ajouter_article(){

            $titre=$_POST['titre_article'];
            $contenu=$_POST['contenu'];
            $auteur=$_POST['auteur'];
            $id_section = $_POST['section'];
            $erreur = null;

            if (strlen($titre) > 0) {
                if (strlen($titre) <= 30) {
                    $titre = self::remove_script_balises($titre);
                    $titre_present = self::$bdd->prepare("SELECT titre_article FROM articles where titre_article = ?;");

                    $titre_present->execute(array($titre));

                    if (empty($titre_present->fetch())) {

                        if (strlen($contenu) > 0) {
                            $contenu_balise = self::remove_script_balises($contenu);

                            $prepare = self::$bdd->prepare("INSERT INTO articles(titre_article,idSection,contenu,auteur) VALUES(?,?,?,?);");
                            $prepare-> execute(array($titre,$id_section,$contenu_balise,$auteur));

                            return $titre;
                        }
                        else{
                            return $erreur;
                        }
                    }
                    else{
                        return $erreur;
                    }
                }
                else{
                    return $erreur;
                }
            }
            else{
                return $erreur;
            }
            return $erreur;
		}

		function afficher_article($titre_article){
			$prepare = self::$bdd->prepare("SELECT contenu FROM articles where titre_article = ? ;");
			$prepare->execute(array($titre_article));
			
			$article_decoder = self::decoder($prepare->fetch()['contenu']);
			
			return $article_decoder;
		}

		function decoder($article_decodage){

			$article_decodage = str_replace("[b]", "<b>", $article_decodage);
	        $article_decodage = str_replace("[/b]", "</b>", $article_decodage);//bold

	        $article_decodage = str_replace("[br/]", "<br/>", $article_decodage);
	        $article_decodage = str_replace("[br]", "<br/>", $article_decodage);//saut de ligne
	       
	        $article_decodage = str_replace("[i]", "<em>", $article_decodage);
	        $article_decodage = str_replace("[/i]", "</em>", $article_decodage);//italique
	       
	        $article_decodage = str_replace("[u]", "<u>", $article_decodage);
	        $article_decodage = str_replace("[/u]", "</u>", $article_decodage);//underline    


	        $article_decodage = str_replace("[size=150]","<span style=\"font-size:32px;>\"", $article_decodage);//h1

	        $article_decodage = str_replace("[size=100]","<span style=\"font-size:24px;>\"", $article_decodage);//h2

	        $article_decodage = str_replace("[size=85]","<span style=\"font-size:18px;>\"", $article_decodage);//h3

	        $article_decodage = str_replace("[size=50]","<span style=\"font-size:16px;>\"", $article_decodage);//h4

	        $article_decodage = str_replace("[/size]","<span/>", $article_decodage);//taille de la police


	        $article_decodage = str_replace("[center]", "<br><div classe=\"col-lg-8 col-md-10 mx-auto\"><br>", $article_decodage);
	        $article_decodage = str_replace("[/center]", "</div>", $article_decodage);//texte-aligne-center

	        return $article_decodage;
		}

		function remove_script_balises($article_encode){
	      	$article_encode = str_replace("<sript>", " ", $article_encode); // <script></script>
			$article_encode = str_replace("<script", " ", $article_encode);  // <script type="text/javascript"></script>
	      	$article_encode = str_replace("</sript>", " ", $article_encode);

	      	$article_encode = str_replace("<?php", " ", $article_encode); /*<?php ?>*/
	      	$article_encode = str_replace("?>", " ", $article_encode);

	      	return $article_encode;
		}

		function erreur404(){
			$error = self::$bdd->prepare("SELECT contenu FROM page WHERE titre_page = 'erreur404';");
			$error->execute();
			$error = $error->fetch()['contenu'];
			return $error;
		}
	}
?>