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

$marche="toto";
$idArticle=1;
$prepare = $bdd->prepare("SELECT auteur_commentaire,commentaire,date_commentaire FROM commentaires where idArticle=?");
$prepare->execute(array($idArticle));
$list=$prepare->fetchAll();

$out=array();
foreach($list as $value){
		$out[]="<div class=\"card\"><div class=\"card-body\">".$value["auteur_commentaire"]. " le ".$value['date_commentaire'] ."<br>".$value['commentaire']."</div></div><br>";
}
$tab=array("auteur"=>$marche,"id"=>$idArticle,"list"=>$out);
echo json_encode($tab);

?>