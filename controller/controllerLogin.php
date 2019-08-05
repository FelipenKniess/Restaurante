<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controllerLogin
 *
 * @author felipe.kniess
 */
require_once './model/modelUsuario.php';
require_once './persistencia/persistenciaUsuario.php';
require_once './view/viewLogin.php';

class controllerLogin {

    /** @var modelUsuario */
    private $ModelUsuario;

    /** @var persistenciaUsuario */
    private $PersistenciaUsuario;

    /** @var viewLogin */
    private $viewLogin;

    function __construct() {
        $this->processa();
    }

    public function processa() {
        $this->PersistenciaUsuario = new persistenciaUsuario();
        $this->viewLogin = new viewLogin();
        echo $this->viewLogin->contentLogin();
        $aUsuarios = $this->PersistenciaUsuario->lista();
        if (isset($_POST['usuusername']) && isset($_POST['ususenha'])) {
            if ($this->PersistenciaUsuario->validaLogin($aUsuarios)) {
                echo 'DEU BOA';
            } else {
                echo 'NÃO DEU';
            }
        }
    }

}
