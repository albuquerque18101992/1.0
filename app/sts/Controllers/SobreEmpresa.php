<?php

namespace App\sts\Controllers;

//Não permitir o acesso diretamente de nenhuma arquivo, segurança
if (!defined('48b5t9')) {
    header("Location: /");
    die("ERRO: Página não encontrada!");
}

class SobreEmpresa {

    //Métodos
    //
    //
    public function index() {
        $this->dados = [];
        $carregarView = new \Core\ConfigView("sts/Views/sobreEmpresa/sobreEmpresa", $this->dados);
        $carregarView->renderizar();
    }

}
