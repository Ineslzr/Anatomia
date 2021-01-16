<?php

class VueProfil{


	public function __construct() {

	}


	function articles_lues($tab) {
		foreach ($tab as $value) {
		    echo "* ".$value["titre_article"]."<br>";
		}
	}

}
?>

