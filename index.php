<?php

//Iniciada sessão
session_start();
//Limpar buffer de saida
ob_start();

define('48b5t9', true);

//Incluso Composer autoload
require './vendor/autoload.php';

use Core\ConfigController as Home;

$url = new Home();
$url->carregar();
