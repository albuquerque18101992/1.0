<?php

namespace Core;

class ConfigController {

    //Atibutos
    //
    //
    private string $url;
    private array $urlConjunto;
    private string $urlController;
    private string $urlParametro;
    private string $urlSlugController;
    private array $format;

    //Métodos
    //
    //
    //Função contrutora, sem que iniciado o projeto esta função é criada obrigatoriamente
    public function __construct() {
        if (!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))) {
            //método recebe via GET o que é escrito na barra de endereço no navegador, atribui ao atributo private string $url;
            $this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
            echo "URL: {$this->url} <br>";
            $this->limparUrl();
            echo "URL Limpa: {$this->url} <br>";

            //Convertendo a URL em um Array
            $this->urlConjunto = explode("/", $this->url);
            //var_dump para visualizar o que tem dentr do atributo $urlConjunto
            var_dump($this->urlConjunto);

            //Condição para posição [0] do Array urlConjunto
            if (isset($this->urlConjunto[0])) {
                $this->urlController = $this->slugController($this->urlConjunto[0]);
            } else {
                $this->urlController = CONTROLLER;
            }

            //Condição para posição [1] do Array urlConjunto
            if (isset($this->urlConjunto[1])) {
                $this->urlParametro = $this->urlConjunto[1];
            } else {
                $this->urlParametro = "";
            }
        } else {
            $this->urlController = CONTROLLER;
            $this->urlParametro = "";
        }


        echo "<br> Aqui esta a posição 0 da String urlController { $this->urlController } <br>";
        echo "<br> Aqui está a posição 1 da String urlController que foi submetida à String urlParametro { $this->urlParametro } <br>";
    }

    //Função com nome sujestivo, limpando alguns dos caracteres especiais da barra de edereço, no nosso caso atributo url
    private function limparUrl() {
        //Eliminando as tag na barra de endereço
        $this->url = strip_tags($this->url);
        //Eliminando os espaços em branco na barra de endereço
        $this->url = trim($this->url);
        //Eliminando a barra no final da URL da barra de endereço
        $this->url = rtrim($this->url, "/");
        //Substituindo caracteres do Array de posição [a] pelos da posição [b], atributo format
        $this->format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]?;:.,\\\'<>°ºª ';
        $this->format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr--------------------------------';
        $this->url = strtr(utf8_decode($this->url), utf8_decode($this->format['a']), $this->format['b']);
    }

    //Tratando as letras da barra de endereço
    private function slugController($slugController) {
        //Converter letras da barra de endereço para minusculo
        $this->urlSlugController = strtolower($slugController);
        //Converter o traço(-) para espaço em branco
        $this->urlSlugController = str_replace("-", " ", $this->urlSlugController);
        //CONVERTER A PRIMEIRA LETRA DE CADA PALAVRA EM MAIUSCULO
        $this->urlSlugController = ucwords($this->urlSlugController);
        //Apos converter, remover o espaço em branco que existe em cada palavra
        $this->urlSlugController = str_replace(" ", "", $this->urlSlugController);

        return $this->urlSlugController;
    }

    //Carregando as páginas do dir app/sts/Controllers, ou seja carregando as controllers
    public function carregar() {
        //Pegando de forma dinamica o endereço da barra de navegação e incluindo no fim do caminho, por exempolo www.google.com.br/dir/qualquer_valor_digitado
        //qualquer_valor_digitado é a mesma coisa que a var $this->urlController
        $classe = "\\App\\sts\\Controllers\\" . $this->urlController;
        $classeCarregar = new $classe();
        $classeCarregar->index();
    }

}
