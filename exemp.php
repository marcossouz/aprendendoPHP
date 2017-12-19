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

echo "<br>";
echo '<tr><td>' . implode('</td><td>', $meals) . '</td></tr>';

echo "<br>";
echo '<ul><li>' . implode('</li><li>', $meals) . '</li></ul>';

//transformar string em array com explode
$fish = 'Bass, Carp, Pike, Flounder';
$fish_list = explode(', ', $fish);

print 'The second fish is ' . $fish_list[1];

$dinner = array('Sweet Corn and Aspargus',
				'Lemon Chicken',
				'Brased Bamboo Fungus');

$meal = array(	'break fast' => 'walnut Bun',
				'lunch' => 'Cashed Nuts and White mushrooms',
				'snack' => 'Dried Mulberries',
				'dinner' => 'Eggplant with Chili Sauce');

echo "<br><br>Before Sorting:<br>";

foreach ($dinner as $key => $value) {
	print " \$dinner: $key $value<br>";
}

foreach ($meal as $key => $value) {
	print " \$meal: $key $value<br>";
}

sort($dinner);
sort($meal);

print "<br>After Sorting: sort <br>";
foreach ($dinner as $key => $value) {
	print " \$dinner: $key $value<br>";
}

foreach ($meal as $key => $value) {
	print " \$meal: $key $value<br>";
}

echo "<br><br>";
$meals = array(	'break fast' => 'walnut Bun',
				'lunch' => 'Cashed Nuts and White mushrooms',
				'snack' => 'Dried Mulberries',
				'dinner' => 'Eggplant with Chili Sauce');

echo "Before Sorting: <br>";
foreach ($meals as $key => $value) {
	print "  \$meal: $key $value<br>";
}

echo "<br>After Sorting: asort<br>";

asort($meals); //com asort as chaves permanecem
//ksort() - se o array for numerico os elementos serao ordenados
//de tal forma que as chaves ficarao em ordem numerica crescente
foreach ($meals as $key => $value) {
	print "  \$meal: $key $value<br>";
}

echo "<br>Before Sorting: <br>";
$mealss = array(	'break fast' => 'walnut Bun',
				'lunch' => 'Cashed Nuts and White mushrooms',
				'snack' => 'Dried Mulberries',
				'dinner' => 'Eggplant with Chili Sauce');

foreach ($mealss as $key => $value) {
	print "  \$meal: $key $value<br>";
}

arsort($mealss); //ordenacao reversa
echo "<br>arsort: <br>";

foreach ($mealss as $key => $value) {
	print "  \$meal: $key $value<br>";
}
