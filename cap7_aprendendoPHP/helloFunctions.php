<?php
//Logica para a execução da ação correta de acordo
//com o método solicitado
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	//se validate_form() retornar erros, 
	//eles serao passados para show_form()
	if($form_errors = validate_form())
	{
		show_form($form_errors);
	} else {
		process_form();
	}
} else {
	show_form();
}

//Faz algo quando o formulário é enviado
function process_form()
{
	print "Hello, " . $_POST['my_name'];
}

//Exibe o formulário
function show_form($errors = null)
{
	if($errors){
		print 'Please correct these errors: <ul><li>';
		print implode('</li><li>', $errors);
		print '</li></ul>';
	}

	print <<<_HTML_
	<form method="POST" action="$_SERVER[PHP_SELF]">
		Your name: <input type:"text" name="my_name">
		</br>
		<input type="submit" value="Say Hello">
	</form>
_HTML_;
}

//valida os dados do formulario
function validate_form()
{
		//começa com um array de mensagens de erro vazia
		$errors = array();

	//Adiciona uma mensagem de erro se o nome for muito curto
	//my_name tem que ter pelo menos 3 caracteres
	if(strlen($_POST['my_name']) < 3)
	{
		$errors[ ] = 'Your name must be at least 3 letters long.';
		return $errors;
	}
	//retorna o (possivelmente vazio) array de erro
	return $errors;
}