<?php

class VueDiscussion{


	public function __construct() {

	}


	function afficher_discussion($messageParent,$messageChildren){

		foreach ($messageParent as $p) {
			echo "<br><div name=\"".$p["idMessage"]."\" id=\"".$p["idMessage"]."\">";
			echo "<div class=\"card\"> <div class=\"card-header\">";
		    echo $p["auteur_message"]. " le ".$p['date_message'] ."</div><br>".$p['message']."<button type=\"submit\" class=\"btn btn-primary\" name=\"".$p["idMessage"]."\" id=\"repondre\">Répondre</button><br><div class=\"form_reponse".$p['idMessage']."\">Formulaire Réponse</div></div>";
		    foreach ($messageChildren as $c) {
		    	if($c['parent_id'] == $p['idMessage']){
		   			echo "<div id=\"reponse".$p["idMessage"]."\" class=\"card card-body ms-5\">";
		   		 	echo $p["auteur_message"]. " le ".$c['date_message'] ."<br>".$c['message']."</div>";
		   		}
		   	}
		   	echo  "</div></div>";
		}

	}

	function form_reponse(){

		$idMessage=$_POST['idMessage'];
		echo "<form action=\"\" method=\"POST\">
			<div class=\"form-group col-lg-12\">
				<textarea name=\"content\" id=\"content_children\" class=\"form-control\" placeholder=\"Répondre\"> </textarea>
				<button type=\"submit\" class=\"btn btn-primary\" name=\"".$idMessage."\" id=\"envoi_children\">Répondre</button>
 			</div>
 			
 			
		</form>";
	}

    function afficher_liste_discussion($tab){
        foreach($tab as $value) {
            echo "<div class=\"card mt-3\">
					<div class=\"card-header\">".$value['titre_sujet']."</div>
					<div class=\"card-body\">
						<h5 class=\"card-title\">Proposé le : ".$value['date_sujet']."</h5>
						<a href=\"../discussion.php?idSujet=".$value['idSujet']."\" class=\"btn btn-primary\">Discuter !</a>
					</div></div>";
        }
    }

}
?>