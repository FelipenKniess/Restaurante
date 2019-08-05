<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modelMesa
 *
 * @author felipe.kniess
 */
class modelMesa {

    private $codigo;
    private $identificacao;
    private $observacao;
    private $lugares;
    private $oucupacao;

    function __construct($codigo = null, $identificacao = null, $observacao = null, $lugares = null, $oucupacao = null) {
        $this->codigo = $codigo;
        $this->identificacao = $identificacao;
        $this->observacao = $observacao;
        $this->lugares = $lugares;
        $this->oucupacao = $oucupacao;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getIdentificacao() {
        return $this->identificacao;
    }

    function getObservacao() {
        return $this->observacao;
    }

    function getLugares() {
        return $this->lugares;
    }

    function getOucupacao() {
        return $this->oucupacao;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setIdentificacao($identificacao) {
        $this->identificacao = $identificacao;
    }

    function setObservacao($observacao) {
        $this->observacao = $observacao;
    }

    function setLugares($lugares) {
        $this->lugares = $lugares;
    }

    function setOucupacao($oucupacao) {
        $this->oucupacao = $oucupacao;
    }

}
