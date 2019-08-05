<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modelUsuario
 *
 * @author felipe.kniess
 */
class modelUsuario {

    private $codigo;
    private $username;
    private $senha;
    private $nivel;

    function __construct($codigo = null,$username = null, $senha = null, $nivel = null) {
        $this->codigo   = $codigo;
        $this->username = $username;
        $this->senha    = $senha;
        $this->nivel    = $nivel;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getUsername() {
        return $this->username;
    }


    function getSenha() {
        return $this->senha;
    }

    function getNivel() {
        return $this->nivel;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setNivel($nivel) {
        $this->nivel = $nivel;
    }
}
