<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modelPedido
 *
 * @author felipe.kniess
 */
class modelPedido {

    /** @var modelMesa */
    private $Mesa;
    private $codigo;
    private $situacao;
    private $observacao;

    function getMesa() {
        return $this->Mesa;
    }

    function __construct(modelMesa $Mesa = null, $codigo = null, $situacao = null, $observacao = null) {
        $this->Mesa = $Mesa;
        $this->codigo = $codigo;
        $this->situacao = $situacao;
        $this->observacao = $observacao;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getSituacao() {
        return $this->situacao;
    }

    function getObservacao() {
        return $this->observacao;
    }

    function setMesa(modelMesa $Mesa) {
        $this->Mesa = $Mesa;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setSituacao($situacao) {
        $this->situacao = $situacao;
    }

    function setObservacao($observacao) {
        $this->observacao = $observacao;
    }

}
