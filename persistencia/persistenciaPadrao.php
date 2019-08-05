<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of persistenciaPadrao
 *
 * @author felipe.kniess
 */
class persistenciaPadrao {

   private $conexao;
    public function conectar() {
        $sHost = 'localhost';
        $sPort = '5432';
        $sDbName = 'restaurante';
        $sUser = 'postgres';
        $sPassword = 'IPM@1234567';

        return $this->conexao = pg_connect('host=' . $sHost . ' port=' . $sPort . ' dbname=' . $sDbName . ' user =' . $sUser . ' password=' . $sPassword);
    }
    
//    public function mudaPagina($url){
//        if($url)
//    }
}
