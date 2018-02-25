<?php

class Entree {

	public $name;
	public $ingredients = array();

	public function __construct($name, $ingredients){
		
		//se $ingredients não for um array lanca uma exception
		if(!is_array($ingredients)){
			throw new Exception('$ingredients must be an array');	
		}

		$this->name = $name;
		$this->ingredients = $ingredients;
	}

	public function hasIngredient($ingredient){
		return in_array($ingredient, $this->ingredients);
	}

	public static function getSizes() {
		return array('small', 'medium', 'large');
	}
}