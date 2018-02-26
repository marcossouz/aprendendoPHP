<?php

if('POST' == $_SERVER['REQUEST_METHOD'])
{

	print 'soma n cubos é: ' . somaNCubos($_POST['ncubos']);
}
else
{
	print <<<_HTML_
	<form method='post' action="$_SERVER[PHP_SELF]">
		Your number: <input type="number" name="ncubos">
		<br>
		<input type="submit" value="ncubos">
	</form>
_HTML_;
}

function somaNCubos(int $n)
{
	if($n <= 1) return 1;
	return ($n*$n*$n) + somaNCubos($n - 1);
}