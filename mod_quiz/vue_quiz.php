<?php

class VueQuiz{


	public function __construct() {

	}

	function afficher_quiz($question,$reponse){

		foreach ($question as $q) {

            echo "<form action=\"index.php?module=quiz&action=verifierRep\" method=\"POST\" id=\"quest".$q["idQuestion"]."\">";
            echo "<div class=\"card\">"."<h4 class=\"card-header\">". $q["idQuestion"]." : ".$q["intitule"]."</h4>";
            foreach($reponse as $r){
                if($q["idQuestion"]==$r["idQuestion"]){
                    echo "<div class=\"ms-2\"><input type=\"radio\" name=\"".$q['idQuestion']."\" " ." value=\"".$r['idReponse']."\"". "id=\"rep".$q['idQuestion']."\"><label class=\"ms-1\">".$r['reponse']."</label></div>";
                }
            }
            echo "<div id=\"resultat".$q["idQuestion"]."\""."></div>";
            echo "<input type=\"submit\" name=\"".$q["idQuestion"]."\" value=\"submit\" class=\"btn btn-success m-auto\" id=\"envoi\"  >";
            echo "</div></form><br>";

		}
	}

    function afficher_liste_quiz($tab){
        foreach ($tab as $value){
            echo "<div class=\"card ms-3\" style=\"width: 18rem;\">
			  	    <img src=\"../img/quiz.jpg\" class=\"card-img-top\" alt=\"img_quiz\">
  				        <div class=\"card-body\">
    						<h5 class=\"card-title\">".$value['nom_quiz']."</h5>
    						<a href=\"../quiz.php?idQuiz=".$value['idQuiz']."\" class=\"btn btn-primary \" name=\"".$value['idQuiz']."\" id=\"".$value['idQuiz']."\" onClick=\"get_idQuiz(this.id)\">Faire le quiz</a>
  						</div>
					</div>";
        }
    }
	

}
?>