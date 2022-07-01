<?php

namespace App\sts\Controllers;

//Não permitir o acesso diretamente de nenhuma arquivo, segurança
if (!defined('48b5t9')) {
    header("Location: /");
    die("ERRO: Página não encontrada!");
}

class Home {

    //Atributos
    //
    //
    private array $dados;

    //Métodos
    //
    //Carregar a View
    public function index() {
        $this->dados = [];
        $carregarView = new \Core\ConfigView("sts/Views/home/home", $this->dados);
        $carregarView->renderizar();
    }

}
