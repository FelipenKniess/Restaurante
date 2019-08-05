<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of persistenciaHome
 *
 * @author felipe.kniess
 */
require_once './model/modelMesa.php';

class persistenciaMesa extends persistenciaPadrao {

    private $conexao;

    /** @var ModelMesa */
    private $ModelMesa;
    
    function setModelMesa(ModelMesa $ModelMesa) {
        $this->ModelMesa = $ModelMesa;
    }

        function __construct() {
        $this->conexao = $this->conectar();
    }

    public function listaMesas() {
        $sSelect = 'SELECT * FROM RESTAURANTE.TBMESA';

        $oResultado = pg_query($this->conexao, $sSelect);
        $aMesas = [];

        while ($aLinha = pg_fetch_array($oResultado, null, PGSQL_ASSOC)) {
            $oMesa = new modelMesa($aLinha['mescodigo'], $aLinha['mesnumero'], $aLinha['mesobservacao'], $aLinha['meslugares'], $aLinha['mesoucupacao']);
            $aMesas[] = $oMesa;
        }
        return $aMesas;
    }

    public function insertMesa() {
        $sInsert = "INSERT INTO restaurante.tbmesa(
                    mesnumero, mesobservacao, meslugares, mesoucupacao)
                    VALUES ('" . $this->ModelMesa->getIdentificacao() . "' , '" . $this->ModelMesa->getObservacao() . "' , " . $this->ModelMesa->getLugares() . " , " . $this->ModelMesa->getOucupacao() . ")";

        pg_query($this->conexao, $sInsert);
        header("location: index.php");  
    }

}
