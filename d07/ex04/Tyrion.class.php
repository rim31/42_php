<?php

class Tyrion extends Lannister{
	public function sleepWith($a) {
		if (get_class($a) == "Sansa")
			print("Let's do this." . PHP_EOL);
		else
			print("Not even if I'm drunk !" . PHP_EOL);
		}
}

?>
