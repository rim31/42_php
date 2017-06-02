<?php

class NightsWatch {
	public $tab = array();
	public function fight() {
		foreach($this->tab as $elem => $key)
		{
				$key->fight();
		}
	}
	public function recruit($a) {
		$b = class_implements($a);
		foreach($b as $elem => $key){
			if ($key == "IFighter") {
				array_push($this->tab, $a);
			}
		}
	}
}
?>
