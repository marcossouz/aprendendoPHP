<?php 

$cidades = array('Nova York  ' => [8175133, 'NY'],
			 	 'Los Angeles' => [3792621, 'CA'],
			 	 'Chicago    ' => [2695598, 'IL'],
				 'Houston    ' => [2100263, 'TX'],
			 	 'Filadelfia ' => [1526006, 'PA'],
			 	 'Phoenix    ' => [1445632, 'AZ'],
			 	 'San Antonio' => [1327407, 'TX'],
			 	 'San Diego  ' => [1307402, 'CA'],
			 	 'Dallas     ' => [1197816, 'TX'],
			 	 'San Jose   ' => [945942,  'CA'] );


asort($cidades);

echo "<h4>Ordenado por população</h4>";

echo "<br><table><tr><td>Cidade</td><td>Estado</td><td>População</td></tr><tr><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td></tr>";
$soma = 0;
foreach ($cidades as $cidade => $dados) {
		echo '<tr><td>' . $cidade . '</td><td>' . $dados[1] . '</td><td>' . $dados[0] . "</td></tr>";

		$soma += $dados[0]; 
}

echo '<tr><td>&nbsp</td><td>P. Total</td><td>'. $soma .'</td></tr>';
echo "</table>";

echo "<h4>Ordenado por Cidade</h4>";

ksort($cidades);

echo "<br><table><tr><td>Cidade</td><td>Estado</td><td>População</td></tr><tr><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td></tr>";
$soma = 0;
foreach ($cidades as $cidade => $dados) {
		echo '<tr><td>' . $cidade . '</td><td>' . $dados[1] . '</td><td>' . $dados[0] . "</td></tr>";

		$soma += $dados[0]; 
}

echo '<tr><td>&nbsp</td><td>P. Total</td><td>'. $soma .'</td></tr>';
echo "</table>";

echo "<h4>População por Estado</h4>";

echo "<br><table><tr><td>Estado</td><td>População</td></tr><tr><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td></tr>";
$soma = 0;
$estados = [];

foreach ($cidades as $cidade => $dados) {

	switch ($dados[1]) {
		case 'IL':
			if(array_key_exists('IL', $estados)) {
				$estados['IL'] += $dados[0];
			} else {
				$estados['IL'] = $dados[0];
			}
			break;
		case 'TX':
			if(array_key_exists('TX', $estados)) {
				$estados['TX'] += $dados[0];
			} else {
				$estados['TX'] = $dados[0];
			}
			break;
		case 'PA':
			if(array_key_exists('PA', $estados)){
				$estados['PA'] += $dados[0];
			} else {
				$estados['PA'] = $dados[0];
			}
			break;
		case 'CA':
			if(array_key_exists('CA', $estados)) {
				$estados['CA'] += $dados[0];
			} else {
				$estados['CA'] = $dados[0];
			}
			break;
		case 'NY':
			if(array_key_exists('NY', $estados)) {
				$estados['NY'] += $dados[0];
			} else {
				$estados['NY'] = $dados[0];
			}
			break;
		case 'AZ':
			if(array_key_exists('AZ', $estados)) {
				$estados['AZ'] += $dados[0];
			} else {
				$estados['AZ'] = $dados[0];
			}
			break;
	}
}

foreach ($estados as $key => $value) {
	echo '<tr><td>' . $key . '</td><td>' . $value . "</td></tr>";

}

echo "</table>";
