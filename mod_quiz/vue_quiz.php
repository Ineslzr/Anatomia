<?php

class VueQuiz{


	public function __construct() {

	}

	function afficher_quiz($question,$reponse){

		foreach ($question as $q) {

			echo "<form action=\"index.php?module=quiz&action=verifierRep\" method=\"POST\" id=\"quest".$q["idQuestion"]."\">";
			echo "<div class=\"card\">"."<h4 class=\"card-header\">". $q["idQuestion"]." : ".$q["intitule"]."</h4>";
			foreach($reponse as $r){

		    		echo "<div class=\"ms-2\"><input type=\"radio\" name=\"".$q['idQuestion']."\" " ." value=\"".$r['idReponse']."\"". "id=\"rep".$q['idQuestion']."\"><label class=\"ms-1\">".$r['reponse']."</label></div>";
		    }
		    echo "<div id=\"resultat".$q["idQuestion"]."\""."></div>";
		    echo "<input type=\"submit\" name=\"".$q["idQuestion"]."\" value=\"submit\" class=\"btn btn-success m-auto\" id=\"envoi\" onClick=\"unchecked()\" >";
			echo "</div></form><br>";

		}
	}
	

}
?>