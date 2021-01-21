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

if(isset($_POST['choix'])){
	$selected =$_POST['choix'];		
	$prepare =$bdd->prepare("SELECT correct FROM reponse where idReponse=?; ");
	$prepare-> execute(array((int)$selected));
	$tab=$prepare->fetch();

	if($tab['correct']==0){
		$resultat="Mauvaise réponse";
	}
	else {
		$resultat="Bonne réponse";
	}
}
	
$res = array ("resultat"=> $resultat);
echo json_encode($res);

?>
