<?php 

require 'Entree.php';

//Cria uma instancia e a atribui a $soup
$soup = new Entree('Chicken Soup', array('chicken', 'water'));
//Cria outra instância e a atribui a $sandwich
$sandwich = new Entree('Chicken Sandwich', array('chicken', 'bread'));

$sizes = Entree::getSizes();

foreach (['chicken', 'lemon', 'bread', 'water'] as $ing) {
	if($soup->hasIngredient($ing)) {
		print 'Soup contains ' . $ing . "<br>";
	}
	if($sandwich->hasIngredient($ing)) {
		print 'Sandwich contains ' . $ing . "<br>";
	}
}