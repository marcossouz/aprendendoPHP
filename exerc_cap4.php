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

echo "<br><table><tr><td>Cidade</td><td>Sigla</td><td>População</td></tr><tr><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td></tr>";
$soma = 0;
foreach ($cidades as $cidade => $dados) {
		echo '<tr><td>' . $cidade . '</td><td>' . $dados[1] . '</td><td>' . $dados[0] . "</td></tr>";

		$soma += $dados[0]; 
}

echo '<tr><td>&nbsp</td><td>P. Total</td><td>'. $soma .'</td></tr>';
echo "</table>";

echo "<h4>Ordenado por Cidade</h4>";

ksort($cidades);

echo "<br><table><tr><td>Cidade</td><td>Sigla</td><td>População</td></tr><tr><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td></tr>";
$soma = 0;
foreach ($cidades as $cidade => $dados) {
		echo '<tr><td>' . $cidade . '</td><td>' . $dados[1] . '</td><td>' . $dados[0] . "</td></tr>";

		$soma += $dados[0]; 
}

echo '<tr><td>&nbsp</td><td>P. Total</td><td>'. $soma .'</td></tr>';
echo "</table>";
