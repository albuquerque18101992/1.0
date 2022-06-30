<?php

namespace App\sts\Controllers;

//Não permitir o acesso diretamente de nenhuma arquivo
if (!defined('URL')) {
    header("Location: /");
    die("ERRO: Página não encontrada!");
}

class Erro {

    //Métodos
    //
    //
    public function index() {
        echo "Página Erro! <br>";
    }

}
