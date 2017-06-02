<?php
// utiliser les atribu et method ea linterieur de la classe avec $this
//php -f Exemple.class.php -->

//classe : objet
// regroupe le code et les donnees :  plan/patron possiblea instancier et manipuler

//============================== SURCHARGE=============================

class Exemple {

	public $rgb = array($red , $green, $blue);
statique	$statique = FALSE;
cast int

function __destruct() {    // destruction de la classe
	print ( 'Destructor called' . PHP_EOL );
return;
}
























	public fuction __construction (array $kwargs ) {
		print ( 'constructor called' . PHP_EOL );

		if (array_key_exists('arg1, $kwargs'))
			$this->att1 = $kwargs['arg1'];
		else
			$this->att1 = -1;

		$this->att1 = -1

	}  //attribu = variable de class
	private $_privateFoo = 'hello';
	// toutes les instances utiliseront cette variable;  toujours une constante

	function __construct() {  //soncstruction de la class
		print ( 'constructor called' . PHP_EOL );

		print ( '$this->publicFoo: ' . $this->publicFoo . PHP_EOL );
		$this->publicFoo = 42;
		print( '$this->publicFoo: ' . $this->publicFoo . PHP_EOL );

		print ( '$this->_privateFoo: ' . $this->_privateFoo . PHP_EOL );
		$this->_privateFoo = 'world';
		print( '$this->_privateFoo: ' . $this->_privateFoo . PHP_EOL );

		$this->publicBar();
		$this->_privateBar();

		return;
	}
	function __destruct() {    // destruction de la classe
		print ( 'Destructor called' . PHP_EOL );
	return;
	}

	function publicBar() {    // destruction de la classe
		print ( 'Methode publicBar called' . PHP_EOL );
	return;
	}

	private function _privateBar() {    // destruction de la classe
		print ( 'Methode _privatebar called' . PHP_EOL );
	return;
}

$instance = new Exemple(); // instance  pour lancer

$print( '$instance->publicFoo: ' . $instance->publicFoo . PHP_EOL);
$instance->publicFoo = 100;
$print( '$instance->publicFoo: ' . $instance->publicFoo . PHP_EOL);

$instance->publicBar();

print('$instance->_privateFoo: ' . $instance->_private . PHP_EOL );
$instance->_privateFoo = 100;
print('$instance->_privateFoo: ' . $instance->_private . PHP_EOL );
$instance->_privateBar();
?>
