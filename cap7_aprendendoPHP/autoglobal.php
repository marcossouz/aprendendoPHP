<?php 

//--> retorna o tipo de resposta de formulario 
//exemplo de uso >>> if($_SERVER['REQUEST_METHOD'] == GET){}
echo $_SERVER['REQUEST_METHOD'] . "<br>";

//$_SERVER[PHP_SELF]; --> retorna parte url da solicitação 
//exemplo de uso >>> action="$_SERVER[PHP_SELF]"
echo $_SERVER['PHP_SELF'] . "<br>";

//Retorna o que tiver depois da interrogação na URL
echo $_SERVER['QUERY_STRING'] . "<br>";

//retorna o nome do servidor
echo $_SERVER['SERVER_NAME'] . "<br>";

//retorna o diretorio que contem os documentos no servidor
echo $_SERVER['DOCUMENT_ROOT'] . "<br>";

//IP do usuario que fez a solicitação ao servidor
echo $_SERVER['REMOTE_ADDR'] . "<br>";

//retorna o Navegador wem que solicitou a pagina
echo $_SERVER['HTTP_USER_AGENT'] . "<br>";

