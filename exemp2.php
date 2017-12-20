<?php

$flavors = array('Japanese' => array('hot' => 'wasabi',
									 'salty' => 'soy sauce'),
				 'Chinese' => array( 'hot' => 'mustard',
									 'pepper-salty' => 'prickly ash') );

//$culture é a chave e $culture_flavors o valor (um array) 
foreach ($flavors as $culture => $culture_flavors) {
	//$flavor é a chave e $example o valor
	foreach ($culture_flavors as $flavor => $example) {
		print 'A ' . $culture . ' ' . $flavor . ' flavor is ' . $example . "<br>"; 
	}
}

