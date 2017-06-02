<?php
class UnholyFactory{
	public $tab = array();
	public $list = array();
	public function absorb($uf){
		if ($uf instanceof Fighter){
			if (array_search($uf, $this->tab) === false) {
				array_push($this->tab, $uf);
				array_push($this->list, $uf->name);
				print ("(Factory absorbed a fighter of type " . $uf->name . ")" . PHP_EOL);
			}
			else
				print ("(Factory already absorbed a fighter of type " . $uf->name . ")" . PHP_EOL);
		}
		else
			print ("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
	}

public function fabricate($rf){
	print_r($this->tab);
	print($this->list);
		if (array_search($rf, $this->list) !== false) {
			print "(Factory fabricates a fighter of type ".$rf.")" . PHP_EOL;
			// print $this->tab[array_search($rf, $this->list)] . PHP_EOL;
			return $this->tab[array_search($rf, $this->list)];
		}
		else
			print "(Factory hasn't absorbed any fighter of type ".$rf.")" . PHP_EOL;
	}
}

?>
