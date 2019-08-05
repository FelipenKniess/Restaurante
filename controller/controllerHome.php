<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controllerHome
 *
 * @author felipe.kniess
 */
require_once './model/modelMesa.php';
require_once './persistencia/persistenciaMesa.php';
require_once './view/viewHome.php';

class controllerHome {

    /** @var modelMesa */
    private $ModelMesa;

    /** @var persistenciaMesa */
    private $PersistenciaMesa;

    /** @var viewHome */
    private $ViewHome;

    function __construct() {
        $this->processa();
    }

    public function processa() {
        $this->PersistenciaMesa = new persistenciaMesa();
        $this->ViewHome = new viewHome();
        echo $this->ViewHome->contentHome();
    }

}
