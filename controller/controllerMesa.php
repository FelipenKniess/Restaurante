<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controllerMesa
 *
 * @author felipe.kniess
 */

require_once './model/modelMesa.php';
require_once './persistencia/persistenciaMesa.php';
require_once './view/viewMesa.php';

class controllerMesa {
    /** @var modelMesa*/ 
    private $ModelMesa;
    
    /** @var persistenciaMesa **/
    private $PersistenciaMesa;
   
    /** @var viewMesa**/
    private $ViewMesa;
    
    function __construct() {
        $this->processa();
    }
    
    public function processa(){
        $this->PersistenciaMesa = new persistenciaMesa();
        $this->ViewMesa = new viewMesa();
        echo $this->ViewMesa->contentMesa();
        $this->verificaInclusao();
    }
    
    private function verificaInclusao(){
        if(isset($_POST['numeroMesa']) && !empty($_POST['numeroMesa'])){
            $this->ModelMesa = new modelMesa(null, $_POST['numeroMesa'],$_POST['observacao'],$_POST['qtdLugares'],$_POST['oucupacao']);
            $this->PersistenciaMesa->setModelMesa($this->ModelMesa);
            $this->PersistenciaMesa->insertMesa();
        }
    }
}
