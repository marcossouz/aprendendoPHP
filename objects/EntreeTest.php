<?php 

require 'Entree.php';
require 'ComboMeal.php';

//Cria uma instancia e a atribui a $soup
$soup = new Entree('Chicken Soup', array('chicken', 'water'));
//Cria outra instância e a atribui a $sandwich
$sandwich = new Entree('Chicken Sandwich', array('chicken', 'bread'));

$sizes = Entree::getSizes();

foreach (['chicken', 'lemon', 'bread', 'water'] as $ing) {
	if($soup->hasIngredient($ing)) {
		print 'Soup contains ' . $ing . '<br>';
	}
	if($sandwich->hasIngredient($ing)) {
		print 'Sandwich contains ' . $ing . '<br>';
	}
}

try{
	$drink = new Entree('Glass of Milk', array('milk'));
	
	if($drink->hasIngredient('milk')){
		print 'yummy!<br>';
	}	
} catch(Exception $e) {
	//aqui a exception lançada na definição de classe é tratada
	print 'Couldn\'t create the drink: ' . $e->getMessage();
}

//Refeicao combo
$combo = new ComboMeal('Soup + Sandwich', array($soup, $sandwich));

foreach (['chicken', 'water', 'pickles'] as $ing) {
	if($combo->hasIngredient($ing)){
		print 'Somenting in the combo contains ' . $ing . "<br>";
	}
}