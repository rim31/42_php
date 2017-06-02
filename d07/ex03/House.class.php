<?php

class House {

	public function __construct() {
		return;
	}
	public function introduce() {
		print("House " . static::getHouseName() . " of " . static::getHouseSeat() . " : \"" . static::getHouseMotto() ."\"". PHP_EOL);
	}
}

?>
