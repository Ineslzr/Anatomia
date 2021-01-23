<?php
	header('Content-Type: application/json');
	try{
	    $bdd = new PDO('mysql:host=localhost;dbname=anatomia;charset=utf8', 'root', '');
	}catch (Exception $e){
	    die('Erreur : ' . $e->getMessage());
	}

	//if(isset($_POST['envoi_parent'])) {
		$auteur="toto";
		$message=$_POST['message'];
		$idSujet=$_POST['idSujet'];
		$parent=$_POST['parent'];
		$parent_id=$_POST['parent_id'];

		$message = self::remove_script_balises($message);

		$prepare = $bdd->prepare("INSERT INTO message(auteur_message,message,parent,parent_id,idSujet) VALUES(?,?,?,?,?);");
		$prepare-> execute(array($auteur,$message,$parent,$parent_id,$idSujet));

		$lastId=$bdd->lastInsertId();
		$resultat = $bdd->prepare("SELECT date_message from message where idMessage =?");
		$resultat-> execute(array($lastId));
		
		
		$tab = array ("auteur" => $auteur, "message"=> $message, "date"=>$resultat->fetch()['date_message'], "id"=> $lastId);
		echo json_encode($tab);
	//}

	function remove_script_balises($article_encode){
		$article_encode = str_replace("<script type=\"", "", $article_encode);  // <script type="text/javascript"></script> 
      	$article_encode = str_replace("texte/javascript", "", $article_encode);
      	$article_encode = str_replace("\"></script>", "", $article_encode);

      	$article_encode = str_replace("<sript>", "", $article_encode); // <script></script>
      	$article_encode = str_replace("</sript>", "", $article_encode);

      	$article_encode = str_replace("<?php", "", $article_encode); /*<?php ?>*/
      	$article_encode = str_replace("?>", "", $article_encode);

      	return $article_encode;
	} 

?>