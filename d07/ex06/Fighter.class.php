<?php
abstract class Fighter{
	public $name;
	protected function __construct($str){
		$this->name = $str;
	}
	abstract public function fight($target);

}

?>
