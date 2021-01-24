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

if(isset($_POST['proposition_sujet'])&& !empty($_POST['proposition_sujet'])){
	$sujet=$_POST['proposition_sujet'];
	$sujet_encoder=remove_script_balises($sujet);

	$prepare=$bdd->prepare("INSERT INTO sujetdiscu(titre_sujet) VALUES(?);");
	$prepare->execute(array($sujet_encoder));

	$lastId=$bdd->lastInsertId();
	$resultat=$bdd->prepare("SELECT date_sujet from sujetdiscu where idSujet=?;");
	$resultat-> execute(array($lastId));

	$tab=array("idSujet"=> $lastId, "sujet"=> $sujet_encoder, "date"=>$resultat->fetch()['date_sujet']);
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