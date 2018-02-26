<?php 

/** Crie uma funcao recursiva que recebas um numro inteiro positivo N e calcule o somatorio de 1 a N */

$html =  "<form method='post' action='ex1.php'>
		Digite um numero para calcular o somatorio de 1 até ele.
		<input type='number' name='value' placeholder='digite o valor de n'>
		<input type='submit' value='calcular'>
	</form>";
 
 if(!isset($_POST['value']))
{
	echo $html;
}
else if($_POST['value'] < 0)
{
	echo 'Digite um numero maior que zero!';
	echo $html;
} 
else
{
	/*for($soma = 0, $i = 1; $i <= $_POST['value']; $i++)
	{
		$soma += $i;
	}*/

	$soma = somatorio($_POST['value']);
	echo 'O somatorio de 1 a ' . $_POST['value'] .' : ' . $soma;
}

//somatorio de 1 a N com recursao
function somatorio(int $n) : int
{
	if($n < 1) return 0;
	
	return $n + somatorio($n - 1);
}