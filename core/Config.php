<?php

//Iniciada sessão
session_start();
//Limpar buffer de saida
ob_start();

//Definindo constantes, variavel que NUNCA muda de valor dentro do projeto!
//Lembrando que sempre deve ser declarada com letra MAIUSCULAS
define('URL', 'http://localhost/dir_1.0/');
define('URLADM', 'http://localhost/dir_1.0/adm');

define('CONTROLLER', 'Home');
define('METODO', 'INDEX');

//Credenciais de acesso ao banco de dados
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'projeto');
define('PORT', 3308);
