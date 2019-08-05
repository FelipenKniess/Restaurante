<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of persistenciaUsuario
 *
 * @author felipe.kniess
 */
require_once 'persistenciaPadrao.php';
require_once './model/modelUsuario.php';

class persistenciaUsuario extends persistenciaPadrao {
    private $conexao;

    function __construct() {
        $this->conexao = $this->conectar();
    }

    public function lista() {
        $sSelect = 'SELECT * FROM RESTAURANTE.TBUSUARIO';

        $oResultado = pg_query($this->conexao, $sSelect);
        $aUsuarios = [];

        while ($aLinha = pg_fetch_array($oResultado, null, PGSQL_ASSOC)) {
            $oUsuario = new modelUsuario(
                    $aLinha['usucodigo'], $aLinha['usuusername'], $aLinha['ususenha'], $aLinha['usunivel']);

            $aUsuarios[] = $oUsuario;
        }
        return $aUsuarios;
    }

    public function validaLogin($aLista) {
        $oUsuario = new modelUsuario(null, $_POST['usuusername'], $_POST['ususenha']); //Username e Senha
        $bValida = false;
        foreach ($aLista as $value) {
            if ($value->getUsername() == $oUsuario->getUsername() &&
                    $value->getSenha() == md5($oUsuario->getSenha())) {
                $bValida = true;
            }
        }
        return $bValida;
    }

}
