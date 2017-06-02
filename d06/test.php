<?php

//classe : objet
// regroupe le code et les donnees :  plan/patron possiblea instancier et manipuler

class Exemle {
	function __construct() {  //soncstruction de la class
		print ( 'constructor called' . PHP_EOL );
	return;
	}
	function __destruct() {    // destruction de la classe
		print ( 'Destructor called' . PHP_EOL );
	return;
	}
}

$instance = new Exemple(); // instance  pour lancer

// les donnes sont appeles attribu
// method : fonction dana une classe
?>
<!-- //php -f Exemple.class.php -->
