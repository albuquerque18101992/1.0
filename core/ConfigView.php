<?php

//Arquvio destinado ao carregamento das Views

namespace Core;

//Não permitir o acesso diretamente de nenhuma arquivo, segurança
if (!defined('48b5t9')) {
    header("Location: /");
    die("ERRO: Página não encontrada!");
}

class ConfigView {

    private string $nome;
    private array $dados;

    //Métodos
    //
    //Pega e cria como padrão, $nome a url da View e o $dados o array de dados vindo do banco de dados
    public function __construct($nome, array $dados) {
        $this->nome = $nome;
        $this->dados = $dados;
        echo "Caarregar a View: " . $this->nome . "<br>";
    }

    public function renderizar() {
        if (file_exists('app/' . $this->nome . '.php')) {
            include 'app/sts/Views/include/cabecalho.php';
            include 'app/' . $this->nome . '.php';
            include 'app/sts/Views/include/rodape.php';
        } else {
            echo "Página não encontrada:  $this->nome <br>";
            die("Página não encontrada!");
        }
    }

}
