<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modelItem
 *
 * @author felipe.kniess
 */
class modelItem {

    private $nome;
    private $preco;
    private $situacao;

    function __construct($nome = null, $preco = null, $situacao = null) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->situacao = $situacao;
    }

    function getNome() {
        return $this->nome;
    }

    function getPreco() {
        return $this->preco;
    }

    function getSituacao() {
        return $this->situacao;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }

    function setSituacao($situacao) {
        $this->situacao = $situacao;
    }
}
