<?php
//php -f Exemple.class.php -->

//classe : objet
// regroupe le code et les donnees :  plan/patron possiblea instancier et manipuler

class test {
	function __construct() {  //soncstruction de la class
		print ( 'constructor called' . PHP_EOL );
	return;
	}
	function __destruct() {    // destruction de la classe
		print ( 'Destructor called' . PHP_EOL );
	return;
	}
}

$instance = new test(); // instance  pour lancer

// les donnes sont appeles attribu
// method : fonction dana une classe

// ============================================================

 <?php
 //php -f Exemple.class.php -->

 //classe : objet
 // regroupe le code et les donnees :  plan/patron possiblea instancier et manipuler


 class Exemple {

 	public $foo = 0;  //attribu = variable de class
 	// toutes les instances utiliseront cette variable;  toujours une constante

 	function __construct() {  //soncstruction de la class
 		print ( 'constructor called' . PHP_EOL );
 	return;
 	}
 	function __destruct() {    // destruction de la classe
 		print ( 'Destructor called' . PHP_EOL );
 	return;
 	}
 	function bar() {    // destruction de la classe
 		print ( 'Methode bar called' . PHP_EOL );
 	return;
 	}
 }

 $instance = new Exemple(); // instance  pour lancer
 // les donnes sont appeles attribu
 // method : fonction dana une classe

 print( '$isntance->foo: ' .$instance->foo . PHP_EOL ); // operateur  -> demander et afficher la valeur de la valeur foo dans l'instance
 $instance->foo = 42;  // on lui attribut la valeure 42
 print( '$isntance->foo: ' .$instance->foo . PHP_EOL );

 $instance->bar();

//=============================== $this =================================
<?php
// utiliser les atribu et method ea linterieur de la classe avec $this
//php -f Exemple.class.php -->

//classe : objet
// regroupe le code et les donnees :  plan/patron possiblea instancier et manipuler


class Exemple {

	public $foo = 0;  //attribu = variable de class
	// toutes les instances utiliseront cette variable;  toujours une constante

	function __construct() {  //soncstruction de la class
		print ( 'constructor called' . PHP_EOL );
		print ( '$this->foo: ' . $this->foo . PHP_EOL );
		$this->foo = 42;
		print( '$this->foo: ' . $this->foo . PHP_EOL );
		$this->bar();
	return;
	}
	function __destruct() {    // destruction de la classe
		print ( 'Destructor called' . PHP_EOL );
	return;
	}
	function bar() {    // destruction de la classe
		print ( 'Methode bar called' . PHP_EOL );
	return;
	}
}

$instance = new Exemple(); // instance  pour lancer
// les donnes sont appeles attribu
// method : fonction dana une classe


//================================ Pbunlic - visibilite =============================
//visibilite encapsulation :  ceux utilier par le client : la clasee et le develloppeur de la classe
// utilisateur de la classe n'a pas besoin de connaitre es calcul et array_uintersect_assoc
// ublic ou private
// Public : lecteur et ecriture de l'exterieur
// Private : method pas visible depuis l'exteiru de la  classe
<?php
// utiliser les atribu et method ea linterieur de la classe avec $this
//php -f Exemple.class.php -->

//classe : objet
// regroupe le code et les donnees :  plan/patron possiblea instancier et manipuler


class Exemple {

	public $publicFoo = 0;  //attribu = variable de class
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


//============================ SURCHARGE =====================================



 ?>
