<?php

namespace Core;

//Não permitir o acesso diretamente de nenhuma arquivo, segurança
if (!defined('48b5t9')) {
    header("Location: /");
    die("ERRO: Página não encontrada!");
}


class Config {

    //Configurações so podem ser acessadas pela class filha, no caso class configController
    protected function config() {
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
    }

}
