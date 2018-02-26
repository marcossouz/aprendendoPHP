<?php

if('POST' == $_SERVER['REQUEST_METHOD'])
{

	print $_POST['potK'] . ' elevado a ' . $_POST['potN'] . ' é: ' . potencia($_POST['potK'], $_POST['potN']);
}
else
{
	print <<<_HTML_
	<form method='post' action="$_SERVER[PHP_SELF]">
		Your number k: <input type="number" name="potK">
		<br>
		Your number n: <input type="number" name="potN">
		<br>
		<input type="submit" value="potencia">
	</form>
_HTML_;
}

function potencia(int $k, int $n)
{
	if($n <= 0) return 1;
	return $k * potencia($k, $n - 1);
}