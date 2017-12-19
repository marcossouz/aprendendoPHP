<?php 

$meals = array(	'Walnut Bun' => 1,
			   	'Cashew Nuts and White Mushrooms' => 4.95,
			   	'Dried Mulberries' => 3.00,
				'Eggplant with chili sauce' => 6.50,
				'Shrimp Puffs' => 0); //shrimp Puffs is free!

//procura a chave e retorna boolean
if(array_key_exists('Shrimp Puffs', $meals)){
	print "Yes, we hame Shrimp Puffs<br>";	
}

//procura value e retorna boolean
if(in_array(3, $meals)){
	print 'There is a $3 item.' . "<br>";
}

print array_search(6.50, $meals); //procura value e retorna o valor 

echo "<br>";
print implode(', ', $meals); //imprime todos os elementos

echo "<br>";
unset($meals['Dried Mulberries']); //exclui elemento
$menu = implode(', ', $meals);
print $menu;