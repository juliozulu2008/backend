<?php

define('HOST', '127.0.0.1');
define('USUARIO','root');
define('SENHA', '');
define('BD', 'systec');

$conexao = mysqli_connect(HOST,USUARIO, SENHA, BD) or die ("Nao Conectou");

?>

