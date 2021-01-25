<?php session_start(); ?>
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

if(isset($_SESSION['nomUtilisateur'])&& !empty($_POST['commentaire'])) {
	$auteur=$_SESSION['nomUtilisateur'];
	$commentaire=$_POST['commentaire'];
	$idArticle=$_POST['idArticle'];
	$commentaire_encoder=remove_script_balises($commentaire);

	$prepare = $bdd->prepare("INSERT INTO commentaires(auteur_commentaire,commentaire,idArticle) VALUES(?,?,?);");
	$prepare-> execute(array($auteur,$commentaire_encoder,$idArticle));

	$lastId=$bdd->lastInsertId();
	$resultat = $bdd->prepare("SELECT date_commentaire from commentaires where idCommentaire =?");
	$resultat-> execute(array($lastId));


	
	$tab = array ("auteur" => $auteur, "commentaire"=> $commentaire_encoder, "date"=>$resultat->fetch()['date_commentaire']);
	echo json_encode($tab);
}

function remove_script_balises($article_encode){
		$article_encode = str_replace("<script type=\"", " ", $article_encode);  // <script type="text/javascript"></script> 
      	$article_encode = str_replace("texte/javascript", " ", $article_encode);
      	$article_encode = str_replace("\"></script>", " ", $article_encode);

      	$article_encode = str_replace("<script>", " ", $article_encode); // <script></script>
      	$article_encode = str_replace("</script>", " ", $article_encode);

      	$article_encode = str_replace("<?php", " ", $article_encode); /*<?php ?>*/
      	$article_encode = str_replace("?>", " ", $article_encode);

      	return $article_encode;
}
?>	