<?php

if('POST' == $_SERVER['REQUEST_METHOD'])
{

	print 'fatorial de ' . $_POST['fat'] . ' é: ' . fatorial($_POST['fat']);
}
else
{
	print <<<_HTML_
	<form method='post' action="$_SERVER[PHP_SELF]">
		Your name: <input type="number" name="fat">
		<br>
		<input type="submit" value="fatorial">
	</form>
_HTML_;
}

function fatorial(int $n)
{
	if( $n <= 1) return 1;
	return $n * fatorial($n - 1);
}