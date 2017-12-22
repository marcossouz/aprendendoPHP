<?php 

require 'Entree.php';

//Cria uma instancia e a atribui a $soup
$soup = new Entree;
//Define as propriedades de $soup
$soup->name = 'Chicken Soup';
$soup->ingredients = array('chicken', 'water');

//Cria outra instância e a atribui a $sandwich
$sandwich = new Entree;
//Define as propriedades de $sandwich
$sandwich->name = 'Chicken Sandwich';
$sandwich->ingredients = array('chicken', 'bread');

foreach (['chicken', 'lemon', 'bread', 'water'] as $ing) {
	if($soup->hasIngredient($ing)) {
		print 'Soup contains ' . $ing . "<br>";
	}
	if($sandwich->hasIngredient($ing)) {
		print 'Sandwich contains ' . $ing . "<br>";
	}
}