<?php
//Não permitir o acesso diretamente de nenhuma arquivo
if (!defined('48b5t9')) {
    header("Location: /");
    die("ERRO: Página não encontrada!");
}

echo "View da página sobre erro!";
